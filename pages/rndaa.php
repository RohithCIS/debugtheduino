<?php
	session_start();
	include realpath($_SERVER["DOCUMENT_ROOT"]).'/functions/config.php';
	include $root.'/functions/db.php';
	include $root.'/partials/que.php';

	$st=time();

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

	    $db->close();
	}
	else{
    	header('Location: /pages/login.php?error_code=LGN');
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
				<form action="rndares.php" method="post" id="quiz" class="qform">
					<h1>Warning : Please Do not Press Back or Reload the Page! Safely logout or Finish the test! Not Complying will retain you from participating Further in the Event!</h1><br>
					
					<?php 
					    shuffle($qbase);
					    for ($i=0; $i < 15; $i++) { 
							echo ($i+1).".".$qbase[$i]."<br>";
					    }
					?>
					<input type="hidden" name="st" value="<?php echo $st; ?>">
					<button id="finishtest" type="submit">Finish Test</button>
				</form>
			</div>
		</div>

		<div class="col-md-4 col-sm-12 col-xs-12">
			<div class="timer logoc">
				<h3 style="color: #00979D;" id="ctd"></h3>
			</div>
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

	        $('.timer').css({
	            'position': 'fixed',
	            'top': '200px;',
	            'z-index': '-1'
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

	// function confirmExit()
	// {
	//  alert("You were asked not to REFRESH the page. You can take the test Again from the beginning.");
	//  window.location.href='<?php echo $root; ?>';
	//  return true;
	// }
	// window.onbeforeunload = confirmExit;
	var dt = new Date().getTime();
	var end = dt+3600000;
	var xinter = setInterval(function() {

		var ct = new Date().getTime();
		var distance = end-ct;

	  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

	  document.getElementById("ctd").innerHTML = hours + "h "
	  + minutes + "m " + seconds + "s Remaining";

	  if (distance < 0) {
	    clearInterval(xinter);
	    document.getElementById("finishtest").click();
	  }
	}, 1000);
</script>

</body>
</html>