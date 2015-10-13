<?php
	session_start();
		require_once "./clases/claseVotacion.php";

		if($_POST['id']!='')
		{
			Votacion::ModificarVoto($_POST['provincia'],$_POST['localidad'],$_POST['direccion'],$_POST['presidente'],$_POST['sexo'],$_POST['id']);
			echo "Modificación realizada";

		}else
		{
			Votacion::InsertarVoto($_SESSION['dni'],$_POST['provincia'],$_POST['localidad'],$_POST['direccion'],$_POST['presidente'],$_POST['sexo']);
			unset($_SESSION['dni']);
			if(!isset($_COOKIE['ultimaProvincia']))
			{
				setcookie('ultimaProvincia');
				$_COOKIE['ultimaProvincia']=$_POST['provincia'];
			}else
			{
				$_COOKIE['ultimaProvincia']=$_POST['provincia'];
			}
			echo "Votación realizada";
		}

		
 ?>