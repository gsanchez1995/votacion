<?php
	session_start();
		require_once "./clases/claseVotacion.php";

		Votacion::InsertarVoto($_SESSION['dni'],$_POST['provincia'],$_POST['presidente'],$_POST['sexo']);
			unset($_SESSION['dni']);
			echo "Votación realizada";
		
 ?>