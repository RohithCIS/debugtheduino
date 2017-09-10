<?php
	
	$error_message="";

	if (isset($_GET['error_code'])) {
		switch ($_GET['error_code']) {
			case 'EMAIL':
				# code...
				$error_message = "Incorrect E-Mail";
				break;

			case 'PWD':
				$error_message = "Incorrect E-mail/Password";
				break;

			case 'LGN':
				$error_message = "Login Properly";
				break;

			case 'SQL':
				$error_message = "Database Error. Please Register Again! Sorry for the Incovenience.";
				break;

			case 'CHE':
				$error_message = "You weren't supposed to Refresh!";
				break;
			
			default:
				$error_message = $_GET['error_code'];
				break;
		}
	}

?>