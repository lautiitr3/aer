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
$routes->get('/', 'SignupController::index');
$routes->get('/signup', 'SignupController::index');
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/signin', 'SigninController::index');
$routes->get('/profile', 'ProfileController::index',['filter' => 'authGuard']);
$routes->get('/inicio', 'ProfileController::index');
$routes->get('reservavuelos', 'ReservaVuelos::index'); // Muestra el formulario de reserva
$routes->post('reservavuelos/procesarreserva', 'ReservaVuelos::procesarReserva'); // Procesa la reserva
$routes->get('destinosviaje', 'DestinosViaje::index'); // Muestra los destinos de viaje
$routes->get('destinosnacionales', 'DestinosNacionales::index');
$routes->get('destinos', 'Destinos::index');
$routes->get('aurora', 'DestinoInter::index');
$routes->get('cancun', 'DestinoInter::cancu');
$routes->get('brasil', 'DestinoInter::brasi');
$routes->get('newyork', 'DestinoInter::newy');
$routes->get('paris', 'DestinoInter::francia');
$routes->get('madrid', 'DestinoInter::espa');
$routes->get('islas', 'DestinoInter::grecia');
$routes->get('londres', 'DestinoInter::lond');
$routes->get('tokyo', 'DestinoInter::jap');
$routes->get('venecia', 'DestinoInter::ita');
$routes->get('buenosaires', 'DestinoNacio::bsas');
$routes->get('cordoba', 'DestinoNacio::cap');
$routes->get('misiones', 'DestinoNacio::misi');
$routes->get('mendoza', 'DestinoNacio::men');
$routes->get('jujuy', 'DestinoNacio::ju');
$routes->get('rionegro', 'DestinoNacio::rio');
$routes->get('larioja', 'DestinoNacio::lari');
$routes->get('tierradelfuego', 'DestinoNacio::tie');
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
