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
        // Lista de temas de colores de daisyUI.
        $themes = [
            'light', 'dark', 'cupcake', 'bumblebee', 'emerald', 'corporate', 'synthwave', 'retro',
            'cyberpunk', 'valentine', 'halloween', 'garden', 'forest', 'aqua', 'lofi', 'pastel',
            'fantasy', 'wireframe', 'black', 'luxury', 'dracula', 'cmyk', 'autumn', 'business',
            'acid', 'lemonade', 'night', 'coffee', 'winter',
        ];

        $themeslist = implode(',', array_merge($themes, ['']));

        $settings = service('settings');

        // Valida los campos del formulario.
        if (strtolower($this->request->getMethod()) === 'post' && $this->validate([
            'googleTagManager' => 'if_exist|string',
            'theme'            => "if_exist|string|in_list[{$themeslist}]",
        ])) {
            // ID de Google Tag Manager.
            $settings->set('App.googleTagManager', trim($this->request->getPost('googleTagManager')));

            // Tema de colores.
            $settings->set('App.theme', trim($this->request->getPost('theme')));
        }

        return view('backend/settings/update', [
            'validation' => service('validation'),
            'settings'   => $settings,
            'themes'     => $themes,
        ]);
    }

    public function index()
    {
        return view('backend/settings/index');
    }
}
