<?php
$dsn = 'mysql:dbname=sistema;host=127.0.0.1';
$user = 'root';
$password = '';
try {
    $dbn = new PDO($dsn,$user,$password);
}
catch(PDOException $e){
    echo "Connection failed: ". $e->getMessage();
}
?>