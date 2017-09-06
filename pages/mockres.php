<?php
	session_start();
	include realpath($_SERVER["DOCUMENT_ROOT"]).'/functions/config.php';
	include $root.'/functions/db.php';

    $a1 = $_POST['q1'];
	$a2 = $_POST['q2'];
	$a3 = $_POST['q3'];

	$totalCorrect = 0;

	if ($a1 == "C") { $totalCorrect++; }
	if ($a2 == "C") { $totalCorrect++; }
	if ($a3 == "D") { $totalCorrect++; }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Round A : Debug The Duino</title>
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
			<a href="/">Logout</a>
			<br><br>
			<h2>Hi </h2>
		</div>
	</div>
	<div class="homebody">
		<div class="col-md-8 col-sm-12 col-xs-12">
			<div class="logoc">
				<p><strong style="font-size: 40px;">Thanks for Participating!</strong><br>
				You Scored : <strong style="font-size: 40px;"><?php echo $totalCorrect; ?>/3</strong> in Round A<br>
				You will be Informed if you are Selected for Round B after all participants finish Round A.<br>
				Please Log Out.
			</div>
		</div>
	</div>


	<?php include $root.'/partials/footer.php'; ?>
	
</body>
</html>