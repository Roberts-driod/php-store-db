

<?php


$title = "Veikals";

echo("<h1>");
echo($title);
echo("</h1>");


        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if ($requestUri == "/customers"){
            require __DIR__ . "/src/controllers/CustomerController.php";

            CustomerController::index();
        }


?>