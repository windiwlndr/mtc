<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/admin', 'AdminController::index');
$routes->post('/updateUser', 'AdminController::update');
$routes->post('/createUser', 'AdminController::create');
$routes->post('/deleteUser', 'AdminController::delete');

