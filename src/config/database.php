<?php



class Database {
  
  public static function getConnection(){
    try {
      $dsn = "pgsql:host=127.0.0.1;port=5432;dbname=inner;";
      // make a database connection
      $pdo = new PDO($dsn, 'postgres', 'postgres', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

      if ($pdo) {
        echo "Connected to the database successfully!";
      }
    } catch (PDOException $e) {
      die($e->getMessage());
    } finally {
      if ($pdo) {
        $pdo = null;
      }
    }
  }
}