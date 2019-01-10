<?php 

	class database
	{
		private $hostname = "localhost";
		private $username = "root";
		private $password = "";
		private $dbname = "quanlythanhien";

		private $conn = NULL;
		private $result = NULL;
//ket noi co so du lieu
		public function connect(){
			$this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
			if ($this->conn) {
				mysqli_set_charset($this->conn, 'utf-8');
			} else{
				echo "Ket noi that bai";
				exit();
			}
			return $this->conn;
		}

//thuc thi cau lenh sql
		public function execute($sql){
			$this->result = $this->conn->query($sql);
			return $this->result;
		}

		//phuong thuc lay du lieu
		public function getData(){
			if ($this->result) {
				$data = mysqli_fetch_array($this->result);
			} else {
				$data = 0;
			}
		}

		//lay toan bo du lieu
		public function getAllData(){
			if (!$this->result) {
				$data = 0;
			} else{
				while($datas = $this->getData()){
					$data[] = $datas;
				}
			}
			return $data;
		}

		//phuong thuc them du lieu
		public function insertData($hoten, $namsinh, $quequan){
			$sql = "INSERT INTO thanhvien(id, hoten, namsinh, quequan) VALUES(null, '$hoten', '$namsinh', '$quequan')";
			return $this->execute($sql);
		}

		//phuong thuc sua du lieu
		public function updateData($id, $hoten, $namsinh, $quequan){
			$sql = "UPDATE thanhvien SET hoten = '$hoten', namsinh = '$namsinh', quequan = '$quequan' WHERE id = '$id'";
			return $this->execute($sql);
		}

		//phuong thuc xoa
		public function delete($id){
			$sql = "DELETE FROM thanhvien WHERE id ='$id'";
			return $this->execute($sql);
		}
	}
 ?>