function Ingresar()
{
	var funcionAjax = $.ajax({
		url: 'nexo.php',
		type: 'post',
		data: {
			queHacer: 'Ingresar'
		}
	});

	funcionAjax.done(function(retorno)
	{
		$('#principal').html(retorno);
	});
}

function Votacion(CualTipo)
{
	var funcionAjax = $.ajax({
		url: 'nexo.php',
		type: 'post',
		data: {
			queHacer: 'Votacion',
			deQueTipo: CualTipo
		}
	});

	funcionAjax.done(function(retorno)
	{
		$('#principal').html(retorno);
	});
}

function Listado()
{
	var funcionAjax = $.ajax({
		url: 'nexo.php',
		type: 'post',
		data: {
			queHacer: 'Listado'
		}
	});

	funcionAjax.done(function(retorno)
	{
		$('#principal').html(retorno);
	});
}