<?php 

class Model 
{

	public $mysql;

	public function __construct() 
	{
 
		try {
			$this->mysql = new PDO('mysql:host='.database_host.';dbname='.database_name, database_user, database_pass);
		} catch(PDOException $e) {
			echo 'Error in pdo: '.$e->getMessage();
			exit;
		}

	}
	
}