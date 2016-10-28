<?php

	require_once('6-functions.php');
	start_session();
	echo "Your current session ID: " . $sid;
	open_db();

?>

<!DOCTYPE html>

<html>

	<head> 
		<title>Shopping Cart Application </title>
		
	</head>

	<body>
	<br><br>
		<?php 

			get_cart();

		?>

		<br>
		<a href = "6-index.php">Back to Search</a>
		<a href = "6-checkout.php">Checkout</a>
	</body>
</html>
