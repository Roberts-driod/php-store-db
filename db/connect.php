<?php

$servername = "172.29.144.1";
$username = "store_app";
$password = "password";
$dbname = "store_dev";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//   echo "Connected successfully";

  $stmt = $conn->query("Select * from Customers");  
  $customers = $stmt->fetchAll(PDO::FETCH_ASSOC);

//   foreach($clients as $client){

//   $clientId = $client['client_id'];

//   $stmt = $conn->query("SELECT * FROM Orders WHERE client_id = $clientId");
//   $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

//     foreach($client as  $key => $value){

//       print_r ("$key: $value \n");
//     }

//       foreach ($orders as $order) {
//         echo "Order ID: " . $order['order_id'] . "\n";
//     }

//     echo("\n");

//   }


} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>