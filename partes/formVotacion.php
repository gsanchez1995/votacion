<?php

echo "
		<form method='post' id='form' name='form' onsubmit='GuardarVotacion();return false;'>
			Provincia: <input minlength='1' type='text' id='txtProvincia' name='txtProvincia'/></br>
			Presidente: <select name='selectPresidentes' id='selectPresidentes'>
				<option value='scioli'>Scioli</option>
				<option value='macri'>Macri</option>
				<option value='massa'>Massa</option>
			</select></br>
			Sexo: 
			<input type='radio' name='radioSexo' id='radioSexo1' value='masculino'>Masculino
			<input type='radio' name='radioSexo' id='radioSexo2' value='femenino'>Femenino</br>
			<input type='hidden' name='hiddenId' id='hiddenId'/>
			<button type='submit' id='btnAceptar' name='btnAceptar'>Aceptar</button><b/>
		</form>
		";

?>

