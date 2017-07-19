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
	<title>Register : Debug The Duino</title>
	<?php include $root.'/partials/head.php'; ?>
</head>
<body>
	<div class="bghead"></div>
	<div class="homeheader">
		<h1 class="tit">DEBUG THE DUINO</h1>
		<div class="topnav">
			<a href="index.html">Home</a>
			<a href="login.html">Login</a>
			<a class="active" href=#>Register</a>
			<a href="">Contact</a><br><br>
			<h2>TechnoVIT Chennai</h2>
		</div>
	</div>
	<div class="homebody">
		<div class="col-md-4">
			<div class="bodytab">
				<div class="tabcell">
					<div>
						<form class="regform" method="POST" action="#">
						<h2>Register</h2>
							<input type="text" name="name" placeholder="Name" autofocus required><br>
							<input type="email" name="email" placeholder="E-mail" required><br>
							<input type="phone" name="phone" placeholder="Phone" required><br>
							<input type="text" name="clg" placeholder="College" required><br>
							<input type="text" name="year" placeholder="Year"><br>
							<button type="submit">Register</button>
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