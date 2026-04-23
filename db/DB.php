

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


public static function query($sql, $params = []) {

    $stmt = self::$pdo->prepare($sql);
    $stmt->execute($params);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

}

?>