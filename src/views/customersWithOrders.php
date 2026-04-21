


<?php

$clients = [];

foreach($data as $row){
    $clientId = $row['Id'];

    if(!isset($clients[$clientId])){
        $clients[$clientId] = [
        "Id" => $row["Id"],
        "name" => $row["firstname"],
        "surname" => $row["surname"],
        "birthdate" => $row["birthdate"],
        "email" => $row["email"],
        "points" => $row["points"],
        "orders" => []
        ];

    }

    if($row["Customers_Id"]){
        $clients[$clientId]["orders"][] = [
            "order_id" => $row["orderId"],
            "status" => $row["status"],
            "delivery_date" => $row["delivery_date"],
            "order_date" => $row["order_date"],
            "comments" => $row["comments"]

        ];

    }
}

foreach($clients as $client){

    echo "<h2>" . $client['name'] . "</h2>";
    echo "Orders:<br>";

    if (empty($client['orders'])) {
        echo "This client doesnt have order<br>";
    } else {
        foreach($client['orders'] as $order){
            echo $order['order_id'] . "<br>";
        }
    }

}


// Id firstname surname birthdate email points Customers_Id status delivery_date order_date comments


// foreach($data as $row){
//     echo("<br>");
//     foreach($row as $key => $value){
//         echo($key);
//     }
// }


?>