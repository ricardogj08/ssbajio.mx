<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Website\Home::index', ['as' => 'website.home.index']);

// Definición de rutas del formulario de contacto.
$routes->group('contacto', static function ($routes) {
    $routes->get('', 'Website\Prospects::new', ['as' => 'website.prospects.new']);
    $routes->post('gracias', 'Website\Prospects::create', ['as' => 'website.prospects.create', 'filter' => 'reCAPTCHA']);
});

// Definición de rutas del blog.
$routes->group('blog', static function ($routes) {
    $routes->get('', 'Website\Posts::index', ['as' => 'website.posts.index']);
    $routes->get('(:segment)', 'Website\Posts::show/$1', ['as' => 'website.posts.show']);
});

// Ruta de suscripción al newsletter.
$routes->group('newsletter', static function ($routes) {
    $routes->post('nuevo', 'Website\Newsletter::create', ['as' => 'website.newsletter.create']);
    $routes->get('cancelar/(:num)/(:hash)', 'Website\Newsletter::delete/$1/$2', ['as' => 'website.newsletter.delete']);
    $routes->post('cancelar/(:num)/(:hash)', 'Website\Newsletter::delete/$1/$2', ['as' => 'website.newsletter.delete']);
});

// Ruta de soluciones de SSB.
$routes->group('soluciones', static function ($routes) {
    $routes->get('(:segment)', 'Website\Solutions::show/$1', ['as' => 'website.solutions.show']);
});

// Ruta de servicios de SSB.
$routes->get('servicios', 'Website\Services::index', ['as' => 'website.services.index']);

// Ruta de acerca de nosotros.
$routes->get('fabricantes-distribuidores-tornillos-industriales', 'Website\About::index', ['as' => 'website.about.index']);

