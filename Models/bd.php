<?php 
namespace Models;

class bd{



	public function __construct(){
		$this->host ='localhost';
		$this->user = 'root';
		$this->pass = 'root';
		$this->db = 'ud';
		try{
			$conexion= new PDO('mysql:host=$this->host,dbname=$this->db',$this->user,$this-'root');
		}catch(PDOException $e){
			echo "fallo la conexion ". $e->getMessage();
		}

	}

}



 ?>