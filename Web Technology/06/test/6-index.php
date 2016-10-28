<?php
	require_once('6-functions.php');
	$sid = start_session();
	open_db();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="6-results.php" method="POST">
		<input type="search" name="item" />
		<input type="submit" value="Search" />
	</form>
	<a href="6-viewcart.php">View cart</a>
	<a href="6-checkout.php">Checkout</a>
</body>
</html>
