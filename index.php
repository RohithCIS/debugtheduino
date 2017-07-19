<?php
	if (isset($_SESSION)) {
		session_unset();
		session_destroy();
	}
	session_start();
	include realpath($_SERVER["DOCUMENT_ROOT"]).'/functions/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Debug The Duino</title>
	<?php include $root.'/partials/head.php'; ?>
</head>
<body>
	<div class="bghead"></div>
	<div class="homeheader">
		<h1 class="tit">DEBUG THE DUINO</h1>
		<div class="topnav">
			<a class="active" href="">Home</a>
			<a href="pages/login.php">Login</a>
			<a href="pages/register.php">Register</a>
			<a href="">Contact</a><br><br>
			<h2>TechnoVIT Chennai</h2>
		</div>
	</div>
	<div class="homebody">
		<div class="col-md-4">
		<div class="logos">
			<p>An online event that catapults you to the world of <strong>Arduino!</strong></p>
		</div>
		</div>
		<div class="col-md-4">
			
		</div>
		<div class="col-md-4" style="height: 400px;">
			<div class="bodytab">
				<div class="tabcell" style="height: 400px;">
				<div class="reg" >
					<a href="pages/register.php">Register</a>
				</div><br><br><br><br>
				<div class="reg" >
					<a href="pages/login.php">Login</a>
				</div>
					
				</div>
			</div>
		</div>
	</div>

	<div class="footerc">
		<div class="fcont">
			&copy;2017 Debug the Duino<br>
			TechnoVIT<br>
			VIT University Chennai Campus<br>
			Site Designed by : <a href="https://therohith.com">Rohith</a>
		</div>
	</div>

</body>
</html>