<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/mahasiswa', 'Mahasiswa::dashboard');
$routes->get('/admin', 'Admin::dashboard');
$routes->post('/login', 'Login::index');

$routes->get('/proposal-diajukan', 'ProposalDiajukan::index');
$routes->get('/proposal-diajukan/detail', 'ProposalDiajukan::detail');

$routes->get('/proposal-review', 'ProposalReview::index');
$routes->get('/proposal-review/detail', 'ProposalReview::detail');

$routes->get('/proposal-lolos', 'ProposalLolos::index');
$routes->get('/proposal-lolos/detail', 'ProposalLolos::detail');

$routes->get('/setting', 'Setting::index');
$routes->get('/setting/detail', 'Setting::detail');
