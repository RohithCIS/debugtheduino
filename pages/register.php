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
	<title>Register : Debug The Duino</title>
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
			<a href="/pages/login.php">Login</a>
			<a class="active" href=#>Register</a>
			<a href="/pages/contact.php">Contact</a><br><br>
			<!-- <h2>TechnoVIT Chennai</h2> -->
		</div>
	</div>
	<div class="homebody1">
		<div class="col-md-4 col-sm-12 col-xs-12">
			<div class="bodytab">
				<div class="tabcell">
					<div>
						<form class="regform" method="POST" action="/functions/regdb.php">
						<h2>Register</h2>
							<input type="text" name="name" placeholder="Name (required)" autofocus required><br>
							<input type="email" name="email" placeholder="E-mail (required)" required><br>
							<input type="phone" name="phone" placeholder="Phone (required)" required><br>
							<input type="text" name="clg" placeholder="College (required)" required><br>
							<input type="text" name="year" placeholder="Year (required)" required><br>
							<label><?php echo $error_message;?></label><br>
							<button type="submit">Register</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8 col-sm-12 col-xs-12">
			<div class="logoc">
				<p><strong style="font-size: 40px;">Rules</strong><br>
					<br>&#8226; Round A will be open for three days.
					<br>&#8226; This is an individual event.
					<br>&#8226; As soon a participant registers for round A ,he/she will be give a unique username and password to attend Round A.
					<br>&#8226; Participants are requested not to share their username and passwords.
					<br>&#8226; The quiz consists of 2 rounds: Round A and Round B.
					<br>&#8226; Round A consists of 15 MCQ’s of ONE point each.
					<br>&#8226; Round B consists of coding tasks ,each valuing 10 points.
					<br>&#8226; All the rounds are timed.
					<br>&#8226; Top 25% of the participants will be selected for round B based on the correctness and how fast they complete Round A.
					<br>&#8226; Separate email will be sent to the selected participants on details regarding Round B.</p>
			</div>
		</div>
	</div>

	<?php include $root.'/partials/footer.php'; ?>
</body>
</html>