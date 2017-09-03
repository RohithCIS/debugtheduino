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
	else{
    	header('Location: /pages/login.php?error_code=PWD');
    	exit();
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
		<div class="topnav">
			<a href="/">Logout</a>
			<br><br>
			<h2>Hi, <?php echo $name; ?> </h2>
		</div>
	</div>
	<div class="homebody">
		<div class="col-md-8 col-sm-12 col-xs-12">
			<div class="logoc">
				<form action="rndares.php" method="post" id="quiz" class="qform">
					<h1>This is a Sample Round A Test</h1>
					<h3>1. What does the following code snippet do?</h3>
					<img src="../../assets/img/dtd/q1.png">
					<div>
					<input type="radio" name="q1" id="q1a" value="A" />
					<label for="q1a">A) Toggle switches</label>
					</div>
					<div>
					<input type="radio" name="q1" id="q1b" value="B" />
					<label for="q1b">B) Toggle LEDs </label>
					</div>
					<div>
					<input type="radio" name="q1" id="q1c" value="C" />
					<label for="q1c">C) Both A&B </label>
					</div>
					<div>
					<input type="radio" name="q1" id="q1d" value="D" />
					<label for="q1d">D) None </label>
					</div>
					<br>
					<h3>2. How long does the following program run?</h3>
					<img src="../../assets/img/dtd/q2.png">
					<div>
					<input type="radio" name="q2" id="q2a" value="A" />
					<label for="q2a">A) 4</label>
					</div>
					<div>
					<input type="radio" name="q2" id="q2b" value="B" />
					<label for="q2b">B) 10000</label>
					</div>
					<div>
					<input type="radio" name="q2" id="q2c" value="C" />
					<label for="q2c">C) Infinite </label>
					</div>
					<div>
					<input type="radio" name="q2" id="q2d" value="D" />
					<label for="q2d">D) Error in Program </label>
					</div>
					<br>
					<h3>3. A gas sensor (3 pin ) is interfaced with Uno R3. What is wrong in the following circuit ?</h3>
					<img src="../../assets/img/dtd/q3.png">
					<div>
					<input type="radio" name="q3" id="q3a" value="A" />
					<label for="q3a">A) There is nothing wrong with the circuit</label>
					</div>
					<div>
					<input type="radio" name="q3" id="q3b" value="B" />
					<label for="q3b">B) The data pin should be connected to the analog pin</label>
					</div>
					<div>
					<input type="radio" name="q3" id="q3c" value="C" />
					<label for="q3c">C) There will be an error if one connects it to a digital pin</label>
					</div>
					<div>
					<input type="radio" name="q3" id="q3d" value="D" />
					<label for="q3d">D) Both 2 & 3 </label>
					</div>
					<input type="hidden" value="<?php echo $name; ?>" name="name">
				    <input type="hidden" value="<?php echo $email; ?>" name="email">
				    <input type="hidden" value="<?php echo $pwd; ?>" name="pwd">
					<button type="submit">Finish Test</button>
				</form>
			</div>
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12">
			<div class="scroller_anchor">
				
			</div>
			<div class="scroller" id="rot">
				<img  src="../../assets/img/arduino.png">
			</div>
			
		</div>
	</div>


	<?php include $root.'/partials/footer.php'; ?>

<script type="text/javascript">
	$(window).scroll(function(e) {

	    var scroller_anchor = $(".scroller_anchor").offset().top;
	    var elem = document.getElementById('rot');

	    if ($(this).scrollTop() >= scroller_anchor) 
	    {    
	    	var deg= ($(this).scrollTop()-scroller_anchor)/5;

	        $('.scroller').css({
	            'position': 'fixed',
	            'top': '0',
	            'z-index': '-2'
	        });

	        elem.style.transform = 'rotate(-' + deg + 'deg)';

	        // $('.scroller_anchor').css('height', '15vh');
	    } 
	    else if ($(this).scrollTop() < scroller_anchor && $('.scroller').css('position') != 'relative') 
	    {    
	        $('.scroller_anchor').css('height', '0vh');

	        $('.scroller').css({
	            'position': 'relative',
	            // 'top': '15vh'
	        });
	    }
	});
</script>

</body>
</html>