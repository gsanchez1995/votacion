<?php
	session_start();
		require_once "./clases/claseVotacion.php";

		var_dump($_POST['comidas']);

		//la verdad no entiendo porque manda null. en "funcionesABM" se debería mandar el post de comidas con algo pero siempre manda null

		$_POST['comidas']='default';

		if($_POST['id']!='')
		{
			Votacion::ModificarVoto($_POST['provincia'],$_POST['localidad'],$_POST['direccion'],$_POST['presidente'],$_POST['sexo'],$_POST['comidas'],$_POST['id']);
			echo "Modificación realizada";

		}else
		{
			Votacion::InsertarVoto($_SESSION['dni'],$_POST['provincia'],$_POST['localidad'],$_POST['direccion'],$_POST['presidente'],$_POST['sexo'],$_POST['comidas']);
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