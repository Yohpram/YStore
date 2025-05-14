<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Welcome::index');
$routes->get('auth/login', 'Auth::login');
$routes->get('auth/logout', 'Auth::logout');
$routes->get('dashboard', 'Dashboard::index');
$routes->get('auth/loginView', 'Auth::loginView');
$routes->get('auth/register', 'Auth::register');
$routes->post('auth/loginPost', 'Auth::loginPost');
$routes->post('auth/registerPost', 'Auth::registerPost');
$routes->post('auth/registerProcess', 'Auth::registerProcess');
$routes->get('auth/googleLogin', 'Auth::googleLogin');
$routes->get('auth/callback', 'Auth::googleCallback');
$routes->post('auth/loginProcess', 'Auth::loginProcess');
// Produk
$routes->get('/produk', 'Produk::index');
// Akun
$routes->get('/akun', 'Akun::index');