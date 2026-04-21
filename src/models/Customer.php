

<?php

require_once __DIR__ . '/../../db/DB.php';


class Customer {

    public static function getALL(){
       return DB::query("SELECT * FROM customers");
    }

    public static function getAllWithOrders(){
        return DB::query
            ("SELECT * FROM CUSTOMERS C 
                LEFT JOIN Orders o ON 
                o.Customers_Id = c.Id
            ");
    }
    
}

?>