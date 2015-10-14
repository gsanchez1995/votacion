<?php

echo "
		<form method='post' id='form' name='form' onsubmit='GuardarVotacion();return false;'>
			Provincia: <input type='text' id='txtProvincia' name='txtProvincia' minlength='1'/></br>
			Localidad: <input type='text' name='txtLocalidad' id='txtLocalidad'/></br>
			Direccion: <input type='text' name='txtDireccion' id='txtDireccion'/></br>
			Presidente: <select name='selectPresidentes' id='selectPresidentes'>
				<option value='scioli'>Scioli</option>
				<option value='macri'>Macri</option>
				<option value='massa'>Massa</option>
			</select></br>
			Sexo: 
			<input type='radio' name='radioSexo' id='radioSexo1' value='masculino' checked>Masculino
			<input type='radio' name='radioSexo' id='radioSexo2' value='femenino'>Femenino</br>
			Comidas:</br>
			<input type='checkbox' name='checkComidas' id='checkComidas1' value='pizzas'>Pizza</br>
			<input type='checkbox' name='checkComidas' id='checkComidas2' value='empanadas'>Empanadas</br>
			<input type='checkbox' name='checkComidas' id='checkComidas3' value='asado'>Asado</br>
			<input type='hidden' name='hiddenId' id='hiddenId'/>
			<button type='submit' id='btnAceptar' name='btnAceptar'>Aceptar</button><b/>
		</form>
		";

?>

