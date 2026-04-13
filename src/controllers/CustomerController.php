
<?php

class CustomerController{

    public static function index() {

        require_once __DIR__ . '/../../db/DB.php';


        DB::connect();

        $customers = DB::query("SELECT * FROM customers");

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



}

?>