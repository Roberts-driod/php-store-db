
<?php

class CustomerController{

    public static function index() {

        require_once __DIR__ . '/../../db/DB.php';


        DB::connect();

        $customers = DB::query("SELECT * FROM customers");


        require __DIR__ . '/../views/customers.php';


    }

}

?>