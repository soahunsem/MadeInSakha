<?php
	session_start();
	$c = mysqli_connect("127.0.0.1", "qwert", "root", "register-bg");
	$d = mysqli_query($c, "DELETE FROM korz WHERE id_lol='" . $_GET['id'] . "'");
	if ($d == true) {
		header("Location: ../pages/korzina.php"); 
	}
?>