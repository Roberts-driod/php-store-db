

<?php 

// Šai klasei ir statisks atribūts $pdo un statiska metode 'connect', kura veic datubāzes konekciju un saglabā to statiskajā mainīgajā $pdo. 
// Izveidojiet arī statisku metodi 'query' ar $sqlQuery kā parametru.

class DB {

public static $pdo;


public static function connect(){
$servername = "172.29.144.1";
$username = "store_app";
$password = "password";
$dbname = "store_dev";

try {

  self::$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} 

catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

}


public static function query($sqlQuery) {

  $stmt = self::$pdo->query($sqlQuery);  
  return $stmt->fetchAll(PDO::FETCH_ASSOC);

}


}

?>