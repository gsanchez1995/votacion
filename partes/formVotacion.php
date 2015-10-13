<?php

echo "
		<form method='post' id='form' name='form' onsubmit='GuardarVotacion();return false;'>
			Provincia: <input minlength=1 type='text' id='txtProvincia' name='txtProvincia'/></br>
			Localidad: <input type='text' name='txtLocalidad' id='txtLocalidad' minlength=1/></br>
			Direccion: <input type='text' name='txtDireccion' id='txtDireccion' minlength=1/></br>
			Presidente: <select name='selectPresidentes' id='selectPresidentes'>
				<option value='scioli'>Scioli</option>
				<option value='macri'>Macri</option>
				<option value='massa'>Massa</option>
			</select></br>
			Sexo: 
			<input type='radio' name='radioSexo' id='radioSexo1' value='masculino' checked>Masculino
			<input type='radio' name='radioSexo' id='radioSexo2' value='femenino'>Femenino</br>

			<input type='hidden' name='hiddenId' id='hiddenId'/>
			<button type='submit' id='btnAceptar' name='btnAceptar'>Aceptar</button><b/>
		</form>
		";

?>

