<?php
    if (isset($_SESSION)) {
            session_unset();
            session_destroy();
        }
    session_start();
    include realpath($_SERVER["DOCUMENT_ROOT"]).'/functions/config.php';
    include $root.'/functions/db.php';

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
		
	</div>
	<div class="homebody">
		<div class="bodytab">
			<div class="tabcell">
				<table id="playlist">
				<tr>
					<th>Filename</th>
				</tr>
					<?php
					$directory = $root."/uploads/";
					// $dir = scandir($directory);
					$dir = array_diff(scandir($directory), array('..', '.'));
					    foreach( $dir as $value ) {
					            echo "<tr><td><a href='/functions/download.php?file=".$directory.$value."'>".$value."</a></td></tr>";
					        }
					?>
				</table>
			</div>
		</div>
	</div>

	<?php include $root.'/partials/footer.php'; ?>

</body>
</html>