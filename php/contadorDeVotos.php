<?php
	if(!isset($_COOKIE['contadorDeVotos']))
	{
		setcookie('contadorDeVotos',1);
	}else
	{
		$_COOKIE['contadorDeVotos']++;
	}
	echo $_COOKIE['contadorDeVotos'];
?>