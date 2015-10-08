<?php

require_once "./clases/claseVotacion.php";

$unaVotacion = Votacion::TraerVotoPorId($_POST['idParaModificar']);

echo json_encode($unaVotacion);

?>