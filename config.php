<?php
	session_start();
	$conn = mysqli_connect("localhost", "jan", "LocalJan@1098","bioblog");
	if (!$conn ) {die("Error connecting to database: " . mysqli_connect_error());}
	
	define('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'https://localhost/bioblog/');
?>