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
	<title>Debug The Duino</title>
	<?php include $root.'/partials/head.php'; ?>
</head>
<body>

	<div class="bghead"></div>
	<div class="homeheader">
		<h1 class="tit">DEBUG THE DUINO</h1>
		<div class="imgl">
			<a href="http://technovitchennai.com" target="_"><img src="assets/img/technovit.png"></a>
			<a href="http://technovitchennai.com/connectivitieee/index.html" target="_"><img src="assets/img/connectivitiee.png"></a>
		</div>
		<div class="topnav">
			<a class="active" href=#>Home</a>
			<a href="pages/login.php">Login</a>
			<a href="pages/register.php">Register</a>
			<a href="pages/contact.php">Contact</a><br><br>
			<h2></h2>
		</div>
	</div>
	<div class="homebody1">
		<div class="col-md-4 col-sm-12 col-xs-12">
			<div class="logos">
				<p>An online event that catapults you to the world of <strong>Arduino!</strong></p>
			</div>
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12">
			
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12" style="height: 400px;">
			<div class="bodytab">
				<div class="tabcell" style="height: 400px;">
				
				<div class="reg" >
					<a id="cursor" href="pages/register.php">Register<strong style="font-size: 20px;"> for FREE</strong></a>
				</div><br><br>
				<div class="reg" >
					<a href="pages/login.php">Login</a>
				</div><br><br>
					<h4 style="color: #fff;" id="ctd"></h4>
				</div>
			</div>
		</div>
		<div class="col-md-8 col-sm-12 col-xs-12">
			<div class="logoc">
				<p><strong style="font-size: 40px;">What’s it about</strong><br><br>
					Beat the logic, Crack the algorithm and find your way through the enormous sea of sensors by debugging complex programs and win exciting prizes. And that too for  free!<br><br>

					Debug the Duino is a FREE online event hosted by connectiviteee as part  of VIT Chennai’s all India Tech Fest  “TechnoVIT  2k17“.The event tests the participants on the various skills of the participants on debugging,testing ,sensor know-how,coding etc.</p>
			</div>
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
			<div class="logoc">
				<br>
				<div class="regn" >
						<a href="pages/rndamock.php">Round A Mock Test</a>
				</div><br>
			</div>
			<div class="logoc">
				<p><strong style="font-size: 40px;">Why Arduino?</strong><br><br>
					This single powerhouse has inspired a many-DIY Makers, Students, Hobbyists, Enthusiasts, College students, Part-timers, Oldies etc. to do great things with the single tiny board offering great flexibility in code. It is, keeping in mind the popularity and the widespread acceptance of the platform, that made us take Arduino programming to our hearts.</p>
			</div>
			<div class="logoc">
				<p><strong style="font-size: 40px;">Well what is this Arduino platform?</strong><br><br>
					Arduino is an open source computer hardware and software , project, and user community that designs and manufactures microcontrollers for building digital devices and interactive objects that can sense and control objects in the physical world. Arduino boards are available commercially in preassembled form, or as do-it-yourself kits.</p>
			</div>
			
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12">
			<div class="scroller_anchor">
				
			</div>
			<div class="scroller" id="rot">
				<img  src="assets/img/arduino.png">
			</div>
			
		</div>
	</div>

	<?php include $root.'/partials/footer.php'; ?>

<script type="text/javascript">
	var x;

	function changecolors() {
	    x = 1;
	    setInterval(change, 750);
	}

	function change() {
	    if (x === 1) {
	        color = "#00979C";
	        tcolor = "white";
	        x = 2;
	    } else {
	        color = "white";
	        tcolor = "#00979C";
	        x = 1;
	    }

	    document.getElementById('cursor').style.background = color;
	    document.getElementById('cursor').style.color = tcolor;
	}
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
	var countDownDate = new Date("Sep 11, 2017 09:00:00").getTime();

	var xinter = setInterval(function() {

	  var now = new Date().getTime();

	  var distance = countDownDate - now;

	  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

	  document.getElementById("ctd").innerHTML = days + "d " + hours + "h "
	  + minutes + "m " + seconds + "s till Round A";

	  if (distance < 0) {
	    clearInterval(xinter);
	    document.getElementById("ctd").innerHTML = "Round A is Open!";
	    document.getElementById("rnda").style.visibility = "visible";
	  }
	}, 1000);
window.onload = changecolors;
</script>

</body>
</html>