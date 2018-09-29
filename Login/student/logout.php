<?php
	session_start();
	unset($_SESSION["susername"]);
	unset($_SESSION["password"]);
	header('Location: ../login.html')
?>
