<?php
namespace App\Models;

use App\Database\DB;
use App\Models\Customer;

class Order {

    public $order_id;
    public $status;
    public $delivery_date;
    public $order_date;
    public $comments;

    public function __construct($row) {
        $this->order_id = $row['order_id'];
        $this->status = $row['status'];
        $this->delivery_date = $row['delivery_date'];
        $this->order_date = $row['order_date'];
        $this->comments = $row['comments'];
    }

    public static function getAll(){
        $rows = DB::query("SELECT * FROM Orders");

        $orders = [];

        foreach($rows as $row){
            $orders[] = new Order($row);
        }

        return $orders;
    }


        public static function getOrdersWithStatus($status) {
            $rows = DB::query(
                "SELECT * FROM Orders WHERE status = :status",
                ['status' => $status]
            );

            $orders = [];
            foreach($rows as $row){
                $orders[] = new Order($row);
            }

            return $orders;
        }

        public static function create($customerId, $status, $comment) {
            DB::query(
                "INSERT INTO Orders 
                (Customers_Id, status, delivery_date, order_date, comments) 
                VALUES (:cid, :status, :delivery, NOW(), :comment)",
                [
                    'cid' => $customerId,
                    'status' => $status,
                    'delivery' => null,
                    'comment' => $comment
                ]
            );
    }


}

?>