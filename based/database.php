<?php

$server = "localhost:3307";
$username = "root";
$password = "";
$database = "php_login_database";

try {
  $conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);
  /*echo "Connected to $database at $server successfully.";*/
} catch (PDOException $e) {
  die("Connection Failed $database: " . $e->getMessage());
}

?>