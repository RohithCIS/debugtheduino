<?php
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', 'rohith'); //Changed this for your database
	define('DB_DATABASE', 'dtd');

	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

	function make_safe($db, $variable) {
		$variable = strip_tags(mysqli_real_escape_string($db, trim($variable)));
		return $variable; 
	}
?>