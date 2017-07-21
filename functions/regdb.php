<?php

	if (!session_id())
			session_start();

		include realpath($_SERVER["DOCUMENT_ROOT"]).'/functions/config.php';

		include $root.'/functions/db.php';

	function randomPassword() {
	    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
	    $pass = array(); //remember to declare $pass as an array
	    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
	    for ($i = 0; $i < 8; $i++) {
	        $n = rand(0, $alphaLength);
	        $pass[] = $alphabet[$n];
	    }
	    return implode($pass); //turn the array into a string
	}

	$name=$_POST["name"];
	$email=$_POST["email"];
	$phone=$_POST["phone"];
	$clg=$_POST["clg"];
	$year=$_POST["year"];
	$pwd=randomPassword();

	$sql = "INSERT INTO USERS (NAME,EMAIL,PHONE,CLG,YEAR,PWD) VALUES ('".$name."','".$email."','".$phone."','".$clg."',".$year.",'".$pwd."');";

	if ($db->query($sql)===TRUE) {
		$err="Registered Successfully!";
        }
    else{
    	header('Location: /pages/login.php?error_code=PWD');
    	exit();
    }
	$db->close();
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
			<a href="/pages/login.php">Login</a>
			<a class="active" href="#">Register</a>
			<a href="">Contact</a><br><br>
			<h2>TechnoVIT Chennai</h2>
		</div>
	</div>
	<div class="homebody">
		<div class="col-md-4">

		</div>
		<div class="col-md-4">
			<div class="bodytab">
					<div class="tabcell">
						<div>
							<h2 class="nameg"><?php echo $err; ?></h2>
							<p class="info">Password has been sent to your Registered Mail<br><br>
							<a class="abtn" href="/pages/login.php">Login</a></p>
						</div>
					</div>
				</div>
		</div>
		<div class="col-md-4">
		
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