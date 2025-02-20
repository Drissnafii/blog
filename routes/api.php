<?php


include __DIR__ . '/../app/core/routes.php';

$routes = new Routes();
$routes->get('/login', [userControllers::class, 'login']);
$routes->get('/', [ArticlsControllers::class, 'index']);
$routes->post('/register', [userControllers::class, 'register']);
// $routes->post('/articls', [ArticlsControllers::class, 'getAll']);
return $routes;
