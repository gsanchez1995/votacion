<?php 

session_start();

$_SESSION["dni"]=$_POST["dni"];

echo "Sesión iniciada con DNI Nº".$_SESSION["dni"].", puede continuar.";

?>