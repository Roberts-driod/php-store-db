
<?php

require_once __DIR__ . '/../models/Customer.php';

class CustomerController{

    public static function index() {



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
    
    $customers = Customer::getALL();
    require __DIR__ . '/../views/customers.php';

    }

    public static function CustomersWithOrders(){


    $data = Customer::getAllWithOrders();
    require __DIR__ . '/../views/customersWithOrders.php';


    }

}

?>