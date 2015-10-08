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
		$consulta = $objetoAccesoDatos->RetornarConsulta("INSERT INTO votaciones(dni,provincia,presidente,sexo) VALUES (:paramDni,:paramProvincia,:paramPresidente,:paramSexo)");
		$consulta->bindValue(":paramDni",$dni,PDO::PARAM_INT);
		$consulta->bindValue(":paramProvincia",$provincia,PDO::PARAM_STR);
		$consulta->bindValue(":paramPresidente",$presidente,PDO::PARAM_STR);
		$consulta->bindValue(":paramSexo",$sexo,PDO::PARAM_STR);
		$consulta->execute();
	}
}

?>