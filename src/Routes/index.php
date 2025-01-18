<?php


use App\Router;
use App\Controllers\HomeController;
use App\Controllers\SellerController;
use App\Controllers\StudentController;

$router = new Router();

$router->get('/', HomeController::class, 'index');

$router->get('/sellers', SellerController::class, 'index');
$router->get('/sellers/create', SellerController::class, 'create');
$router->post('/sellers/create', SellerController::class, 'create');

$router->get('/students', StudentController::class, 'index');

$router->dispatch();

?>