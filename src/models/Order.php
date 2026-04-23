

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


    public static function create($customerId, $status) {
 
        DB::query(
            "INSERT INTO Orders () VALUES (defult,:cid,:status, null, date(now()), :comment )",
            [
                'cid' => $customerId,
                'status' => $status,
                'comment' => $comment
            ]
        );
    }

    // orderId, Customers_Id, status, delivery_date, order_date, comments *fields
}

?>