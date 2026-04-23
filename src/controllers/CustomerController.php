<?php
namespace App\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Database\DB;

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
    require __DIR__ . '/../views/customer/customers.php';

    }

    public static function CustomersWithOrders(){

    $clients = Customer::getAllWithOrders();
    require __DIR__ . '/../views/customer/customersWithOrders.php';

    }

}

?>