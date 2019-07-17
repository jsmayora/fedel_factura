<?php 


//  conexión a la base de datos

class conexion
{
	public $host = "localhost";
	public $user = "pruebas";
	public $password = "pruebas";
	public $dbname = "bd_facturacionn";

	function conectar()
	{
		# code...
		$conectar = new mysqli($this->host, $this->user,$this->password,$this->dbname);

		// Check connection
		if ($conectar->connect_error) {
			die("Conexión Fallida: " . $conectar->connect_error);
		} else{
			echo "\nConectado\n\n";
			return $conectar;
		}
		
		$conectar->close();
	}
}

// instanciando a la clase
// $objConexion = new conexion();

// $objConexion->conectar();

 ?>