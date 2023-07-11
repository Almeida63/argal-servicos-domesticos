<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'cadastro';

$conn = new PDO("mysql:dbname=".$dbname."; host=".$host,$user, $password);
$conn->exec("SET NAMES utf8");
$conn->exec("SET CHARACTER SET utf8");

$mysqli = new mysqli($host, $user, $password, $dbname);

if($mysqli->error) {
  die("Falha!:". $mysqli->error);
}

?>