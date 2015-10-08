<?php 

	require_once "./clases/claseVotacion.php";

	$arrayDeVotaciones = Votacion::TraerTodosLosVotos();

	echo "<table border='1'>
		<tr>
			<td>DNI</td>
			<td>Provincia</td>
			<td>Presidente</td>
			<td>Sexo</td>
			<td>Modificar</td>
			<td>Borrar</td>
		</tr>";

	foreach ($arrayDeVotaciones as $item) {
		echo "<tr>
				<td>$item->dni</td>
				<td>$item->provincia</td>
				<td>$item->presidente</td>
				<td>$item->sexo</td>
				<td><input type='button' value='Modificar' onclick='Modificar(".$item->id.")'/></td>
				<td><input type='button' value='Borrar' onclick='Borrar(".$item->id.")'/></td>
			  </tr>";
	}

	echo "</table>";

?>