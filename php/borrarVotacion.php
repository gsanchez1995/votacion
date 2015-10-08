<?php

require_once "./clases/claseVotacion.php";

$unaVotacion = Votacion::BorrarVoto($_POST['idParaBorrar']);

?>