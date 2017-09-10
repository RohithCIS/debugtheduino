<?php
	if (isset($_SESSION)) {
		session_unset();
		session_destroy();
	}
	session_start();
	$error_message="";
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
		<div class="imgl">
			<a href="http://technovitchennai.com" target="_"><img src="../../assets/img/technovit.png"></a>
			<a href="http://technovitchennai.com/connectivitieee/index.html" target="_"><img src="../../assets/img/connectivitiee.png"></a>
		</div>
		<div class="topnav">
			<a href="/">Home</a>
			<a class="active" href=#>Login</a>
			<a href="/pages/register.php">Register</a>
			<a href="/pages/contact.php">Contact</a><br><br>
			<!-- <h2>TechnoVIT Chennai</h2> -->
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
							<label><?php echo $error_message;?></label><br>
							<button type="submit">Login</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8 col-sm-12 col-xs-12">
			<div class="logoc">
				<p><strong style="font-size: 40px;">Info</strong><br>
					Round A will be open for 3 days, from <strong>11th September to 13th September.</strong>  You can take the test anytime in between.<br><br>
					The Results of Round A will subsequently be announced via EMail. Those who qualify for Round B will get an intimation.<br><br>
					Digital Certificates can be Downloaded after results are announced.
				</p>
			</div>
		</div>
	</div>
	
	<?php include $root.'/partials/footer.php'; ?>
	
</body>
</html>