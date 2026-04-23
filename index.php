

<nav>
    <a href="/">Home</a>
    <a href="/customers">Clients</a>
    <a href="/orders">Orders</a>
    <a href="/customers?with-orders=full">Clients with orders</a>
</nav>

<link rel="stylesheet" href="/css/style.css">

<?php

$title = "Store";

echo("<h1>");
echo($title);
echo("</h1>");


require __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if ($requestUri == "/customers"){
            require __DIR__ . "/src/controllers/CustomerController.php";

            CustomerController::index();
        }

        if ($requestUri == "/orders"){
            require __DIR__ . "/src/controllers/OrderController.php";

            OrderController::index();
        }

        if($requestUri == "/"){
            require __DIR__ . "/src/controllers/CustomerController.php";
            require __DIR__ . "/src/controllers/OrderController.php";
            CustomerController::index();
            OrderController::index();
        }





?>