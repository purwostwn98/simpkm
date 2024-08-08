<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/mahasiswa', 'Mahasiswa::dashboard');
$routes->get('/admin', 'Admin::dashboard');
$routes->post('/login', 'Login::index');

$routes->get('/propsal-diajukan', 'ProposalDiajukan::index');
$routes->get('/propsal-diajukan/detail', 'ProposalDiajukan::detail');
