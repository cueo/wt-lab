<?php

	require_once('6-functions.php');
	start_session();
	open_db();
	echo "Your current session ID: " . $sid;
	extract($_GET);

?>

<!DOCTYPE html>

<html>

	<head> 
		<title>Shopping Cart Application </title>
	</head>

	<body>
		<br><br>
		<span><b>Search result for '<?php echo $item; ?>':</b> </span><br> 
		<?php 
			$res = '';
			if(isset($item))
			{
				$res = search($item);
			}
			if($res != '')
			{

		?>


			<form action = "6-addtocart.php" method = "GET">

				<input type = "hidden" id = "item" name = "item" value = <?php echo $item; ?> />
				<input type = "submit" value = "Add to cart"/>
		</form>

		<?php
		}
		?>

		<a href = "6-index.php">Back to Search</a>
		<a href = "6-viewcart.php">View Cart</a>
		<a href = "6-checkout.php">Checkout</a>
	</body>
</html>

