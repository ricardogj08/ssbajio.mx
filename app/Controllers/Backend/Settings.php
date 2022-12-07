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

        // Valida los campos del formulario.
        if (strtolower($this->request->getMethod()) === 'post' && $this->validate([
            'company'          => 'required|max_length[256]',
            'phone'            => 'required|max_length[15]',
            'theme'            => "if_exist|string|in_list[{$themeslist}]",
            'favicon'          => 'max_size[favicon,2048]|is_image[favicon]',
            'loginBackground'  => 'max_size[loginBackground,2048]|is_image[loginBackground]',
            'logo'             => 'max_size[logo,2048]|is_image[logo]',
            'emails.to'        => 'required|valid_emails',
            'emails.cc'        => 'permit_empty|valid_emails',
            'emails.cco'       => 'permit_empty|valid_emails',
            'googleTagManager' => 'if_exist|string',
            'whatsapp'         => 'if_exist|max_length[15]',
        ])) {
            // Nombre de la empresa.
            setting()->set('App.siteName', trimAll($this->request->getPost('company')));

            // Teléfono de contacto.
            setting()->set('App.phone', trimAll($this->request->getPost('phone') ?? ''));

            // Tema de colores.
            setting()->set('App.theme', trim($this->request->getPost('theme') ?? ''));

            $favicon = $this->request->getFile('favicon');

            // Ruta de archivos subidos para las configuraciones del backend.
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

                unset($favicon, $oldFavicon, $newName);
            }

            $loginBackground = $this->request->getFile('loginBackground');

            // Fondo del login.
            if ($loginBackground->isValid() && ! $loginBackground->hasMoved()) {
                $oldLoginBackground = $uploadsPath . setting()->get('App.loginBackground');

                // Elimina el fondo anterior.
                is_file($oldLoginBackground) && unlink($oldLoginBackground);

                $newName = $loginBackground->getRandomName();

                // Almacena el nuevo fondo.
                $loginBackground->move($uploadsPath, $newName);

                setting()->set('App.loginBackground', $newName);

                unset($loginBackground, $oldLoginBackground, $newName);
            }

            $logo = $this->request->getFile('logo');

            // Logo.
            if ($logo->isValid() && ! $logo->hasMoved()) {
                $oldLogo = $uploadsPath . setting()->get('App.logo');

                // Elimina el fondo anterior.
                is_file($oldLogo) && unlink($oldLogo);

                $newName = $logo->getRandomName();

                // Almacena el nuevo fondo.
                $logo->move($uploadsPath, $newName);

                setting()->set('App.logo', $newName);

                unset($logo, $oldLogo, $newName);
            }

            $emails = $this->request->getPost('emails');

            // Emails de contacto.
            setting()->set('App.emailsTo', lowerCase(trimAll($emails['to'] ?? '')));
            setting()->set('App.emailsCC', lowerCase(trimAll($emails['cc'] ?? '')));
            setting()->set('App.emailsCCO', lowerCase(trimAll($emails['cco'] ?? '')));

            // ID de Google Tag Manager.
            setting()->set('App.googleTagManager', trim($this->request->getPost('googleTagManager') ?? ''));

            // WhatsApp.
            setting()->set('App.whatsapp', stripAllSpaces($this->request->getPost('whatsapp') ?? ''));

            return redirect()->route('backend.settings.index');
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
