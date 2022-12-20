<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use App\Libraries\ImageCompressor;

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
            'company'                   => 'required|max_length[256]',
            'phone'                     => 'required|max_length[15]',
            'theme'                     => "if_exist|string|in_list[{$themeslist}]",
            'favicon'                   => 'max_size[favicon,2048]|is_image[favicon]',
            'background'                => 'max_size[background,2048]|is_image[background]',
            'logo'                      => 'max_size[logo,2048]|is_image[logo]',
            'emails.to'                 => 'required|valid_emails',
            'emails.cc'                 => 'permit_empty|valid_emails',
            'emails.cco'                => 'permit_empty|valid_emails',
            'whatsapp'                  => 'if_exist|max_length[15]',
            'googleTagManager'          => 'if_exist|max_length[256]',
            'googleSearchConsole'       => 'max_size[googleSearchConsole,2]|ext_in[googleSearchConsole,html]',
            'deleteGoogleSearchConsole' => 'if_exist|in_list[1]',
            'googleRecaptcha'           => 'if_exist|max_length[256]',
        ])) {
            // Nombre de la empresa.
            setting()->set('App.company', trimAll($this->request->getPost('company')));

            // Teléfono de contacto.
            setting()->set('App.phone', trimAll($this->request->getPost('phone')));

            // Tema de colores.
            setting()->set('App.theme', strtrim($this->request->getPost('theme')));

            $favicon = $this->request->getFile('favicon');

            // Ruta de archivos subidos para las configuraciones del backend.
            $uploadsPath = FCPATH . 'uploads/backend/settings/';

            $compress = ImageCompressor::getInstance();

            // Favicon.
            if ($favicon->isValid() && ! $favicon->hasMoved()) {
                $oldFavicon = $uploadsPath . setting()->get('App.favicon');

                // Elimina el favicon anterior.
                is_file($oldFavicon) && unlink($oldFavicon);

                $newName = $favicon->getRandomName();

                // Almacena el nuevo favicon.
                $favicon->move($uploadsPath, $newName);

                setting()->set('App.favicon', $newName);

                $compress->run($uploadsPath . $newName);

                unset($favicon, $oldFavicon, $newName);
            }

            $background = $this->request->getFile('background');

            // Fondo del login.
            if ($background->isValid() && ! $background->hasMoved()) {
                $oldBackground = $uploadsPath . setting()->get('App.background');

                // Elimina el fondo anterior.
                is_file($oldBackground) && unlink($oldBackground);

                $newName = $background->getRandomName();

                // Almacena el nuevo fondo.
                $background->move($uploadsPath, $newName);

                setting()->set('App.background', $newName);

                $compress->run($uploadsPath . $newName);

                unset($background, $oldBackground, $newName);
            }

            $logo = $this->request->getFile('logo');

            // Logo.
            if ($logo->isValid() && ! $logo->hasMoved()) {
                $oldLogo = $uploadsPath . setting()->get('App.logo');

                // Elimina el logo anterior.
                is_file($oldLogo) && unlink($oldLogo);

                $newName = $logo->getRandomName();

                // Almacena el nuevo logo.
                $logo->move($uploadsPath, $newName);

                setting()->set('App.logo', $newName);

                $compress->run($uploadsPath . $newName);

                unset($logo, $oldLogo, $newName);
            }

            $emails = $this->request->getPost('emails');

            // Emails de contacto.
            setting()->set('App.emailsTo', lowerCase(trimAll($emails['to'])));
            setting()->set('App.emailsCC', lowerCase(trimAll($emails['cc'])));
            setting()->set('App.emailsCCO', lowerCase(trimAll($emails['cco'])));

            // WhatsApp.
            setting()->set('App.whatsapp', stripAllSpaces($this->request->getPost('whatsapp')));

            // ID de Google Tag Manager.
            setting()->set('App.googleTagManager', strtrim($this->request->getPost('googleTagManager')));

            // Elimina el archivo de Google Search Console.
            if ((bool) $this->request->getPost('deleteGoogleSearchConsole')) {
                $file = FCPATH . setting()->get('App.googleSearchConsole');

                is_file($file) && unlink($file);

                setting()->forget('App.googleSearchConsole');

                unset($file);
            }

            $googleSearchConsole = $this->request->getFile('googleSearchConsole');

            // Google Search Console.
            if ($googleSearchConsole->isValid() && ! $googleSearchConsole->hasMoved()) {
                $oldGoogleSearchConsole = FCPATH . setting()->get('App.googleSearchConsole');

                // Elimina el archivo anterior.
                is_file($oldGoogleSearchConsole) && unlink($oldGoogleSearchConsole);

                // Almacena el archivo.
                $googleSearchConsole->move(FCPATH);

                setting()->set('App.googleSearchConsole', $googleSearchConsole->getName());

                unset($googleSearchConsole, $oldGoogleSearchConsole);
            }

            // Google reCAPTCHA.
            setting()->set('App.googleRecaptcha', strtrim($this->request->getPost('googleRecaptcha')));

            return redirect()->route('backend.settings.index')
                ->with('toast-success', 'El sitio web se ha modificado correctamente');
        }

        return view('backend/settings/update', [
            'validation' => service('validation'),
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
