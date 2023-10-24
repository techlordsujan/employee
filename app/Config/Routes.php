<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
$routes->get('/', 'Home::index');
$routes->get('/resource/avatar/(:any)', 'Resource::avatar/$1');
$routes->get('/resource/document/(:any)', 'Resource::document/$1');
$routes->get('/home/dashboard', 'Home::dashboard');
$routes->post('/user/updateimage', 'User::updateimage');
$routes->post('/user/update_image', 'User::update_image');
$routes->post('/user/auth_user', 'User::auth_user');
$routes->post('/user/get_modal', 'User::get_modal');
$routes->post('/user/auth_otp', 'User::auth_otp');
$routes->get('/user/logout', 'User::logout');
$routes->get('/personalfact', 'PersonalFact::index');
$routes->post('/personalfact/update', 'PersonalFact::update');
$routes->get('/address', 'Address::index');
$routes->post('/address/update', 'Address::update');
$routes->post('/address/temp_update', 'Address::temp_update');
$routes->get('/address/getdistrict/(:any)/(:any)', 'Address::getdistrict/$1/$2');
$routes->get('/language', 'Language::index');
$routes->post('/language/update', 'Language::update');
$routes->get('/education', 'Education::index');
$routes->post('/education/update', 'Education::update');
$routes->post('/education/gettabledata', 'Education::gettabledata');
$routes->post('/education/get_modal', 'Education::get_modal');
$routes->post('/education/get_modal_delete', 'Education::get_modal_delete');
$routes->get('/family', 'Family::index');
$routes->post('/family/update', 'Family::update');
$routes->post('/family/gettabledata', 'Family::gettabledata');
$routes->post('/family/get_modal', 'Family::get_modal');
$routes->post('/family/get_modal_delete', 'Family::get_modal_delete');
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

