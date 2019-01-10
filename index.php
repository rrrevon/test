<?php 
	include "models/dbconfig.php";
	$db = new database;
	$db->connect();

	if (isset($_GET['controllers'])) {
		$controllers = $_GET['controllers'];
	} else {
		$controllers = '';
	}

	switch ($controllers) {
		default:
		require "controllers/index.php";
			break;
	}
 ?>