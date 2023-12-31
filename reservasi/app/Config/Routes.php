<?php

namespace Config;

use App\Controllers\KursipenumpangController;
use App\Controllers\Pages;

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



//  WARNING !!! 
//  PENAMAAN ROUTE as MENGGUNAKAN  CAMELCASE ATAU TULISAN TANPA SPASI
// 

$routes->get('/', 'Home::index');


$routes->get('reservation', 'ReservationController::index', ['as' => 'reservasi']);
$routes->get('reservation/getKursireservasi/(:any)', 'ReservationController::kursiReservasi/$1', ['as' => 'kursireservasi']);
$routes->get('reservation/getReservasi/(:any)', 'ReservationController::getReservasi/$1');
$routes->post('reservation/listReservasi', 'ReservationController::getListReservasi', ['as' => 'listReservasi']);
// Edit Reservasi
$routes->post('/reservations/update/(:num)', 'ReservationSopirdanMobilController::update/$1');



// Route untuk ke Paket
$routes->get('paket/(:num)', 'PaketController::index/$1', ['as' => 'paket']);
$routes->get('paket/create', 'PaketController::create');
$routes->post('paket/store', 'PaketController::store');
$routes->get('paket/edit/(:num)', 'PaketController::edit/$1');
$routes->post('paket/update/(:num)', 'PaketController::update/$1');
$routes->get('paket/delete/(:num)', 'PaketController::delete/$1');


$routes->get('kursipenumpang/getList/(:any)', 'KursipenumpangController::getDatabyId/$1');
$routes->get('kursipenumpang/reschedule/(:any)', [KursipenumpangController::class, 'rescheduleReservasi']);
$routes->post('kursipenumpang/reschedule/simpan', 'KursipenumpangController::simpanrescheduleReservasi');
$routes->get('kursipenumpang/jadwaltersedia/(:any)', 'KursipenumpangController::kursiTersedia/$1');


// routes.php
$routes->post('reservation/simpan', 'ReservationController::simpan', ['as' => 'simpanReservasi']);



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
