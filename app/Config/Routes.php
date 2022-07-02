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

// GUEST ROUTES
$routes->get('/', 'LandingPageController::index', ['as' => 'home']);
$routes->get('/about-us', 'LandingPageController::about_us', ['as' => 'about-us']);
$routes->get('/contact-us', 'LandingPageController::contact_us', ['as' => 'contact-us']);
$routes->match(['get', 'post'], '/login', 'UserController::login', ['filter' => 'noauth', 'as' => 'login']);
$routes->get('/produk', 'ProdukController::index', ['as' => 'produk']);
$routes->get('/search', 'ProdukController::search', ['as' => 'search']);
$routes->get('/search_category/(:any)', 'ProdukController::search_category/$1', ['as' => 'search_category']);


// CUSTOMER ROUTES
$routes->get('/my-profile', 'ProfileController::index', ['as' => 'profile', 'filter' => 'auth']);
$routes->post('/change-profile', 'ProfileController::change_profile', ['as' => 'change_profil', 'filter' => 'auth']);
$routes->post('/change-password', 'ProfileController::change_password', ['as' => 'change_password', 'filter' => 'auth']);
$routes->post('/change-address', 'ProfileController::change_address', ['as' => 'change_address', 'filter' => 'auth']);
$routes->post('/add-update-cart', 'ProdukController::add_update_cart', ['as' => 'add_update_cart', 'filter' => 'auth']);
$routes->get('/carts', 'CartController::index', ['as' => 'carts', 'filter' => 'auth']);
$routes->get('/delete-cart/(:any)', 'CartController::delete_cart/$1', ['as' => 'delete_cart', 'filter' => 'auth']);
$routes->post('/clear-or-update-cart', 'CartController::clear_or_update_cart', ['as' => 'clear_or_update_cart', 'filter' => 'auth']);
$routes->post('/create-transaction', 'TransactionController::create_transaction');
$routes->get('/check-transaction-status/(:any)/(:any)', 'TransactionController::check_transaction_status/$1/$2');
$routes->get('/invoices/(:any)', 'TransactionController::invoices/$1');
$routes->post('/add-feedback', 'FeedbackController::add_feedback', ['as' => 'add_feedback']);

// ALL LEVEL ROUTES
$routes->post('/register', 'UserController::register');
$routes->get('/logout', 'UserController::logout');
$routes->get('/product-detail/(:any)', 'ProdukController::product_detail/$1', ['as' => 'product_detail']);
$routes->get('service-detail/(:any)', 'ProdukController::service_detail/$1', ['as' => 'service_detail']);
// API ALL LEVEL ROUTES
$routes->get('/get-product-with-type', 'ProdukController::get_product_with_type');
$routes->get('/get-services', 'ProdukController::get_services');
$routes->get('/get-product-with-type/(:any)', 'ProdukController::get_product_with_type/$1');
$routes->get('/get-product-one-new', 'ProdukController::get_product_one_new');



// TESTING ROUTES
$routes->get('/set-session', function(){
    session()->set(
        [
            'isLoggedIn' => false
        ]
    );
});

$routes->get('/password-hash', 'UserController::hash_password');
$routes->get('/get-method', function(){
    return $this->request->getMethod();
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
