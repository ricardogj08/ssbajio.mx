<?php

namespace App\Controllers\Backend\Modules;

use App\Controllers\BaseController;
use App\Libraries\ImageCompressor;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\I18n\Time;
use DiDom\Document;
use RuntimeException;

class Posts extends BaseController
{
    use ResponseTrait;

    /**
     * Renderiza la vista de registro de artículos
     * y registra un nuevo artículo.
     */
    public function create()
    {
        // Valida los campos del formulario.
        if (strtolower($this->request->getMethod()) === 'post' && $this->validate(
            [
                'title'      => 'required|max_length[256]',
                'cover'      => 'uploaded[cover]|max_size[cover,2048]|is_image[cover]',
                'excerpt'    => 'required|max_length[512]',
                'started_at' => 'permit_empty|valid_date[Y-m-d\TH:i]|date_greater_than_equal_to_now',
                'body'       => 'required|max_length[2097152]',
            ],
            [
                'started_at' => [
                    'date_greater_than_equal_to_now' => lang('Validation.valid_date'),
                ],
            ]
        )) {
            $cover = $this->request->getFile('cover');

            // Portada.
            if (! $cover->isValid() || $cover->hasMoved()) {
                throw new RuntimeException($cover->getErrorString() . '(' . $cover->getError() . ')');
            }

            $coverName = $cover->getRandomName();

            $title = trimAll($this->request->getPost('title'));

            // URL del artículo.
            $slug = mb_url_title($title, '-', true);

            // Valida si el slug del artículo es único.
            if ($this->validateData(
                ['title' => $slug],
                ['title' => 'max_length[256]|is_unique[posts.slug]'],
            )) {
                // Ruta de portadas subidos para los artículos.
                $uploadsPath = FCPATH . 'uploads/website/posts/covers/';

                // Almacena la portada.
                $cover->move($uploadsPath, $coverName);

                $started_at = strtrim($this->request->getPost('started_at'));

                $postModel = model('PostModel');

                // Registra el nuevo artículo.
                $postModel->insert([
                    'title'      => $title,
                    'slug'       => $slug,
                    'user_id'    => session('user.id'),
                    'cover'      => $coverName,
                    'excerpt'    => trimAll($this->request->getPost('excerpt')),
                    'body'       => trim($this->request->getPost('body')),
                    'active'     => empty($started_at),
                    'started_at' => $started_at
                        ? Time::parse($started_at)->toDateTimeString()
                        : null,
                ]);

                ImageCompressor::getInstance()->run($uploadsPath . $coverName);

                return redirect()
                    ->route('backend.modules.posts.index')
                    ->with('toast-success', 'El artículo se ha registrado correctamente');
            }
        }

        return view('backend/modules/posts/create', [
            'validation' => service('validation'),
        ]);
    }

    /**
     * Renderiza la vista de la tabla de artículos
     * y realiza búsquedas y consultas de todos los artículos.
     */
    public function index()
    {
        // Valida el parámetro de búsqueda.
        if (! $this->validate([
            'q' => 'if_exist|max_length[256]',
        ])) {
            return redirect()
                ->route('backend.modules.posts.index')
                ->with('error', $this->validator->getError('q'));
        }

        // Patrón de búsqueda (por defecto: '').
        $query = trimAll($this->request->getGet('q'));

        $postModel = model('PostModel');

        /**
         * Consulta los datos de todos los artículos
         * que coinciden con el patrón de búsqueda
         * con paginación.
         */
        $posts = $postModel->select('id, title, slug, active, created_at, started_at')
            ->like('title', $query)
            ->orderBy('created_at', 'desc')
            ->paginate(8, 'posts');

        return view('backend/modules/posts/index', [
            'query'      => $query,
            'validation' => service('validation'),
            'posts'      => $posts,
            'pager'      => $postModel->pager,
        ]);
    }

    /**
     * Renderiza la vista de los datos de un artículo.
     *
     * @param mixed|null $id
     */
    public function show($id = null)
    {
        // Valida si existe el artículo.
        if ($this->validateData(
            ['id' => $id],
            ['id' => 'required|is_natural_no_zero|is_not_unique[posts.id]']
        )) {
            $postModel = model('PostModel');

            // Consulta los datos del artículo.
            $post = $postModel->user()->find($id);

            return view('backend/modules/posts/show', [
                'post' => $post,
            ]);
        }

        throw PageNotFoundException::forPageNotFound();
    }

    /**
     * Elimina el registro de un artículo.
     *
     * @param mixed|null $id
     */
    public function delete($id = null)
    {
        // Valida si existe el artículo.
        if ($this->validateData(
            ['id' => $id],
            ['id' => 'required|is_natural_no_zero|is_not_unique[posts.id]']
        )) {
            $postModel = model('PostModel');

            // Consulta los datos del artículo.
            $post = $postModel->find($id);

            $document = new Document($post->body);

            // Ruta de archivos adjuntos subidos para los artículos.
            $uploadsPath = FCPATH . 'uploads/website/posts/attachments/';

            // Elimina todos los archivos adjuntos del artículo.
            foreach ($document->find('figure *::attr(href)') as $uri) {
                $file = basename(single_service('uri', $uri)->getPath());

                $filePath = $uploadsPath . $file;

                // Elimina el archivo.
                is_file($filePath) && unlink($filePath);
            }

            $cover = FCPATH . 'uploads/website/posts/covers/' . $post->cover;

            // Elimina la portada.
            is_file($cover) && unlink($cover);

            // Elimina el artículo.
            $postModel->delete($post->id);

            return redirect()
                ->route('backend.modules.posts.index')
                ->with('toast-success', 'El artículo se ha eliminado correctamente');
        }

        throw PageNotFoundException::forPageNotFound();
    }

