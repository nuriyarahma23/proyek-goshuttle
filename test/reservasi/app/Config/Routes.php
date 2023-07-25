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
$routes->get('/', 'BerandaController::index', ['filter' => 'auth']);
$routes->get('/BerandaController/index', 'BerandaController::index', ['filter' => 'auth']);

// Routing Login
$routes->post('proses_login', 'AuthController::proses_login');
$routes->get('login', 'AuthController::index');
$routes->get('tampil_dashboard', 'BerandaController::index', ['filter' => 'auth']);

// Routing Logout
$routes->get('logout', 'AuthController::logout');



// Routes Data Mobil
$routes->get('tampildata-mobil', 'MobilController::index');
$routes->get('tambahdata-mobil/modal', 'MobilController::tambah');
$routes->post('prosestambah-mobil', 'MobilController::proses_tambah');
$routes->get('editdata-mobil/(:num)', 'MobilController::edit/$1');
$routes->add('prosesedit-mobil', 'MobilController::proses_edit');
$routes->get('hapusdata-mobil/(:num)', 'MobilController::hapus/$1');

// Routes Data Discount
$routes->get('tampildata-diskon', 'DiskonController::index');
$routes->get('tambahdata-diskon', 'DiskonController::tambah');
$routes->post('prosestambah-diskon', 'DiskonController::proses_tambah');
$routes->get('editdata-diskon/(:num)', 'DiskonController::edit/$1');
$routes->post('prosesedit-diskon', 'DiskonController::proses_edit');
$routes->get('hapusdata-diskon/(:num)', 'DiskonController::hapus/$1');

// Routes Data Pelanggan
$routes->get('tampildata-pelanggan', 'PelangganController::index');
$routes->get('tambahdata-pelanggan', 'PelangganController::tambah');
$routes->post('prosestambah-pelanggan', 'PelangganController::proses_tambah');
$routes->get('editdata-pelanggan/(:num)', 'PelangganController::edit/$1');
$routes->post('prosesedit-pelanggan', 'PelangganController::proses_edit');
$routes->get('hapusdata-pelanggan/(:num)', 'PelangganController::hapus/$1');
$routes->get('pelanggan/getAllPelanggan', 'PelangganController::getAllPelanggan');
// Routes Reservation
$routes->get('reservation', 'ReservationController::index', ['as' => 'reservasi']);
$routes->get('reservation/getKursireservasi/(:any)', 'ReservationController::kursiReservasi/$1', ['as' => 'kursireservasi']);
// $routes->get('reservation/getReservasi/', 'ReservationController::getReservasi');
$routes->get('reservation/getReservasi/(:any)', 'ReservationController::getReservasi/$1');
$routes->post('reservation/listReservasi', 'ReservationController::getListReservasi', ['as' => 'listReservasi']);
$routes->post('/reservations/update/(:num)', 'ReservationSopirdanMobilController::update/$1'); // Edit Reservasi
$routes->post('reservation/simpan', 'ReservationController::simpan', ['as' => 'simpanReservasi']);

// Routes Paket
$routes->get('paket/(:num)', 'PaketController::index/$1', ['as' => 'paket']);
$routes->get('paket/create', 'PaketController::create');
$routes->post('paket/store', 'PaketController::store');
$routes->get('paket/edit/(:num)', 'PaketController::edit/$1');
$routes->post('paket/update/(:num)', 'PaketController::update/$1');
$routes->get('paket/delete/(:num)', 'PaketController::delete/$1');

// Routes Kursi Penumpang
$routes->get('kursipenumpang/getList/(:any)', 'KursipenumpangController::getDatabyId/$1');
$routes->get('kursipenumpang/reschedule/(:any)', [KursipenumpangController::class, 'rescheduleReservasi']);
$routes->post('kursipenumpang/reschedule/simpan', 'KursipenumpangController::simpanrescheduleReservasi');
$routes->post('kursipenumpang/jadwaltersedia/(:any)', 'KursipenumpangController::kursiTersedia/$1');
$routes->post('kursi_penumpang/diskonreservasi/(:num)', 'KursipenumpangController::diskonreservasi/$1');
$routes->post('reservasi/batalkan/(:num)', 'KursipenumpangController::batalkanReservasi/$1', ['as' => 'batalkan']);


// Routes Jadwal
// $routes->get('jadwal', 'JadwalController::index');
// $routes->post('tambah', 'JadwalController::tambah');
// $routes->get('kelola-jadwal', 'JadwalController::kelola_jadwal');
// route crud jadwal
$routes->get('jadwal', 'JadwalController::index');
$routes->get('create-jadwal', 'JadwalController::create');
$routes->post('store-jadwal', 'JadwalController::store');
$routes->get('edit-jadwal/(:num)', 'JadwalController::edit/$1');
$routes->post('update-jadwal', 'JadwalController::update');
$routes->get('hapus-jadwal/(:num)', 'JadwalController::hapus/$1');

// Multi Jadwal
$routes->get('jadwalmultiroute', 'JadwalController::buatjadwal');
$routes->post('jadwalmultiroute/tambah', 'JadwalController::tambah_multiroute');
$routes->get('kelola-jadwal', 'JadwalController::kelola_jadwal');
$routes->post('cari-jadwal', 'JadwalController::cari');
$routes->post('update_multijadwal/(:num)', 'JadwalController::update_jadwal/$1');



// Routes Pembayaran
$routes->get('pembayaran/konfirmasi/(:any)', 'PembayaranController::konfirmasiPembayaran/$1');
$routes->post('pembayaran/melakukanpembayaran/(:any)', 'PembayaranController::melakukanpembayaran/$1');
$routes->post('pembayaran/batalkan/', 'PembayaranController::batalkanPembayaran');


// Route Check in
$routes->get('/checkinreservasi/(:num)', 'ReservationController::checkinreservasi/$1', ['as' => 'checkinreservasi']);


// Route PDF
$routes->get('pdfslipreservasi/(:num)', 'PDFSlipPembayaranController::pdfreservasi/$1');
$routes->get('pdfslippaket/(:num)', 'PDFSlipPembayaranController::pdfreservasipaket/$1');
$routes->get('pdfmanifest/(:num)', 'PDFSlipPembayaranController::pdfmanifest/$1');

// Routes buku besar
$routes->get('bukubesar', 'BukuBesarController::index');
$routes->post('prosestambah-bukubesar', 'BukuBesarController::proses_tambah');
$routes->add('prosesedit-bukubesar', 'BukuBesarController::proses_edit');
$routes->get('hapusdata-bukubesar/(:num)', 'BukuBesarController::hapus/$1');

// Routes buku besar
$routes->get('settlement', 'SettlementController::index');


// Routes Settlement Tiket
$routes->get('settlementtiket', 'SettlementTiketController::index');
$routes->post('settlementtiket', 'SettlementTiketController::save');
// Routes Settlement Paket
$routes->get('settlementpaket', 'SettlementPaketController::index');
$routes->post('settlementpaket', 'SettlementPaketController::save');






// Route Akun
$routes->get('my-account', 'MyAccountController::index');
$routes->post('my-account/update-profil/(:num)', 'MyAccountController::update_profil/$1');
$routes->post('my-account/update-password/(:num)', 'MyAccountController::update_password/$1');


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
