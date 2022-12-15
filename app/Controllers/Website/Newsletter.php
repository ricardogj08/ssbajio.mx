<?php

namespace App\Controllers\Website;

use App\Controllers\BaseController;

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
}
