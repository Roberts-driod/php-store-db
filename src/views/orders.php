
<?php

if(isset($orders)){

        foreach($orders as $order){
            echo("<br>");
            echo("<strong>");
            echo("Order:");


        foreach($order as $key => $value){
                echo("<br>");
                echo("$key : $value ");
        }

            echo("</strong>");
            echo("<br>");
        }
}

if(isset($ordersWithStatus)){
    $orders = $ordersWithStatus;
            foreach($orders as $order){
            echo("<br>");
            echo("<strong>");
            echo("Order:");


        foreach($order as $key => $value){
                echo("<br>");
                echo("$key : $value ");
        }

            echo("</strong>");
            echo("<br>");
        }
}


?>