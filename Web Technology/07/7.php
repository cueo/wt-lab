<?php
	ob_start();
	$fh = fopen('file.txt', 'r');
	$line = fgets($fh);
	$cookie = explode(':', $line);
	if(!isset($_COOKIE['color']))
	{
		setcookie('color', $cookie[0], time() + 3600);
		setcookie('font', $cookie[1], time() + 3600);
	}
	$cookie_color = $_COOKIE['color'];
	$cookie_font = $_COOKIE['font'];
	echo "<h2 style='color:$cookie_color; font:$cookie_font'>Hey, lol. Fuck you.</h2>";
	setcookie('color', $cookie[0], -1);
	setcookie('font', $cookie[1], -1);
	ob_flush();
?>