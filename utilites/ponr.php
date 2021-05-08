<?php
	session_start();
	$c = mysqli_connect("127.0.0.1", "qwert", "root", "register-bg");
	$ins = "INSERT INTO ponr(id_pok, id_ukr) VALUES ('{$_SESSION['id_pok']}', '{$_GET['id_ukr']}')";
	$q = mysqli_query($c, $ins);

	if ($q == true) {
		header("Location: ../pages/primer1.php?id_tov={$_GET['id_ukr']}");
	}
?>