<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;

class Settings extends BaseController
{
    /**
     * Renderiza la vista para editar las configuraciones del sitio web
     * y modifica las configuraciones del sitio web.
     */
    public function update()
    {
        $settings = service('settings');

        // Valida los campos del formulario.
        if (strtolower($this->request->getMethod()) === 'post' && $this->validate([
            'googleTagManager' => 'if_exist|string',
        ])) {
            // ID de Google Tag Manager.
            $settings->set('App.googleTagManager', trim($this->request->getPost('googleTagManager')));
        }

        return view('backend/settings/update', [
            'validation' => service('validation'),
            'settings'   => $settings,
        ]);
    }

    public function index()
    {
        return view('backend/settings/index');
    }
}
