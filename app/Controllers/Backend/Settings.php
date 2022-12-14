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

        $themeslist = implode(',', $themes);

        // Valida los campos del formulario.
        if (strtolower($this->request->getMethod()) === 'post' && $this->validate([
            'company'                   => 'required|max_length[256]',
            'address'                   => 'required|max_length[256]',
            'phone'                     => 'required|max_length[15]',
            'schedules'                 => 'required|max_length[256]',
            'theme'                     => "permit_empty|string|in_list[{$themeslist}]",
            'favicon'                   => 'if_exist|uploaded[favicon]|max_size[favicon,2048]|is_image[favicon]',
            'background'                => 'if_exist|uploaded[background]|max_size[background,2048]|is_image[background]',
            'logo'                      => 'if_exist|uploaded[logo]|max_size[logo,2048]|is_image[logo]',
            'emails.to'                 => 'required|valid_emails',
            'emails.cc'                 => 'permit_empty|valid_emails',
            'emails.cco'                => 'permit_empty|valid_emails',
            'whatsapp'                  => 'if_exist|max_length[15]',
            'googleTagManager'          => 'if_exist|max_length[256]',
            'googleSearchConsole'       => 'if_exist|uploaded[googleSearchConsole]|max_size[googleSearchConsole,2]|mime_in[googleSearchConsole,text/plain]|ext_in[googleSearchConsole,html]',
            'deleteGoogleSearchConsole' => 'if_exist|in_list[1]',
            'googleRecaptcha'           => 'if_exist|max_length[256]',
            'googleMaps'                => 'if_exist|valid_url_strict',
        ])) {
            // Nombre de la empresa.
            setting()->set('App.general', trimAll($this->request->getPost('company')), 'company');

            // Derecci??n de la empresa.
            setting()->set('App.general', trimAll($this->request->getPost('address')), 'address');

            // Tel??fono de contacto.
            setting()->set('App.general', trimAll($this->request->getPost('phone')), 'phone');

            // Horarios de la empresa.
            setting()->set('App.general', trimAll($this->request->getPost('schedules')), 'schedules');

            // Tema de colores.
            setting()->set('App.general', strtrim($this->request->getPost('theme')), 'theme');

            $favicon = $this->request->getFile('favicon');

            // Ruta de archivos subidos para las configuraciones del backend.
            $uploadsPath = FCPATH . 'uploads/backend/settings/';

            $compress = ImageCompressor::getInstance();

            // Favicon.
            if ($favicon->isValid() && ! $favicon->hasMoved()) {
                $oldFavicon = $uploadsPath . setting()->get('App.general', 'favicon');

                // Elimina el favicon anterior.
                is_file($oldFavicon) && unlink($oldFavicon);

                $newName = $favicon->getRandomName();

                // Almacena el nuevo favicon.
                $favicon->move($uploadsPath, $newName);

                setting()->set('App.general', $newName, 'favicon');

                $compress->run($uploadsPath . $newName);

                unset($favicon, $oldFavicon, $newName);
            }

            $background = $this->request->getFile('background');

            // Fondo del login.
            if ($background->isValid() && ! $background->hasMoved()) {
                $oldBackground = $uploadsPath . setting()->get('App.general', 'background');

                // Elimina el fondo anterior.
                is_file($oldBackground) && unlink($oldBackground);

                $newName = $background->getRandomName();

                // Almacena el nuevo fondo.
                $background->move($uploadsPath, $newName);

                setting()->set('App.general', $newName, 'background');

                $compress->run($uploadsPath . $newName);

                unset($background, $oldBackground, $newName);
            }

            $logo = $this->request->getFile('logo');

            // Logo.
            if ($logo->isValid() && ! $logo->hasMoved()) {
                $oldLogo = $uploadsPath . setting()->get('App.general', 'logo');

                // Elimina el logo anterior.
                is_file($oldLogo) && unlink($oldLogo);

                $newName = $logo->getRandomName();

                // Almacena el nuevo logo.
                $logo->move($uploadsPath, $newName);

                setting()->set('App.general', $newName, 'logo');

                $compress->run($uploadsPath . $newName);

                unset($logo, $oldLogo, $newName);
            }

            $emails = $this->request->getPost('emails');

            // Emails de contacto.
            setting()->set('App.emails', lowerCase(trimAll($emails['to'])), 'to');
            setting()->set('App.emails', lowerCase(trimAll($emails['cc'])), 'cc');
            setting()->set('App.emails', lowerCase(trimAll($emails['cco'])), 'cco');

            // WhatsApp.
            setting()->set('App.apps', stripAllSpaces($this->request->getPost('whatsapp')), 'whatsapp');

            // ID de Google Tag Manager.
            setting()->set('App.apps', strtrim($this->request->getPost('googleTagManager')), 'google:TagManager');

            // Elimina el archivo de Google Search Console.
            if ($this->request->getPost('deleteGoogleSearchConsole')) {
                $file = FCPATH . setting()->get('App.apps', 'google:SearchConsole');

                is_file($file) && unlink($file);

                setting()->forget('App.apps', 'google:SearchConsole');

                unset($file);
            }

            $googleSearchConsole = $this->request->getFile('googleSearchConsole');

            // Google Search Console.
            if ($googleSearchConsole->isValid() && ! $googleSearchConsole->hasMoved()) {
                $oldGoogleSearchConsole = FCPATH . setting()->get('App.apps', 'google:SearchConsole');

                // Elimina el archivo anterior.
                is_file($oldGoogleSearchConsole) && unlink($oldGoogleSearchConsole);

                // Almacena el archivo.
                $googleSearchConsole->move(FCPATH);

                setting()->set('App.apps', $googleSearchConsole->getName(), 'google:SearchConsole');

                unset($googleSearchConsole, $oldGoogleSearchConsole);
            }

            // Google reCAPTCHA.
            setting()->set('App.apps', strtrim($this->request->getPost('googleRecaptcha')), 'google:Recaptcha');

            // Google Maps URL.
            setting()->set('App.apps', strtrim($this->request->getPost('googleMaps')), 'google:Maps');

            return redirect()
                ->route('backend.settings.index')
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
