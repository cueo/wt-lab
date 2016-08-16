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
		<script> 

			function validate()
			{
				if(document.getElementById("search").value != "") return true;

					return false;
			}
		</script>
	</head>

	<body>

		<form action = "6-getresults.php" method = "GET" onsubmit = "return validate()">

		<label>Search for an item to purchase: <input type = "search" id = "item" name = "item"></label>
		<input type = "submit" value = "Search"/>
		</form>

	<br>
	<a href = "6-viewcart.php">View Cart</a>
	<a href = "6-checkout.php">Checkout</a>
	</body>
</html>

