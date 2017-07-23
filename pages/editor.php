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
	<title>Editor : Debug the Duino</title>
	<?php include $root.'/partials/head.php'; ?>
</head>
<body>
	<div class="bghead"></div>
	<div class="homeheader">
		<h1 class="tit">DEBUG THE DUINO</h1>
		<div class="topnav">
			<a href="/">Home</a>
			<a href="/pages/contact.php">Contact</a><br><br>
			<h2>TechnoVIT Chennai</h2>
		</div>
	</div>
	<div class="homebody">
		<div class="col-md-12">
			<div class="editr">
				<form class="codesub">
					<pre id="editor">
					function foo(items) {
					    var i;
					    for (i = 0; i &lt; items.length; i++) {
					        alert("Ace Rocks " + items[i]);
					    }
					}
					</pre>
					<button type="submit">Submit Code</button>
				</form>
			</div>
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

	<script src="/editor/src-min-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
	<script>
	    var editor = ace.edit("editor");
	    editor.setTheme("ace/theme/chrome");
	    editor.session.setMode("ace/mode/c_cpp");
	</script>

</body>
</html>