
<?php

class CustomerController{

    public static function index() {

        require_once __DIR__ . '/../../db/DB.php';

        $withOrders = $_GET['with-orders'] ?? null;

        DB::connect();


        if($withOrders == null){
            self::Customers();
        }
        if($withOrders == "full"){
            self::CustomersWithOrders();
        }

    }

    public static function Customers(){

    $customers = DB::query("SELECT * FROM customers");
    require __DIR__ . '/../views/customers.php';

    }

    public static function CustomersWithOrders(){


    $data = DB::query
    ("SELECT * FROM CUSTOMERS C 
        LEFT JOIN Orders o ON 
        o.Customers_Id = c.Id
    ");

    require __DIR__ . '/../views/customersWithOrders.php';


    }

}

?>