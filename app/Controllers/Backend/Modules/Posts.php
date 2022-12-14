<?php

namespace App\Controllers\Backend\Modules;

use App\Controllers\BaseController;
use CodeIgniter\I18n\Time;
use RuntimeException;

class Posts extends BaseController
{
    /**
     * Renderiza la vista de registro de artículos
     * y registra un nuevo artículo.
     */
    public function create()
    {
        // Valida los campos del formulario.
        if (strtolower($this->request->getMethod()) === 'post' && $this->validate([
            'title'      => 'required|max_length[256]',
            'cover'      => 'uploaded[cover]|max_size[cover,2048]|is_image[cover]',
            'excerpt'    => 'required|max_length[512]',
            'started_at' => 'permit_empty|valid_date[Y-m-d\TH:i]',
            'body'       => 'required|max_length[2097152]',
        ])) {
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
                // Almacena la portada.
                $cover->move(FCPATH . 'uploads/website/posts', $coverName);

                $started_at = trim($this->request->getPost('started_at'));

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
                    'started_at' => empty($started_at)
                        ? null
                        : Time::parse($started_at)->toDateTimeString(),
                ]);

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
        // Patrón de búsqueda (por defecto: '').
        $query = trimAll($this->request->getGet('q'));

        return view('backend/modules/posts/index', [
            'query' => $query,
        ]);
    }
}
