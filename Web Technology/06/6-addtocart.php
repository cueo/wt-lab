<?php

	require_once('6-functions.php');

	ob_start();
	start_session();
	open_db();
	extract($_GET);

	add_to_cart($item);

	header("Location: 6-index.php");

	ob_flush();
?>
