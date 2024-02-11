<?php // new
	session_start();
	// connect to database
	$conn = mysqli_connect("ict4us-blogs.db.transip.me", "ict4us_bio", "7q9uVtg6aRaxFBAj3tiPyxBzDGT95qPG8rBe", "ict4us_blogs");
	if (!$conn ) {die("Error connecting to database: " . mysqli_connect_error());}
	
	// define global constants
	define('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'https://ict4us.nl/bioblog/');
?>