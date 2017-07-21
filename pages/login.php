<?php
	if (isset($_SESSION)) {
		session_unset();
		session_destroy();
	}
	session_start();
	include realpath($_SERVER["DOCUMENT_ROOT"]).'/functions/config.php';
	include $root.'/functions/errorhandling.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login : Debug The Duino</title>
	<?php include $root.'/partials/head.php'; ?>
</head>
<body>
	<div class="bghead"></div>
	<div class="homeheader">
		<h1 class="tit">DEBUG THE DUINO</h1>
		<div class="topnav">
			<a href="/">Home</a>
			<a class="active" href=#>Login</a>
			<a href="/pages/register.php">Register</a>
			<a href="">Contact</a><br><br>
			<h2>TechnoVIT Chennai</h2>
		</div>
	</div>
	<div class="homebody">
		<div class="col-md-4">
			<div class="bodytab">
				<div class="tabcell">
					<div>
						<form class="regform" method="POST" action="home.php">
						<h2>Login</h2>
							<input type="email" name="email" placeholder="E-mail" autofocus required><br>
							<input type="password" name="pwd" placeholder="Password" required><br>
							<label><?php echo $error_message;?></label>
							<button type="submit">Login</button>
						</form>
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