<?php
	if (isset($_SESSION)) {
		session_unset();
		session_destroy();
	}
	session_start();
	include realpath($_SERVER["DOCUMENT_ROOT"]).'/functions/config.php';
	include $root.'/functions/db.php';

		$sql="SELECT * FROM USERS;";

		$result = $db->query($sql);

		// if ($result->num_rows > 0) {
	 //        // output data of each row
	 //        while($row = $result->fetch_assoc()) {
	 //            $pass=$row["PWD"];
	 //            $email=$row["EMAIL"];
	 //            $name=$row["NAME"];
	 //        }
	 //    } 
	 //    else {
	 //        echo "0";
	 //    }

	    $db->close();
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
			<a href="http://technovitchennai.com" target="_"><img src="../../assets/img/technovit.png"></a>
			<a href="http://technovitchennai.com/connectivitieee/index.html" target="_"><img src="../../assets/img/connectivitiee.png"></a>
		</div>
		
	</div>
	<div class="homebody">
		<div class="bodytab">
			<div class="tabcell">
				<table class="tdytab">
			        <tr>
			            <th>Name</th>
			            <th>E-Mail</th>
			            <th>Password</th>
			            <th>Phone</th>
			            <th>College</th>
			            <th>Year</th>
			        </tr>
			        <?php
			            if ($result->num_rows > 0) {
			                // output data of each row
			                while($row = $result->fetch_assoc()) {
			                    echo "  <tr>
			                                <td>".$row["NAME"]."</td>
			                                <td>".$row["EMAIL"]."</td>
			                                <td>".$row["PWD"]."</td>
			                                <td>".$row["PHONE"]."</td>
			                                <td>".$row["CLG"]."</td>
			                                <td>".$row["YEAR"]."</td>
			                            </tr>";
			                }
			            } else {
			                echo "0 results";
			            }
			        ?>
			        
				</table>
			</div>
		</div>
	</div>
	<?php include $root.'/partials/footer.php'; ?>
</body>
</html>