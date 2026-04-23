<?php
namespace App\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Database\DB;

class OrderController{


    public static function index(){

        $status = $_GET['status'] ?? null;

        $orders = $status 
                ? Order::getOrdersWithStatus($status) 
                : Order::getAll();

        require __DIR__ . '/../views/order/orders.php';

    }

        public static function create() {
        $customers = Customer::getAll();
        require __DIR__ . '/../views/order/orderCreate.php';
    }

    public static function store() {

        $customerId = $_POST['customer_id'];
        $status = $_POST['status'];
        $comment = $_POST['comments'];

        Order::create($customerId, $status, $comment);

        redirect('/orders');
    }

        public static function Orders(){
            $orders = Order::getALL();
            require __DIR__ . '/../views/order/orders.php';
        }

        public static function OrdersWithStatus($status){
            $ordersWithStatus = Order::getOrdersWithStatus($status);
            require __DIR__ . '/../views/order/orders.php';
        }

}


?>