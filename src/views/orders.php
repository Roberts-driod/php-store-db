
<?php

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


?>