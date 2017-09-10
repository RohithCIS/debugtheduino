<button id="open" class="omenu" onclick="openNav()">&#9776;</button>
	<div id="kiloNav" class="knav">
			<a id="h" href="/" class="active">Home</a>
            <a id="p" href="/pages/login.php">Login</a>
            <a id="a" href="/pages/register.php">Register</a>
            <a id="c" href="/pages/contact.php">Contact</a>
	</div>


	<div class="col-md-12 col-sm-12 col-xs-12 footerc">
		<div class="fcont">
			&copy;2017 Debug the Duino<br>
			connectiVITieee | technoVIT<br>
			VIT University Chennai Campus<br>
			Site Designed by : <a href="https://therohith.com" target="_">Rohith</a>
		</div>
	</div>


<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-106127242-1', 'auto');
  ga('send', 'pageview');

    
var mq = window.matchMedia("(max-width: 720px)");

	function openNav() {
		if (mq.matches) {
		    document.getElementById("kiloNav").style.width = "100%";
		    document.getElementById('open').style.visibility = "hidden";
    	}
	}

</script>
