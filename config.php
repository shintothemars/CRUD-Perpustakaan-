<?php 
define('DB_HOST','localhost');
define('DB_NAME','databuku');
define('DB_USER','root');
define('DB_PASS','');

try {
    $db=new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS);
    echo"Database connected";
}catch(PDOException $e){
    echo"database non connected -> ".$e->getMessage();
    exit;
}
    session_start();
?>