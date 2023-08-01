<?php
$servername = "localhost";
$username = "zere";
$password = "1234";
$dbname = "modelo_banco";


$mysqli = new mysqli ($servername,$username,$password,$dbname);
 
if($mysqli->connect_errno){
     echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;
}
?>