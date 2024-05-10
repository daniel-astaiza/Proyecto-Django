<?php

class Conexion {
    private $host;
    private $db;
    private $user;
    private $pwd ;
    public $conn;

	function __construct($hostaux,$dbaux,$useraux,$pwdaux){
		$this->host=$hostaux;
		$this->bd=$dbaux;
		$this->user=$useraux;
		$this->pwd=$pwdaux;
	}

    public function Conectar() {
		try{
            $this->conn = new PDO("mysql:host={$this->host}; dbname={$this -> bd}; charset=utf8mb4", $this-> user,$this -> pwd);
            return $this -> conn;
		}catch(PDOException $e){
			echo "error al conectar a la base de datos ======>".$e-> getMessage();
		
		}
    }

    public function Cerrar() {
		try{
			$this->conn = null;
			echo "Conexion cerrada";
		}catch(Exception $e){
			echo "error al cerrar la conexion".$e;
		};

	}
}

// // Uso de la clase
// $db = new Database();
// $conn = $db->Conectar();



?>