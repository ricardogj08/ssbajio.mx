<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Inicializa la tabla de configuraciones.
     */
    public function run()
    {
        helper('setting');

        if (setting()->get('App.general', 'company') === null) {
            setting()->set('App.general', 'Soluciones de Sujeción del Bajío', 'company');
        }

        if (setting()->get('App.general', 'phone') === null) {
            setting()->set('App.general', '442 215 2730', 'phone');
        }

        if (setting()->get('App.general', 'theme') === null) {
            setting()->set('App.general', 'autumn', 'theme');
        }

        if (setting()->get('App.general', 'favicon') === null) {
            setting()->set('App.general', '1670343267_cb330cbc1f1a8556a514.svg', 'favicon');
        }

        if (setting()->get('App.general', 'background') === null) {
            setting()->set('App.general', '1670351356_af7dc5299ed3ff3ba50e.jpg', 'background');
        }

        if (setting()->get('App.general', 'logo') === null) {
            setting()->set('App.general', '1670357740_ba0feaa5940d0094187a.svg', 'logo');
        }

        if (setting()->get('App.emails', 'to') === null) {
            setting()->set('App.emails', 'pruebas@genotipo.com', 'to');
        }

        if (setting()->get('App.emails', 'cc') === null) {
            setting()->set('App.emails', 'leads@genotipo.com', 'cc');
        }

        if (setting()->get('App.emails', 'cco') === null) {
            setting()->set('App.emails', 'ricardo@genotipo.com', 'cco');
        }
    }
}
