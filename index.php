

<?php


$title = "Veikals";

echo("<h1>");
echo($title);
echo("</h1>");



$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($requestUri == "/customers"){

require __DIR__ . '/db/connect.php';

foreach($customers as $customer){
    echo("<br>");
    echo("<strong>");
    echo("Customer:");
    
   foreach($customer as $key => $value){
        echo("<br>");
        echo("$key : $value ");
   }
    echo("</strong>");
       echo("<br>");
}

}

?>