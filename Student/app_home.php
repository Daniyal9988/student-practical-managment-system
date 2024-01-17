<?php
	session_start();
	include "mysqli_connect.php";

	if(isset($_POST['insert'])) {
		header('location:add_practical_training.php');
	}
?>