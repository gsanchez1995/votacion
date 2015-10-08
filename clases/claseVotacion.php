<?php 

require_once "AccesoDatos.php";

class Votacion
{
	public $id;
	public $dni;
	public $provincia;
	public $presidente;
	public $sexo;

	public static function InsertarVoto($dni, $provincia, $presidente, $sexo)
	{
		$objetoAccesoDatos = AccesoDatos::dameUnObjetoAcceso();
		$consulta = $objetoAccesoDatos->RetornarConsulta("CALL InsertarVoto(:paramDni, :paramProvincia, :paramPresidente, :paramSexo)");
		$consulta->bindValue(":paramDni",$dni,PDO::PARAM_INT);
		$consulta->bindValue(":paramProvincia",$provincia,PDO::PARAM_STR);
		$consulta->bindValue(":paramPresidente",$presidente,PDO::PARAM_STR);
		$consulta->bindValue(":paramSexo",$sexo,PDO::PARAM_STR);
		$consulta->execute();
	}

	public static function TraerTodosLosVotos()
	{
		$objetoAccesoDatos = AccesoDatos::dameUnObjetoAcceso();
		$consulta = $objetoAccesoDatos->RetornarConsulta("CALL TraerTodosLosVotos()");
		$consulta->execute();
		return $consulta->fetchAll(PDO::FETCH_CLASS,"Votacion");
	}

	public static function TraerVotoPorId($id)
	{
		$objetoAccesoDatos = AccesoDatos::dameUnObjetoAcceso();
		$consulta = $objetoAccesoDatos->RetornarConsulta("CALL TraerVotoPorId(:paramId)");
		$consulta->bindValue(":paramId",$id,PDO::PARAM_INT);
		$consulta->execute();
		return $consulta->fetchObject("Votacion");
	}

	public static function ModificarVoto($provincia,$presidente,$sexo,$id)
	{
		$objetoAccesoDatos = AccesoDatos::dameUnObjetoAcceso();
		$consulta = $objetoAccesoDatos->RetornarConsulta("CALL ModificarVoto(:paramProvincia, :paramPresidente, :paramSexo, :paramId)");
		$consulta->bindValue(":paramProvincia",$provincia,PDO::PARAM_STR);
		$consulta->bindValue(":paramPresidente",$presidente,PDO::PARAM_STR);
		$consulta->bindValue(":paramSexo",$sexo,PDO::PARAM_STR);
		$consulta->bindValue(":paramId",$id,PDO::PARAM_INT);
		$consulta->execute();
	}

	public static function BorrarVoto($id)
	{
		$objetoAccesoDatos = AccesoDatos::dameUnObjetoAcceso();
		$consulta = $objetoAccesoDatos->RetornarConsulta("CALL BorrarVoto(:paramId)");
		$consulta->bindValue(":paramId",$id,PDO::PARAM_INT);
		$consulta->execute();
	}
}

?>