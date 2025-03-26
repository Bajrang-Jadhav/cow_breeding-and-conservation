<?php
	session_start();

	if (!isset($_SESSION["username"])) {
		header("Location: http://localhost/cow_breeding-and-conservation/login.php");
	}
  ?>

