

<?php 


class DB {

public static $pdo;


public static function connect(){

$servername = $_ENV['DB_HOST'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];
$dbname = $_ENV['DB_NAME'];

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