<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Inicia la tabla de configuraciones.
     */
    public function run()
    {
        helper('setting');

        if (setting()->get('App.siteName') === null) {
            setting()->set('App.siteName', 'Soluciones de Sujeción del Bajío');
        }

        if (setting()->get('App.theme') === null) {
            setting()->set('App.theme', 'autumn');
        }

        if (setting()->get('App.favicon') === null) {
            setting()->set('App.favicon', '1670343267_cb330cbc1f1a8556a514.svg');
        }

        if (setting()->get('App.loginBackground') === null) {
            setting()->set('App.loginBackground', '1670351356_af7dc5299ed3ff3ba50e.jpg');
        }

        if (setting()->get('App.logo') === null) {
            setting()->set('App.logo', '1670357740_ba0feaa5940d0094187a.svg');
        }
    }
}
