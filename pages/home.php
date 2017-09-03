<?php
	if (isset($_SESSION)) {
		session_unset();
		session_destroy();
	}
	session_start();
	include realpath($_SERVER["DOCUMENT_ROOT"]).'/functions/config.php';
	include $root.'/functions/db.php';
	$err="";
	$pass="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$pwd=$_POST["pwd"];
		$email=$_POST["email"];

		$sql="SELECT NAME,EMAIL,PWD FROM USERS WHERE EMAIL='".$email."';";

		$result = $db->query($sql);

		if ($result->num_rows > 0) {
	        // output data of each row
	        while($row = $result->fetch_assoc()) {
	            $pass=$row["PWD"];
	            $email=$row["EMAIL"];
	            $name=$row["NAME"];
	        }
	    } 
	    else {
	        echo "0";
	    }

	    if ($pwd==$pass) {
	    	$err="";
	    }
	    else{
	    	header('Location: /pages/login.php?error_code=PWD');
	    	exit();
	    }

	    $db->close();
	}
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
			<a href="/">Logout</a>
			<br><br>
			<h2>Hi, <?php echo $name; ?> </h2>
		</div>
	</div>
	<div class="homebody">
		<div class="col-md-4 col-sm-12 col-xs-12" style="height: 400px;">
			<div class="bodytab">
				<div class="tabcell" style="height: 400px;">
					<div>
						<form class="regform" action="/pages/rnda.php" method="post" enctype="multipart/form-data">
						    <input type="hidden" value="<?php echo $name; ?>" name="name">
						    <input type="hidden" value="<?php echo $email; ?>" name="email">
						    <input type="hidden" value="<?php echo $pwd; ?>" name="pwd">
						    <button type="submit" name="submit">Round A</button>
						</form>
					</div>
					<br><br>
					<div>
						<form class="regform" action="/pages/rndb.php" method="post" enctype="multipart/form-data">
						    <input type="hidden" value="<?php echo $name; ?>" name="name">
						    <input type="hidden" value="[1]" name="quest">
						    <button type="submit" name="submit">Round B</button>
						</form>
					</div> 
				</div>
			</div>
		</div>
		<div class="col-md-8 col-sm-12 col-xs-12">
			<div class="logoc">
				<p><strong style="font-size: 40px;">Rules</strong><br>
					<br>&#8226; This is an individual event.
					<br>&#8226; As soon a participant registers for round A ,he/she will be give a unique username and password to attend Round A.
					<br>&#8226; Participants are requested not to share their username and passwords.
					<br>&#8226; The quiz consists of 2 rounds: Round A and Round B.
					<br>&#8226; Round A consists  of 15 MCQ’s ,each consisting of ONE point each.
					<br>&#8226; Round B consists of coding tasks ,each valuing 10 points.
					<br>&#8226; All the rounds are timed.
					<br>&#8226; Top 25% of the participants will be selected for round B based on the correctness and how fast they complete Round A.
					<br>&#8226; Separate email will be sent to the selected participants on details regarding Round B.</p>
			</div>
		</div>
		<!-- <div class="col-md-4">
			<div class="bodytab">
				<div class="tabcell"> -->
					<!-- <div>
						<form class="regform" action="/functions/upload.php" method="post" enctype="multipart/form-data">
						    <h3>Upload Answer for Question 1:</h3>
						    <input type="file" name="fileToUpload" id="fileToUpload">
						    <input type="hidden" value="<?php echo $name; ?>" name="name">
						    <input type="hidden" value="[1]" name="quest">
						    <button type="submit" name="submit">Submit Answer</button>
						</form>
					</div> -->
				<!-- </div>
			</div>
		</div> -->
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
		</div>
	</div>


	<?php include $root.'/partials/footer.php'; ?>
	
</body>
</html>