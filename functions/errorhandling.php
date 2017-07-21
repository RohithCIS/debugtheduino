<?php

	if (isset($_GET['error_code'])) {
		switch ($_GET['error_code']) {
			case 'EMAIL':
				# code...
				$error_message = "Incorrect E-Mail";
				break;

			case 'PWD':
				$error_message = "Incorrect E-mail/Password";
				break;

			case 'TEMP':
				$error_message = "Coming soon to your area";
				break;

			case 'INCV':
				$error_message = "Check input values and try again";
				break;
			
			default:
				$error_message = $_GET['error_code'];
				break;
		}
	}

?>