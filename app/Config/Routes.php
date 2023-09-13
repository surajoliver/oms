<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;
use App\Controllers\Shop;
use App\Controllers\Admin;
use App\Controllers\Products;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/shop', 'Shop::index');
$routes->get('/admin/products/create', 'Products::create');
$routes->get('/admin/products/edit/(:segment)', 'Products::edit/$1');
$routes->get('/admin/products/delete/(:segment)', 'Products::delete/$1');

$routes->get('/admin/products', 'Products::index');
$routes->get('/admin', 'Admin::index');

