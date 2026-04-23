

<?php


require_once __DIR__ . '/../../db/DB.php';


class Order {

    public static function getALL(){
       return DB::query("SELECT * FROM Orders");
    }


    public static function getOrdersWithStatus($status) {
        return DB::query(
            "SELECT * FROM Orders WHERE status = :status",
            ['status' => $status]
        );
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

    // orderId, Customers_Id, status, delivery_date, order_date, comments *fields
}

?>