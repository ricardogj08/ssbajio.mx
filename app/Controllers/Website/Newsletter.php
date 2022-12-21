<?php

namespace App\Controllers\Website;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class Newsletter extends BaseController
{
    /**
     * Registra un nuevo usuario al newsletter.
     */
    public function create()
    {
        if ($this->validate([
            'email' => 'required|max_length[256]|valid_email|is_unique[newsletter.email]',
        ])) {
            $newsletterModel = model('NewsletterModel');

            // Registra al nuevo usuario.
            $newsletterModel->insert([
                'email' => lowerCase(trim($this->request->getPost('email'))),
            ]);

            return redirect()
                ->back()
                ->with('success', 'Gracias por suscribirte a nuestro newsletter');
        }

        return redirect()
            ->back()
            ->withInput()
            ->with('error', $this->validator->getError('email'));
    }

    /**
     * Renderiza la vista para cancelar la suscripción de un usuario al newsletter
     * y elimina el registro del newsletter del usuario.
     *
     * @param mixed|null $id
     * @param mixed|null $key
     */
    public function delete($id = null, $key = null)
    {
        // Valida si existe el usuario.
        if ($this->validateData(
            ['id' => $id],
            ['id' => 'required|is_natural_no_zero|is_not_unique[newsletter.id]'],
        )) {
            $newsletterModel = model('NewsletterModel');

            // Consulta los datos del usuario.
            $user = $newsletterModel->find($id);

            // Valida la llave de cancelación de suscripción.
            if ($user->hash !== null && hash_equals($user->hash, hash('sha512', $key))) {
                if (strtolower($this->request->getMethod()) === 'post') {
                    // Elimina el registro del newsletter del usuario.
                    $newsletterModel->delete($user->id);

                    return redirect()
                        ->route('website.posts.index')
                        ->with('success', 'Tu suscripción al newsletter se ha cancelado correctamente');
                }

                return view('website/newsletter/delete', [
                    'user' => $user,
                    'key'  => $key,
                ]);
            }
        }

        throw PageNotFoundException::forPageNotFound();
    }
}
