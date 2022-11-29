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
    $routes->post('gracias', 'Website\Prospects::create', ['as' => 'website.prospects.create']);
});

// Definición de rutas del blog.
$routes->group('contacto', static function ($routes) {
    $routes->get('', 'Website\Posts::index', ['as' => 'website.posts.index']);
});

// Definición de rutas del backend.
$routes->group('backend', static function ($routes) {
    // Rutas de inicio de sesión.
    $routes->group('login', static function ($routes) {
        $routes->get('', 'Backend\Auth::login', ['as' => 'backend.login']);
        $routes->post('', 'Backend\Auth::login', ['as' => 'backend.login']);
        $routes->get('recuperacion', 'Backend\Auth::recoverPassword', ['as' => 'backend.recoverPassword']);
        $routes->post('recuperacion', 'Backend\Auth::recoverPassword', ['as' => 'backend.recoverPassword']);
    });

    // Definición de rutas del dashboard.
    $routes->group('', static function ($routes) {
        // Rutas de administración de usuarios.
        $routes->group('usuarios', static function ($routes) {
            $routes->get('nuevo', 'Backend\Users::new', ['as' => 'backend.users.new']);
            $routes->post('nuevo', 'Backend\Users::new', ['as' => 'backend.users.new']);
            $routes->get('', 'Backend\Users::index', ['as' => 'backend.users.index']);
            $routes->post('cuenta/(:num)', 'Backend\Users::toggleActive/$1', ['as' => 'backend.users.toggleActive']);
            $routes->get('(:num)', 'Backend\Users::show/$1', ['as' => 'backend.users.show']);
        });

        // Definición de rutas de los módulos del backend.
        $routes->group('modulos', static function ($routes) {
            // Rutas del modulo de blog.
            $routes->group('blog', static function ($routes) {
                $routes->get('nuevo', 'Backend\Modules\Posts::new', ['as' => 'backend.modules.posts.new']);
                $routes->post('nuevo', 'Backend\Modules\Posts::new', ['as' => 'backend.modules.posts.new']);
                $routes->get('', 'Backend\Modules\Posts::index', ['as' => 'backend.modules.posts.index']);
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
