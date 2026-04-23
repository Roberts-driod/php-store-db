<?php
require __DIR__ . '/vendor/autoload.php';

use App\Core\Router;
use App\Controllers\CustomerController;
use App\Controllers\OrderController;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


$router = new Router();


$router->add('/', function() {
    CustomerController::index();
    OrderController::index();
});

$router->add('/customers', [CustomerController::class, 'index']);
$router->add('/orders', [OrderController::class, 'index']);
$router->add('/orders/create', [OrderController::class, 'create']);
$router->add('/orders/store', [OrderController::class, 'store']);


require __DIR__ . '/src/views/layout/header.php';


$router->dispatch($_SERVER['REQUEST_URI']);


require __DIR__ . '/src/views/layout/footer.php';