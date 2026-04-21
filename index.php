

<nav>
    <a href="/">Home</a>
    <a href="/customers">Clients</a>
    <a href="/orders">Orders</a>
    <a href="/clients-orders">Clients with orders</a>
</nav>

<link rel="stylesheet" href="/css/style.css">

<?php

$title = "Store";

echo("<h1>");
echo($title);
echo("</h1>");


        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if ($requestUri == "/customers"){
            require __DIR__ . "/src/controllers/CustomerController.php";

            CustomerController::index();
        }

        if ($requestUri == "/orders"){
            require __DIR__ . "/src/controllers/OrderController.php";

            OrderController::index();
        }


?>