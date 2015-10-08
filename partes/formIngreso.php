<?php 


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Ingrese DNI:<b/>
	<form method="post" id="form" name="form" onsubmit="HacerSesionDNI();return false;">
		<input type="text" id="txtDni" name="txtDni" minlength="7" maxlength="8" /><b/>
		<button type="submit" id="btnAceptar" name="btnAceptar">Aceptar</button><b/>
	</form>
</body>
</html>