<?php 

define("DB_HOST", "localhost");
define("DB_USER", "shiv");
define("DB_PASS", "123456");
define("DB_NAME", "php_dev");

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($conn->connect_error){
    die('Connection failed' . $conn->connect_error); 
}

echo 'Connected'
?>