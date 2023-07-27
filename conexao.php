<?php
$host = "localhost";
$usuario = "zere";
$senha = "lindamira29";
$banco = "modelo_banco";

$mysqli = new mysqli ($host,$usuario,$senha,$banco);
 
if($mysqli->connect_errno){
     echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;
}
?>