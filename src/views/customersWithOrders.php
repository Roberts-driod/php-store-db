


<?php


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