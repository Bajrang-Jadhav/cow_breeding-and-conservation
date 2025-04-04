<?php
	session_start();
	
	if (!isset($_SESSION["username"])) {
		echo '<script>
                    alert("PLEASE LOGIN FIRST TO ACCESS THIS PAGE");
                    window.location.href = "LOGIN.php";
                  </script>';
		// header("Location: http://localhost/cow_breeding-and-conservation/login.php");
	}
  ?>

