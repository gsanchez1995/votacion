<?php

switch ($_POST['queHacer']) {
	case 'Ingresar':
		include "partes/formIngreso.php";
		break;
	case 'SesionDNI':
		include "partes/loginDNI.php";
		break;
	default:
		# code...
		break;
}



?>