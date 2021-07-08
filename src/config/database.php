<?php


class Database {

  public static function getConnetion() {
    // $envPath = realpath(dirname(__FILE__,1) . '/env.ini'); //não tá chegando ao env.ini
    // $env = parse_ini_file($envPath);
    $env = parse_ini_file('../env.ini');

    $conn = new mysqli($env['host'], $env['username'],
      $env['password'], $env['database']);

    if($conn->connect_error) {
      die("Error: " . $conn->connect_error);
    }

    // echo "Connected successfully";
    return $conn;
  }

  public static function getResultFromQuery($sql) {
    $conn = self::getConnetion();
    $result = $conn->query($sql);
    $conn->close();
    return $result;
  }
}