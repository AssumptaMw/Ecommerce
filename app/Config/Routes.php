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
$routes->get('/', 'Home::index',['filter'=>'authGuard']);

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

$routes->get('/', 'Home::index', ['as'=>'home']);
$routes->get('/login', 'SigninController::index', ['as'=>'login']);
$routes->get('/logout', 'SigninController::logout', ['as'=>'logout']);
$routes->post('/login', 'SigninController::loginAuth',['as'=>'login']);
$routes->get('/register', 'SignupController::index', ['as'=>'register']);
$routes->post('/register', 'SignupController::store',['as'=>'register']);

//  $routes->get('(:any)', 'Pages::view/$1'); //  This is a bad idea.

//USER ROTES
$routes->get('/add_user', 'UserController::create');
//$routes->get('/edit_user', 'UserController::update');
$routes->get('/users', 'UserController::index');
$routes->post('submit-form', 'UserController::store');
//$routes->get('edit-view/(:num)', 'UserController::singleUser/$1');
$routes->post('update', 'UserController::update');
$routes->get('delete/(:num)', 'UserController::delete/$1');

//CATEGORIES ROUTES
$routes->get('/add_cat', 'CategoryController::create');
$routes->get('/category', 'CategoryController::index');
$routes->post('submit-form', 'CategoryController::store');
$routes->post('update', 'CategoryController::update');

//SUBCATEGORIES ROUTES
$routes->get('/add_subcat', 'SubCategoryController::create');
$routes->get('/subcategory', 'SubCategoryController::index');
$routes->post('submit-form', 'SubCategoryController::store');

//PRODUCTS ROUTES
$routes->get('/add_prod', 'ProductController::create');
$routes->get('/products', 'ProductController::index');
$routes->post('submit-form', 'ProductController::store');


//API ROUTES
$routes->group('/api', ['namespace' => 'App\Controllers\API'], function($routes) {
    $routes->post('login', 'AuthController::login');
    $routes->post('register', 'AuthController::register');
    $routes->get('users', 'UserController::index');
    $routes->get('users/(:num)', 'UserController::show/$1');
});