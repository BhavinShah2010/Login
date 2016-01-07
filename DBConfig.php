<?php

class DBConnection {
	
		private static $instance;
		private $con;
		private $dbCon;
		private $dbName;
		private $dbPassword;
		private $dbUserName;
		private $dbServer;
		private function __construct () {
			
				$this->dbServer = "localhost";
				$this->dbUserName = "root";
				$this->dbPassword = "";
				$this->dbName = "loginapp";
				$this->con = mysqli_connect($this->dbServer,$this->dbUserName, $this->dbPassword) or die( "Unable to connect");
				$this->dbCon = mysqli_select_db($this->con,$this->dbName) or die( "Unable to select database");
			}
			
		
		public static function getInstance () {
				if (DBConnection::$instance == null) {
						DBConnection::$instance = new DBConnection();
					}
				return DBConnection::$instance;
				 
			}
			
		public function getConnection (){
				return $this->con;
			}
	
	}
	
	
	//print_r( DBConnection::getInstance()-> getConnection());
	 
	
	
?>