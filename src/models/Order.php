

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

}

?>