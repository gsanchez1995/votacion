function HacerSesionDNI()
{
	var funcionAjax = $.ajax({
		url: 'nexo.php',
		type: 'post',
		data: {
			queHacer: 'SesionDNI',
			dni: document.getElementById("txtDni").value
		}
	});

	funcionAjax.done(function(retorno)
	{
		$('#principal').html(retorno);
	});
}

function ContadorDeVotos()
{
	var funcionAjax = $.ajax({
		url: 'nexo.php',
		type: 'post',
		data: {
			queHacer: 'ContadorDeVotos'
		}
	});

	funcionAjax.done(function(retorno)
	{
		$('#Contador').html(retorno);
	});
}