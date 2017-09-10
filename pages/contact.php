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
	<title>Contact : Debug The Duino</title>
	<?php include $root.'/partials/head.php'; ?>
</head>
<body>
	<div class="bghead"></div>
	<div class="homeheader">
		<h1 class="tit">DEBUG THE DUINO</h1>
		<!-- <div class="imgl">
			<a href="http://technovitchennai.com" target="_"><img src="../../assets/img/technovit.png"></a>
			<a href="http://technovitchennai.com/connectivitieee/index.html" target="_"><img src="../../assets/img/connectivitiee.png"></a>
		</div> -->
		<div class="topnav">
			<a href="/">Home</a>
			<a href="/pages/login.php">Login</a>
			<a href="/pages/register.php">Register</a>
			<a href=# class="active">Contact</a><br><br>
			<!-- <h2>TechnoVIT Chennai</h2> -->
		</div>
	</div>
	<div class="homebody">
		<div class="col-md-4 col-sm-12 col-xs-12">
			<div class="logos">
			<strong>Organisers</strong>
				<p style="font-size: 25px;">Sambhav: 9940224226<br>Bharath: 9940346483</p>
			<strong>Faculty Organiser</strong>
				<p style="font-size: 25px;">Prof. Prakash V</p>
			</div>
			<div class="logos">	
				<img width="100%" src="../../assets/img/technovit.png">
			</div>
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12">
			
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12">
			<div class="logos">
				<strong>Website Help</strong>
				<p style="font-size: 20px;">Rohith : <br>debugtheduino@gmail.com<br>+91 8110960609</p>
			</div>
			<div class="logos">
				<img width="100%" src="../../assets/img/connectivitiee.png">
			</div>
		</div>
	</div>


	<?php include $root.'/partials/footer.php'; ?>

</body>
</html>