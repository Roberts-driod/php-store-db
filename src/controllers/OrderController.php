<?php



class OrderController{


    public static function index(){
        require_once __DIR__ . '/../../db/DB.php';

        DB::connect();

        $orders = DB::query("SELECT * FROM Orders");

        require __DIR__ . '/../views/orders.php';

    }

}


?>