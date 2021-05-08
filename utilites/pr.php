<?php
	session_start();
	$_SESSION['a'] = null;
	header("Location:../pages/katalog2.php?id_kat={$_GET['a']}");
?>