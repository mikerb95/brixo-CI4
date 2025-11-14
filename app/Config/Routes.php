<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Definimos paginas publicas principales
$routes->get('/', 'Home::index', ['as' => 'home']);
$routes->get('contrata', 'Home::hire', ['as' => 'hire']);
$routes->get('profesionales', 'Home::professionals', ['as' => 'professionals']);
// Flujo demo de pagos protegido para pruebas
$routes->match(['get', 'post'], 'pago/demo', 'Payments::demo', ['as' => 'payment-demo']);
// Autenticacion basica de usuarios demo
$routes->match(['get', 'post'], 'login', 'Auth::login', ['as' => 'login']);
$routes->get('logout', 'Auth::logout', ['as' => 'logout']);
