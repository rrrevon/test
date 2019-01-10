<?php 
	if (isset($_GET['action'])) {
		$action = $_GET['action'];
	} else {
		$action = '';
	}

	switch ($action) {
		case 'add':{

			if (isset($_POST['add_user'])) {
			$hoten = $_POST['hoten'];
			$namsinh = $_POST['namsinh'];
			$quequan = $_POST['quequan'];
			
			$db->insertData($hoten, $namsinh, $quequan);
			}		
			require_once('../views/add_user.php');
			break;
		}

		case 'edit':{
			if (isset($_POST['edit_user'])) {
				$hoten = $_POST['hoten'];
				$namsinh = $_POST['namsinh'];
				$quequan = $_POST['quequan'];
				$id = $_GET['id'];

				$db->updateDate($id, $hoten, $namsinh, $quequan);
			}
			require_once('../views/edit_user.php');
			break;
		}

		case 'delete';
			require_once('../views/delete_user.php');
			break;

		default:{
			require('../views/list.php');
			break;
		}
	}
 ?>