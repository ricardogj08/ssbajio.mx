<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use RuntimeException;

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

        // Valida los campos del formulario.
        if (strtolower($this->request->getMethod()) === 'post' && $this->validate([
            'googleTagManager' => 'if_exist|string',
            'theme'            => "if_exist|string|in_list[{$themeslist}]",
            'favicon'          => 'max_size[favicon,2048]|is_image[favicon]',
        ])) {
            // ID de Google Tag Manager.
            setting()->set('App.googleTagManager', trim($this->request->getPost('googleTagManager')));

            // Tema de colores.
            setting()->set('App.theme', trim($this->request->getPost('theme')));

            $favicon = $this->request->getFile('favicon');

            $uploadsPath = FCPATH . 'uploads/backend/settings/';

            // Favicon.
            if ($favicon->isValid() && ! $favicon->hasMoved()) {
                $oldFavicon = $uploadsPath . setting()->get('App.favicon');

                // Elimina el favicon anterior.
                is_file($oldFavicon) && unlink($oldFavicon);

                $newName = $favicon->getRandomName();

                // Almacena el nuevo favicon.
                $favicon->move($uploadsPath, $newName);

                setting()->set('App.favicon', $newName);
            } else {
                throw new RuntimeException($favicon->getErrorString() . '(' . $favicon->getError() . ')');
            }
        }

        return view('backend/settings/update', [
            'validation' => service('validation'),
            'settings'   => setting(),
            'themes'     => $themes,
        ]);
    }

    /**
     * Renderiza la vista de todas las configuraciones del sitio web.
     */
    public function index()
    {
        return view('backend/settings/index');
    }
}
