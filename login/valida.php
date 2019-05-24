<?php

require 'conexao.php';
$email=$_POST['email'];
$senha=$_POST['senha'];
$count = $dbn->query("SELECT * FROM usuario WHERE email='$email' AND senha='$senha'");
$rows = $count->fetchAll(); 
$n = count($rows);
if($n==1){ 
session_start();
$_SESSION['login'] = $email;
$_SESSION['senha'] = $senha;
header("Location: sistema.php"); 
}
else{ header("Location: falhalogin.html");
}
?>