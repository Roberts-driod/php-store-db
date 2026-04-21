<?php



class OrderController{


    public static function index(){
        require_once __DIR__ . '/../../db/DB.php';

        DB::connect();

        $orders = DB::query("SELECT * FROM Orders");

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

}


?>