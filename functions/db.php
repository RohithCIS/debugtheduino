<?php
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', 'rohith'); //Changed this for your database
	define('DB_DATABASE', 'DTD');

	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD);

	$sql="CREATE DATABASE IF NOT EXISTS DTD";

	$db->query($sql);

	$db->close();

	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

	$sql="CREATE TABLE IF NOT EXISTS USERS (NAME VARCHAR(30) NOT NULL, EMAIL VARCHAR(50) NOT NULL, PHONE VARCHAR(15), CLG VARCHAR(50), YEAR INT(5), PWD VARCHAR(20));";
	$db->query($sql);

	function make_safe($db, $variable) {
		$variable = strip_tags(mysqli_real_escape_string($db, trim($variable)));
		return $variable; 
	}
?>
