function GuardarVotacion()
{
	var variableParaSexo = "error";
	if(document.getElementsByName('radioSexo')[0].checked){
		variableParaSexo = 'masculino';
	}else{
		variableParaSexo = 'femenino';
	}	

	var funcionAjax = $.ajax({
		url: 'nexo.php',
		type: 'post',
		data: {
			queHacer: 'GuardarVotacion',
			id: document.getElementById('hiddenId').value,
			provincia: document.getElementById('txtProvincia').value,
			presidente: document.getElementById('selectPresidentes').value,
			sexo: variableParaSexo
		}
	});

	funcionAjax.done(function(retorno)
	{
		$('#principal').html(retorno);
	});
}