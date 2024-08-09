<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->post('/login', 'Login::index');

$routes->get('/admin', 'Admin\Dashboard::index');
$routes->get('/admin/proposal-diajukan', 'Admin\ProposalDiajukan::index');
$routes->get('/admin/proposal-diajukan/detail', 'Admin\ProposalDiajukan::detail');

$routes->get('/admin/proposal-review', 'Admin\ProposalReview::index');
$routes->get('/admin/proposal-review/detail', 'Admin\ProposalReview::detail');

$routes->get('/admin/proposal-lolos', 'Admin\ProposalLolos::index');
$routes->get('/admin/proposal-lolos/detail', 'Admin\ProposalLolos::detail');

$routes->get('/setting', 'Setting::index');
$routes->get('/setting/detail', 'Setting::detail');

$routes->get('/mahasiswa/dashboard', 'Mahasiswa::dashboard');
$routes->get('/mahasiswa/proposal-diajukan', 'Mahasiswa::proposal_diajukan');
$routes->get('/mahasiswa/detail-proposal', 'Mahasiswa::detail_proposal');
$routes->get('/mahasiswa/formulir-unggah', 'Mahasiswa::formulir_unggah');

// Reviewer
$routes->get('/reviewer', 'Reviewer\Dashboard::index');
$routes->get('/reviewer/proposal-diajukan', 'Reviewer\ProposalDiajukan::index');
$routes->get('/reviewer/proposal-diajukan-detail', 'Reviewer\ProposalDiajukan::detail');
$routes->get('/reviewer/proposal-telah-direview', 'Reviewer\ProposalTelahDireview::index');
$routes->get('/reviewer/proposal-telah-direview-detail', 'Reviewer\ProposalTelahDireview::detail');

//Pembimbing
$routes->get('/pembimbing/dashboard', 'Pembimbing\Dashboard::index');
$routes->get('/pembimbing/proposal-verifikasi', 'Pembimbing\Proposal::proposal_verifikasi');
$routes->get('/pembimbing/proposal-verifikasi-detail', 'Pembimbing\Proposal::proposal_verifikasi_detail');
$routes->get('/pembimbing/proposal-telahdireview', 'Pembimbing\Proposal::proposal_telah_direview');
$routes->get('/pembimbing/proposal-proses', 'Pembimbing\Proposal::proposal_proses');
$routes->get('/pembimbing/proposal-proses-detail', 'Pembimbing\Proposal::proposal_proses_detail');
