<?php 
	/**
		 * 
		 */
		class database
		{
			private $hostname = "localhost";
			private $username = "root";
			private $password = "";
			private $dbname = "thuvien";

			private $conn = NULL;
			private $result = NULL;

			function connect(){
				$this ->conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
				if (!$this->conn) {
					echo "ket noi thanh cong";
				} else{
					echo "ket noi that bai";
				}
			}
		}
		$db = new database;
		$db->connect();	
 ?>