// Definición de rutas del backend.
$routes->group('backend', static function ($routes) {
    // Rutas de inicio de sesión.
    $routes->group('login', ['filter' => 'auth:true'], static function ($routes) {
        $routes->get('', 'Backend\Auth::login', ['as' => 'backend.login']);
        $routes->post('', 'Backend\Auth::login', ['as' => 'backend.login']);

        // Rutas de recuperación de contraseñas.
        $routes->group('recuperacion', static function ($routes) {
            $routes->get('', 'Backend\Auth::recoverPassword', ['as' => 'backend.recoverPassword']);
            $routes->post('', 'Backend\Auth::recoverPassword', ['as' => 'backend.recoverPassword']);
            $routes->get('completar/(:num)/(:hash)', 'Backend\Auth::resetPassword/$1/$2', ['as' => 'backend.resetPassword']);
            $routes->post('completar/(:num)/(:hash)', 'Backend\Auth::resetPassword/$1/$2', ['as' => 'backend.resetPassword']);
        });
    });

    // Definición de rutas del dashboard.
    $routes->group('', ['filter' => 'auth'], static function ($routes) {
        // Ruta de cierre de sesión.
        $routes->get('logout', 'Backend\Auth::logout', ['as' => 'backend.logout']);

        // Rutas de la cuenta del usuario de sesión.
        $routes->group('cuenta', static function ($routes) {
            $routes->get('', 'Backend\Account::show', ['as' => 'backend.account.show']);
            $routes->get('modificar', 'Backend\Account::update', ['as' => 'backend.account.update']);
            $routes->post('modificar', 'Backend\Account::update', ['as' => 'backend.account.update']);
        });

        // Rutas de administración de usuarios.
        $routes->group('usuarios', static function ($routes) {
            $routes->get('nuevo', 'Backend\Users::create', ['as' => 'backend.users.create']);
            $routes->post('nuevo', 'Backend\Users::create', ['as' => 'backend.users.create']);
            $routes->get('', 'Backend\Users::index', ['as' => 'backend.users.index']);
            $routes->post('cuenta/(:num)', 'Backend\Users::toggleActive/$1', ['as' => 'backend.users.toggleActive']);
            $routes->get('(:num)', 'Backend\Users::show/$1', ['as' => 'backend.users.show']);
            $routes->get('modificar/(:num)', 'Backend\Users::update/$1', ['as' => 'backend.users.update']);
            $routes->post('modificar/(:num)', 'Backend\Users::update/$1', ['as' => 'backend.users.update']);
        });

        // Rutas de administración de prospectos.
        $routes->group('prospectos', static function ($routes) {
            $routes->get('', 'Backend\Prospects::index', ['as' => 'backend.prospects.index']);
            $routes->get('(:num)', 'Backend\Prospects::show/$1', ['as' => 'backend.prospects.show']);
            $routes->post('eliminar/(:num)', 'Backend\Prospects::delete/$1', ['as' => 'backend.prospects.delete']);
            $routes->get('modificar/(:num)', 'Backend\Prospects::update/$1', ['as' => 'backend.prospects.update']);
            $routes->post('modificar/(:num)', 'Backend\Prospects::update/$1', ['as' => 'backend.prospects.update']);
            $routes->get('descargar', 'Backend\Prospects::download', ['as' => 'backend.prospects.download']);
        });

        $routes->addRedirect('', 'backend.prospects.index');

        // Rutas de configuración del backend.
        $routes->group('configuraciones', static function ($routes) {
            $routes->get('modificar', 'Backend\Settings::update', ['as' => 'backend.settings.update']);
            $routes->post('modificar', 'Backend\Settings::update', ['as' => 'backend.settings.update']);
            $routes->get('', 'Backend\Settings::index', ['as' => 'backend.settings.index']);
        });

        // Definición de rutas de los módulos del backend.
        $routes->group('modulos', static function ($routes) {
            // Rutas del módulo del blog.
            $routes->group('blog', static function ($routes) {
                $routes->get('nuevo', 'Backend\Modules\Posts::create', ['as' => 'backend.modules.posts.create']);
                $routes->post('nuevo', 'Backend\Modules\Posts::create', ['as' => 'backend.modules.posts.create']);
                $routes->get('', 'Backend\Modules\Posts::index', ['as' => 'backend.modules.posts.index']);
                $routes->get('(:num)', 'Backend\Modules\Posts::show/$1', ['as' => 'backend.modules.posts.show']);
                $routes->post('eliminar/(:num)', 'Backend\Modules\Posts::delete/$1', ['as' => 'backend.modules.posts.delete']);
                $routes->post('attachments', 'Backend\Modules\Posts::createAttachment', ['as' => 'backend.modules.posts.createAttachment']);
                $routes->delete('attachments/(:segment)', 'Backend\Modules\Posts::deleteAttachment/$1', ['as' => 'backend.modules.posts.deleteAttachment']);
                $routes->get('modificar/(:num)', 'Backend\Modules\Posts::update/$1', ['as' => 'backend.modules.posts.update']);
                $routes->post('modificar/(:num)', 'Backend\Modules\Posts::update/$1', ['as' => 'backend.modules.posts.update']);
            });

            // Rutas del módulo del newsletter.
            $routes->group('newsletter', static function ($routes) {
                $routes->get('', 'Backend\Modules\Newsletter::index', ['as' => 'backend.modules.newsletter.index']);
                $routes->post('eliminar/(:num)', 'Backend\Modules\Newsletter::delete/$1', ['as' => 'backend.modules.newsletter.delete']);
                $routes->get('nuevo', 'Backend\Modules\Newsletter::create', ['as' => 'backend.modules.newsletter.create']);
                $routes->post('nuevo', 'Backend\Modules\Newsletter::create', ['as' => 'backend.modules.newsletter.create']);
                $routes->get('modificar/(:num)', 'Backend\Modules\Newsletter::update/$1', ['as' => 'backend.modules.newsletter.update']);
                $routes->post('modificar/(:num)', 'Backend\Modules\Newsletter::update/$1', ['as' => 'backend.modules.newsletter.update']);
            });
        });
    });
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
