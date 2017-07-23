<?php
	if (isset($_SESSION)) {
		session_unset();
		session_destroy();
	}
	session_start();
	include realpath($_SERVER["DOCUMENT_ROOT"]).'/functions/config.php';
	include $root.'/functions/db.php';
	$err="";
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
		<div class="col-md-4">
			<div class="bodytab">
				<div class="tabcell">
					<div>
						<form class="regform" action="/functions/upload.php" method="post" enctype="multipart/form-data">
						    <h3>Upload Answer for Question 1:</h3>
						    <input type="file" name="fileToUpload" id="fileToUpload">
						    <input type="hidden" value="<?php echo $name; ?>" name="name">
						    <input type="hidden" value="[1]" name="quest">
						    <button type="submit" name="submit">Submit Answer</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
		</div>
	</div>


	<?php include $root.'/partials/footer.php'; ?>
	
</body>
</html>