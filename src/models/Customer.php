

<?php

require_once __DIR__ . '/../../db/DB.php';
require_once __DIR__ . '/Order.php';

class Customer {

    public $Id;
    public $firstname;
    public $surname;
    public $birthdate;
    public $email;
    public $points;
    public array $orders = [];

    public function __construct($row) {
        $this->Id = $row['Id'];
        $this->firstname = $row['firstname'];
        $this->surname = $row['surname'];
        $this->birthdate = $row['birthdate'];
        $this->email = $row['email'];
        $this->points = $row['points'];
    }

    public static function getAll(){
        $rows = DB::query("SELECT * FROM customers");

        $customers = [];

        foreach($rows as $row){
            $customers[] = new Customer($row);
        }

        return $customers;
    }


    public static function getAllWithOrders(){

    $data = DB::query("
        SELECT * FROM customers c
        LEFT JOIN orders o ON o.Customers_Id = c.Id
    ");

    $clients = [];

    foreach($data as $row){
        $id = $row['Id'];

        if(!isset($clients[$id])){
            $clients[$id] = new Customer($row);
        }

        if (!empty($row["order_id"])) {
            $clients[$id]->orders[] = new Order($row);
        }
    }

    return $clients;
}
}

?>