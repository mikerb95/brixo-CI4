<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' => 'home']);
$routes->get('contrata', 'Home::hire', ['as' => 'hire']);
$routes->get('profesionales', 'Home::professionals', ['as' => 'professionals']);
$routes->match(['get', 'post'], 'pago/demo', 'Payments::demo', ['as' => 'payment-demo']);
