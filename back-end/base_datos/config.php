<?php

//echo "HOLA MUNDO";

class Conexion{
private $conn;

public function __CONSTRUCT(){

	try {
		
	  $this->conn=new PDO("mysql:host=localhost; dbname=bimo", 'root','');
    	//$this->con= new PDO("sqlsrv:Server=foo-sql,1433;Database=mydb", 'sa' , 'secreto');
	  // set the PDO error mode to exception
	  $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	  /* echo "Conexión establecida";
	 */
	 }catch(PDOException $e) {
	  echo "Error: " . $e->getMessage();
	 }
}

public function getConection(){
	 	return $this->conn;
	}
}


/* $con=new Conexion(); */
 ?>