<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->get('/beranda', 'Home::index');
$routes->get('/profil', 'Profil::index');

$routes->get('/guru', 'Guru::index');
$routes->get('/guru/tambah', 'Guru::tambah');
$routes->post('/guru/add', 'Guru::add');
