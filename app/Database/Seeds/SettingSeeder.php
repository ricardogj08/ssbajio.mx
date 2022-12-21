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

        if (setting()->get('App.company') === null) {
            setting()->set('App.company', 'Soluciones de Sujeción del Bajío');
        }

        if (setting()->get('App.phone') === null) {
            setting()->set('App.phone', '442 215 2730');
        }

        if (setting()->get('App.theme') === null) {
            setting()->set('App.theme', 'autumn');
        }

        if (setting()->get('App.favicon') === null) {
            setting()->set('App.favicon', '1670343267_cb330cbc1f1a8556a514.svg');
        }

        if (setting()->get('App.background') === null) {
            setting()->set('App.background', '1670351356_af7dc5299ed3ff3ba50e.jpg');
        }

        if (setting()->get('App.logo') === null) {
            setting()->set('App.logo', '1670357740_ba0feaa5940d0094187a.svg');
        }

        if (setting()->get('App.emailsTo') === null) {
            setting()->set('App.emailsTo', 'pruebas@genotipo.com');
        }

        if (setting()->get('App.emailsCC') === null) {
            setting()->set('App.emailsCC', 'leads@genotipo.com');
        }

        if (setting()->get('App.emailsCCO') === null) {
            setting()->set('App.emailsCCO', 'ricardo@genotipo.com');
        }
    }
}
