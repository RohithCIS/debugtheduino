<?php
	session_start();
	include realpath($_SERVER["DOCUMENT_ROOT"]).'/functions/config.php';
	include $root.'/functions/db.php';

	$tim=time();
	
	$err="";
	$pass="NULL";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$pwd=$_SESSION["tomato"];
		$email=$_SESSION["email"];

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
	    if($pass=="NULL"){
	    	header('Location: /pages/login.php?error_code=CHE');
	    	exit();
	    }
	    if ($pwd==$pass) {
	    	$err="";
	    }
	    else{
	    	header('Location: /pages/login.php?error_code=PWD');
	    	exit();
	    }

	    
	}
	else{
    	header('Location: /pages/login.php?error_code=LGN');
    	exit();
    }

    $a1="";
    $a2="";
    $a3="";
    $a4="";
    $a5="";
    $a6="";
    $a7="";
    $a8="";
    $a9="";
    $a10="";
    $a11="";
    $a12="";
    $a13="";
    $a14="";
    $a15="";
    $a16="";
    $a17="";
    $a18="";
    $a19="";
    $a20="";
    $a21="";
    $a22="";
    $a23="";
    $a24="";
    $a25="";
    $a26="";
    $a27="";
    $a28="";
    $a29="";
    $a30="";

    $a1 = $_POST['q1'];
	$a2 = $_POST['q2'];
	$a3 = $_POST['q3'];
	$a4 = $_POST['q4'];
	$a5 = $_POST['q5'];
	$a6 = $_POST['q6'];
	$a7 = $_POST['q7'];
	$a8 = $_POST['q8'];
	$a9 = $_POST['q9'];
	$a10 = $_POST['q10'];
	$a11 = $_POST['q11'];
	$a12 = $_POST['q12'];
	$a13 = $_POST['q13'];
	$a14 = $_POST['q14'];
	$a15 = $_POST['q15'];
	$a16 = $_POST['q16'];
	$a17 = $_POST['q17'];
	$a18 = $_POST['q18'];
	$a19 = $_POST['q19'];
	$a20 = $_POST['q20'];
	$a21 = $_POST['q21'];
	$a22 = $_POST['q22'];
	$a23 = $_POST['q23'];
	$a24 = $_POST['q24'];
	$a25 = $_POST['q25'];
	$a26 = $_POST['q26'];
	$a27 = $_POST['q27'];
	$a28 = $_POST['q28'];
	$a29 = $_POST['q29'];
	$a30 = $_POST['q30'];

	$totalCorrect = 0;

	if ($a1 == "D") { $totalCorrect++; }
	if ($a2 == "D") { $totalCorrect++; }
	if ($a3 == "D") { $totalCorrect++; }
	if ($a4 == "C") { $totalCorrect++; }
	if ($a5 == "D") { $totalCorrect++; }
	if ($a6 == "C") { $totalCorrect++; }
	if ($a7 == "C") { $totalCorrect++; }
	if ($a8 == "C") { $totalCorrect++; }
	if ($a9 == "C") { $totalCorrect++; }
	if ($a10 == "B") { $totalCorrect++; }
	if ($a11 == "D") { $totalCorrect++; }
	if ($a12 == "C") { $totalCorrect++; }
	if ($a13 == "B") { $totalCorrect++; }
	if ($a14 == "D") { $totalCorrect++; }
	if ($a15 == "D") { $totalCorrect++; }
	if ($a16 == "C") { $totalCorrect++; }
	if ($a17 == "C") { $totalCorrect++; }
	if ($a18 == "C") { $totalCorrect++; }
	if ($a19 == "C") { $totalCorrect++; }
	if ($a20 == "C") { $totalCorrect++; }
	if ($a21 == "C") { $totalCorrect++; }
	if ($a22 == "C") { $totalCorrect++; }
	if ($a23 == "C") { $totalCorrect++; }
	if ($a24 == "C") { $totalCorrect++; }
	if ($a25 == "C") { $totalCorrect++; }
	if ($a26 == "C") { $totalCorrect++; }
	if ($a27 == "C") { $totalCorrect++; }
	if ($a28 == "C") { $totalCorrect++; }
	if ($a29 == "C") { $totalCorrect++; }
	if ($a30 == "C") { $totalCorrect++; }

	$ttime = $tim - $_POST["st"];

	$sql='UPDATE USERS SET A="YES" WHERE EMAIL LIKE "'.$email.'";';
	$db->query($sql);
	
	$sql='INSERT INTO MARKS (A,ATIME,AMAR,NAME,EMAIL,PWD) VALUES ("YES","'.$ttime.'","'.$totalCorrect.'","'.$name.'","'.$email.'","'.$pwd.'");';
	$db->query($sql);

	$db->close();

	if (isset($_SESSION)) {
		session_unset();
		session_destroy();
	}
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
			<h2>Hi, <?php echo $name; ?> </h2>
		</div>
	</div>
	<div class="homebody">
		<div class="col-md-8 col-sm-12 col-xs-12">
			<div class="logoc">
				<p><strong style="font-size: 40px;">Thanks for Participating!</strong><br>
				You Scored : <strong style="font-size: 40px;"><?php echo $totalCorrect; ?>/15</strong> in Round A<br>
				You will be Informed if you are Selected for Round B after all participants finish Round A.<br>
				Please Log Out.
			</div>
		</div>
	</div>


	<?php include $root.'/partials/footer.php'; ?>
	
</body>
</html>