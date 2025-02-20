<?php


include __DIR__ . '/../app/core/routes.php';

$routes = new Routes();
$routes->get('/login', [userControllers::class, 'login']);
$routes->get('/', [ArticlsControllers::class, 'index']);
$routes->post('/register', [userControllers::class, 'register']);
$routes->get('/addCategory', [categoryControllers::class, 'addCategory']);
$routes->post('/addArticls', [ArticlsControllers::class, 'addArticls']);
$routes->post('/updateArticle', [ArticlsControllers::class, 'updateArticle']);
$routes->get('/updateArticle', [ArticlsControllers::class, 'formulaireArticle']);
// $routes->post('/articls', [ArticlsControllers::class, 'getAll']);
return $routes;
