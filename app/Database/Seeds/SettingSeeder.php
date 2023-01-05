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

        if (setting()->get('App.general', 'address') === null) {
            setting()->set('App.general', 'Carretera Federal 57 México Querétaro Lateral Norte Km 201, 76240 Santiago de Querétaro, Qro.', 'address');
        }

        if (setting()->get('App.general', 'phone') === null) {
            setting()->set('App.general', '442 220 9582', 'phone');
        }

        if (setting()->get('App.general', 'schedules') === null) {
            setting()->set('App.general', 'Lunes a Viernes 9:00 am · 6:30 pm', 'schedules');
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

        if (setting()->get('App.apps', 'google:Recaptcha') === null) {
            setting()->set('App.apps', '6LeKlZojAAAAALJDscGS6k4ko0ZCOCNn8vgp_Ks4', 'google:Recaptcha');
        }

        if (setting()->get('App.apps', 'google:Maps') === null) {
            setting()->set('App.apps', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7470.758514053875!2d-100.30782083612978!3d20.572563976536227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d343d2a90eed71%3A0x131fe1da87f977e6!2sSoluciones%20De%20Sujecion%20Del%20Bajio!5e0!3m2!1ses!2smx!4v1672939385720!5m2!1ses!2smx', 'google:Maps');
        }
    }
}
