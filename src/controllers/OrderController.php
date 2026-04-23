<?php

require_once __DIR__ . '/../models/Order.php';

class OrderController{


    public static function index(){



        $withOrders = $_GET['status'] ?? null;

        DB::connect();


        if($withOrders == null){
            self::Orders();
        }
        if(isset($withOrders)){
            self::OrdersWithStatus($withOrders);
        }

    }

        public static function create() {
        $customers = Customer::getAll();
        require __DIR__ . '/../views/order/orderCreate.php';
    }

    public static function store() {

        $customerId = $_POST['customer_id'];
        $status = $_POST['status'];
        $comment = $_POST['comments'];

        Order::create($customerId, $status);

        header("Location: /orders");
        exit;
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