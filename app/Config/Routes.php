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
$routes->get('/', 'frontend\IndexController::index'); 
$routes->get('/index', 'frontend\IndexController::index');  

$routes->get('/login', 'Auth::index'); 
$routes->get('/logout', 'Auth::logout'); 
$routes->post('/login', 'Auth::verify'); 
$routes->post('/loginGoogle', 'Auth::verifyGoogle'); 
// $routes->get('/dashboard', 'backend\DashboardController::index');

$routes->group('be',['filter' => 'authfilter'], function ($routes) {
// $routes->group('be', function ($routes) {
    $routes->get('dashboard', 'backend\DashboardController::index');
    $routes->get('dashboard-content', 'backend\DashboardController::renderContent');

    $routes->get('administrator', 'backend\AdministratorController::index');
    $routes->get('administratorForm/(:any)', 'backend\AdministratorController::showForm/$1');
    $routes->delete('administrator/(:any)', 'backend\AdministratorController::delete/$1');
    $routes->post('administrator', 'backend\AdministratorController::addData');

    $routes->get('user-pengguna', 'backend\UserPenggunaController::index');

    $routes->get('bengkel', 'backend\BengkelController::index');
    $routes->get('bengkelForm/(:any)', 'backend\BengkelController::showForm/$1');
    $routes->get('bengkelFormVerification/(:any)', 'backend\BengkelController::showFormVerification/$1');
    $routes->delete('bengkel/(:any)', 'backend\BengkelController::delete/$1');
    $routes->post('bengkel', 'backend\BengkelController::addData');
    $routes->post('bengkelVerification', 'backend\BengkelController::verificationData');
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
