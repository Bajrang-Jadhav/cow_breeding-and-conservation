<?php
	$conn = mysqli_connect("localhost","root","") or die("connection failes :" .mysqli_connect_error());
	$conn-> select_db("gorakshak");
?>