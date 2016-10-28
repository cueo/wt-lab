<?php 
	ob_start();
	require_once('6-functions.php');

	session_start();
	open_db();

	mysql_query("delete from cart where sid='$sid");


	session_destroy();
	$cookieParams = session_get_cookie_params();
	setcookie(session_name(), '', 0, $cookieParams['path'], $cookieParams['domain'], $cookieParams['secure'], $cookieParams['httponly']);
	$_SESSION = array();

	/* for some reason it doesn't clear the session unless you do this. */

	ob_flush();
	echo "Thanks for shopping!";


?>