<button id="open" class="omenu" onclick="openNav()">&#9776;</button>
	<div id="kiloNav" class="knav">
			<a id="h" href="/" class="active">Home</a>
            <a id="p" href="/pages/login.php">Login</a>
            <a id="a" href="/pages/register.php">Register</a>
            <a id="c" href="/pages/contact.php">Contact</a>
	</div>


	<div class="footerc">
		<div class="fcont">
			&copy;2017 Debug the Duino<br>
			TechnoVIT<br>
			VIT University Chennai Campus<br>
			Site Designed by : <a href="https://therohith.com">Rohith</a>
		</div>
	</div>


<script>
    
var mq = window.matchMedia("(max-width: 720px)");

	function openNav() {
		if (mq.matches) {
		    document.getElementById("kiloNav").style.width = "100%";
		    document.getElementById('open').style.visibility = "hidden";
    	}
	}

</script>
