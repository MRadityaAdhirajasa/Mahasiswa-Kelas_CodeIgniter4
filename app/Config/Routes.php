<?php

use App\Controllers\UserController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', [UserController::class, 'index']);
$routes->get('/user/profile', [UserController::class, 'profile']);
// $routes->get('/profile/(:any)/(:any)/(:any)', 'Home::profile/$1/$2/$3');
$routes->get('/user/create', [UserController::class, 'create']);
$routes->post('/user/store', [UserController::class, 'store']);
// $routes->get('/user/index', [UserController::class, 'index']);
$routes->get('/user', [UserController::class, 'user']);
$routes->get('/user/(:any)/edit', [UserController::class, 'edit']);
$routes->put('/user/(:any)', [UserController::class, 'update']);
$routes->delete('/user/(:any)', [UserController::class, 'destroy']);

$routes->get('/kelas', [UserController::class, 'kelas']);
$routes->get('/kelas/create_kelas', [UserController::class, 'create_kelas']);
$routes->post('/kelas/store_kelas', [UserController::class, 'store_kelas']);
$routes->get('/kelas/(:any)/edit_kelas', [UserController::class, 'edit_kelas']);
$routes->put('/kelas/(:any)', [UserController::class, 'update_kelas']);
$routes->delete('/kelas/(:any)', [UserController::class, 'destroy_kelas']);

$routes->get('/user/(:any)', [UserController::class, 'show']);