    /**
     * Almacena archivos adjuntos.
     */
    public function createAttachment()
    {
        // Valida el archivo.
        if ($this->validate([
            'attachment' => 'uploaded[attachment]|max_size[attachment,16384]',
        ])) {
            $attachment = $this->request->getFile('attachment');

            if (! $attachment->isValid() || $attachment->hasMoved()) {
                return $this->failServerError($attachment->getErrorString() . '(' . $attachment->getError() . ')');
            }

            // Comprime el archivo si es una imagen.
            if ($this->validate([
                'attachment' => 'is_image[attachment]',
            ])) {
                ImageCompressor::getInstance()->run($attachment->getRealPath());
            }

            // Ruta de archivos adjuntos subidos para los artículos.
            $uploadsPath = 'uploads/website/posts/attachments/';

            $newName = $attachment->getRandomName();

            // Almacena el archivo.
            $attachment->move(FCPATH . $uploadsPath, $newName);

            return $this->respondCreated([
                'attachment' => [
                    'filename' => $newName,
                    'url'      => '/' . $uploadsPath . $newName,
                ],
            ]);
        }

        return $this->failValidationError($this->validator->getError('attachment'));
    }

    /**
     * Elimina un archivo adjunto.
     *
     * @param mixed|null $id
     * @param mixed|null $attachment
     */
    public function deleteAttachment($attachment = null)
    {
        if ($this->validateData(
            ['attachment' => $attachment],
            ['attachment' => 'required|string']
        )) {
            $file = basename($attachment);

            // Ruta de archivos adjuntos subidos para los artículos.
            $uploadsPath = 'uploads/website/posts/attachments/';

            $filePath = FCPATH . $uploadsPath . $file;

            // Elimina el archivo.
            is_file($filePath) && unlink($filePath);

            return $this->respondDeleted([
                'attachment' => [
                    'filename' => $file,
                    'url'      => '/' . $uploadsPath . $file,
                ],
            ]);
        }

        return $this->failValidationError($this->validator->getError('attachment'));
    }

    /**
     * Renderiza la vista para editar un artículo
     * y modifica los datos de un artículo.
     *
     * @param mixed|null $id
     */
    public function update($id = null)
    {
        if ($this->validateData(
            ['id' => $id],
            ['id' => 'required|is_natural_no_zero|is_not_unique[posts.id]']
        )) {
            $postModel = model('PostModel');

            // Consulta los datos del artículo.
            $post = $postModel->user()->find($id);

            // Valida los campos del formulario.
            if (strtolower($this->request->getMethod()) === 'post' && $this->validate([
                'title'      => 'required|max_length[256]',
                'cover'      => 'if_exist|uploaded[cover]|max_size[cover,2048]|is_image[cover]',
                'excerpt'    => 'required|max_length[512]',
                'started_at' => 'permit_empty|valid_date[Y-m-d\TH:i]',
                'body'       => 'required|max_length[2097152]',
            ])) {
                $title = trimAll($this->request->getPost('title'));

                // URL del artículo.
                $slug = mb_url_title($title, '-', true);

                // Valida si el slug del artículo es único a excepción de él mismo.
                if ($this->validateData(
                    ['title' => $slug],
                    ['title' => "max_length[256]|is_unique[posts.slug,slug,{$post->slug}]"]
                )) {
                    $cover = $this->request->getFile('cover');

                    $newName = $post->cover;

                    // Portada.
                    if ($cover->isValid() && ! $cover->hasMoved()) {
                        // Ruta de portadas subidos para los artículos.
                        $uploadsPath = FCPATH . 'uploads/website/posts/covers/';

                        $oldCover = $uploadsPath . $post->cover;

                        // Elimina la portada anterior.
                        is_file($oldCover) && unlink($oldCover);

                        $newName = $cover->getRandomName();

                        // Almacena la nueva portada.
                        $cover->move($uploadsPath, $newName);

                        ImageCompressor::getInstance()->run($uploadsPath . $newName);

                        unset($cover, $uploadsPath, $oldCover);
                    }

                    $started_at = strtrim($this->request->getPost('started_at'));

                    // Actualiza los datos del artículo.
                    $postModel->update($post->id, [
                        'title'   => $title,
                        'slug'    => $slug,
                        'user_id' => session('user.id'),
                        'cover'   => $newName,
                        'excerpt' => trimAll($this->request->getPost('excerpt')),
                        'body'    => trim($this->request->getPost('body')),
                        'active'  => $started_at
                            ? Time::now()->isAfter(Time::parse($started_at))
                            : true,
                        'started_at' => $started_at
                            ? Time::parse($started_at)->toDateTimeString()
                            : null,
                    ]);

                    return redirect()
                        ->route('backend.modules.posts.index')
                        ->with('toast-success', 'El artículo se ha modificado correctamente');
                }
            }

            return view('backend/modules/posts/update', [
                'post'       => $post,
                'validation' => service('validation'),
            ]);
        }

        throw PageNotFoundException::forPageNotFound();
    }
}
