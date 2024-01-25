<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//proveedores
$routes->get('/proveedor', 'proveedorController::index');

//mejores vendedores
$routes->get('/mejoresVendedores', 'proveedorController::mejoresVendedores');