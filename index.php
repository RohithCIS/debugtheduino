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
		<div class="topnav">
			<a class="active" href=#>Home</a>
			<a href="pages/login.php">Login</a>
			<a href="pages/register.php">Register</a>
			<a href="pages/contact.php">Contact</a><br><br>
			<h2>TechnoVIT Chennai</h2>
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
					<a href="pages/register.php">Register</a>
				</div><br><br>
				<div class="reg" >
					<a href="pages/login.php">Login</a>
				</div>
					
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