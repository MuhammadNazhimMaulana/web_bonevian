<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Routes Admin
$routes->group('Admin', function ($routes) {

	// Umum
	$routes->add('/', 'Admin\Admin_C::home');
	$routes->add('profile', 'Admin\Admin_C::profile');
	$routes->add('profile/update/(:any)', 'Admin\Admin_C::update_profile/$1');

	// Route Brang
	$routes->add('projects', 'Admin\Posts_C::read');
	$routes->add('projects/create', 'Admin\Posts_C::create');
	$routes->add('projects/view/(:any)', 'Admin\Posts_C::view/$1');
	$routes->add('projects/update/(:any)', 'Admin\Posts_C::update/$1');
	$routes->add('projects/delete/(:any)', 'Admin\Posts_C::delete/$1');
    
    // Login
    $routes->add('login', 'Auth\Authorisasi::login');
    
    // Register
    $routes->add('register', 'Auth\Authorisasi::register');
    
    // Logout
    $routes->add('logout', 'Auth\Authorisasi::logout');
});

// Routes Umum
$routes->group('Umum', function ($routes) {

	// Umum
	$routes->add('/', 'User\General_U::home');
	$routes->add('contact', 'User\General_U::contact');

	// Route Brang
	$routes->add('projects', 'User\Posts_U::read');
	$routes->add('projects/view/(:any)', 'User\Posts_U::view/$1');
    
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
