function GuardarVotacion()
{
	var variableParaSexo = "error";
	if(document.getElementsByName('radioSexo')[0].checked){
		variableParaSexo = 'masculino';
	}else{
		variableParaSexo = 'femenino';
	}	

	var variableParaComidas = '';

	if(document.getElementsByName('checkComidas')[0].checked)
	{
		variableParaComidas = variableParaComidas.concat('pizza');
	}
	if(document.getElementsByName('checkComidas')[1].checked)
	{
		if(document.getElementsByName('checkComidas')[0].checked)
		{
			variableParaComidas = variableParaComidas.concat(',empanadas');
		}else
		{
			variableParaComidas = variableParaComidas.concat('empanadas');
		}
	}
	if(document.getElementsByName('checkComidas')[2].checked)
	{
		if(document.getElementsByName('checkComidas')[0].checked || document.getElementsByName('checkComidas')[1].checked)
		{
			variableParaComidas = variableParaComidas.concat(',asado');
		}else
		{
			variableParaComidas = variableParaComidas.concat('asado');
		}
	}

	var funcionAjax = $.ajax({
		url: 'nexo.php',
		type: 'post',
		data: {
			queHacer: 'GuardarVotacion',
			id: document.getElementById('hiddenId').value,
			provincia: document.getElementById('txtProvincia').value,
			localidad: document.getElementById('txtLocalidad').value,
			direccion: document.getElementById('txtDireccion').value,
			presidente: document.getElementById('selectPresidentes').value,
			sexo: variableParaSexo,
			comidas: variableParaComidas
		}
	});

	funcionAjax.done(function(retorno)
	{
		$('#principal').html(retorno);
	});
}

function Modificar(EstaEsLaId)
{
	var funcionAjax = $.ajax({
		url: 'nexo.php',
		type: 'post',
		data: {
			queHacer: 'Modificar',
			idParaModificar: EstaEsLaId
		}
	});

	funcionAjax.done(function(retorno){
		var unaVotacion = JSON.parse(retorno);
		$('#hiddenId').val(unaVotacion.id);
		$('#txtProvincia').val(unaVotacion.provincia);
		$('#txtLocalidad').val(unaVotacion.localidad);
		$('#txtDireccion').val(unaVotacion.direccion);
		$('#selectPresidentes').val(unaVotacion.presidente);
		if(unaVotacion.sexo == 'femenino')
		{
			$("#radioSexo2").prop("checked", true);
		}
	});

	Votacion("Modificacion");
}

function Borrar(EstaEsLaId)
{
	var funcionAjax = $.ajax({
		url: 'nexo.php',
		type: 'post',
		data: {
			queHacer: 'Borrar',
			idParaBorrar: EstaEsLaId
		}
	});

	funcionAjax.done(function(retorno){
		Listado();
	});
}