<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Pages');
$routes->setDefaultMethod('index');
$routes->setAutoRoute(false);

$routes->get('/', 'Pages::index');
$routes->get('about', 'Pages::about');
$routes->get('customers', 'Customers::index');
$routes->get('users', 'Users::index');