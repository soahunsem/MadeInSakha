<?php
	session_start();
	$c = mysqli_connect("127.0.0.1", "root", "", "crekids");
	$d = mysqli_query($c, "DELETE FROM ponr WHERE id_lol='" . $_GET['id'] . "'");
	if ($d == true) {
		header("Location: ../pages/ponr.php"); 
	}
?>