

<?php

require_once __DIR__ . '/../../db/DB.php';


class Customer {

    public static function getALL(){
       return DB::query("SELECT * FROM customers");
    }

    public static function getAllWithOrders(){
         $data = DB::query
            ("SELECT * FROM CUSTOMERS C 
                LEFT JOIN Orders o ON 
                o.Customers_Id = c.Id
            ");

            $clients = [];

            foreach($data as $row){
                $clientId = $row['Id'];

                if(!isset($clients[$clientId])){
                    $clients[$clientId] = [
                    "Id" => $row["Id"],
                    "name" => $row["firstname"],
                    "surname" => $row["surname"],
                    "birthdate" => $row["birthdate"],
                    "email" => $row["email"],
                    "points" => $row["points"],
                    "orders" => []
                    ];

                }

                if($row["Customers_Id"]){
                    $clients[$clientId]["orders"][] = [
                        "order_id" => $row["order_id"],
                        "status" => $row["status"],
                        "delivery_date" => $row["delivery_date"],
                        "order_date" => $row["order_date"],
                        "comments" => $row["comments"]

                    ];

                }
            }

                return $clients;
                }

}

?>