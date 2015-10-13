<?php 

	require_once "./clases/claseVotacion.php";

	$arrayDeVotaciones = Votacion::TraerTodosLosVotos();

	echo "<table border='1'>
		<tr>
			<td>DNI</td>
			<td>Provincia</td>
			<td>Localidad</td>
			<td>Dirección</td>
			<td>Presidente</td>
			<td>Sexo</td>
			<td>Modificar</td>
			<td>Borrar</td>
			<td>Ver en Mapa</td>
		</tr>";


	foreach ($arrayDeVotaciones as $item) {
		$miVariable = "\"".$item->provincia."\",\"".$item->direccion."\",\"".$item->localidad."\",\"".$item->id."\"";
		echo "<tr>
				<td>$item->dni</td>
				<td>$item->provincia</td>
				<td>$item->localidad</td>
				<td>$item->direccion</td>
				<td>$item->presidente</td>
				<td>$item->sexo</td>
				<td><input type='button' value='Modificar' onclick='Modificar(".$item->id.")'/></td>
				<td><input type='button' value='Borrar' onclick='Borrar(".$item->id.")'/></td>
				<td><input type='button' value='Ver en Mapa' onclick='VerEnMapa($miVariable)'/></td>
			  </tr>";
	}

	echo "</table>";
//function VerEnMapa(prov, dire, loc, id)
?>