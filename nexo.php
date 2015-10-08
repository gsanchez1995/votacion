<?php

switch ($_POST['queHacer']) {
	case 'Ingresar':
		include "partes/formIngreso.php";
		break;
	case 'SesionDNI':
		include "partes/loginDNI.php";
		break;
	case 'Votacion':
		session_start();
		if($_POST['deQueTipo']=='Alta')
		{
			if(isset($_SESSION['dni'])){
			include "partes/formVotacion.php";
			}
			else{
			echo "Debe logearse primero";
			}
		}
		else
		{
			include "partes/formVotacion.php";
		}
		break;
	case 'GuardarVotacion':
		include "php/guardarVotacion.php";
		break;
	case 'Listado':
		include "partes/formListado.php";
		break;
	case 'Modificar':
		include "php/modificarVotacion.php";
		break;
	case 'Borrar':
		include "php/borrarVotacion.php";
		break;
	default:
		# code...
		break;
}



?>