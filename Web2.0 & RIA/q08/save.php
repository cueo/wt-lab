<?php
	// echo "lol";
	extract($_POST);
	$file = fopen('chat.txt', 'a');
	fwrite($file, "<strong>$user</strong>" . ': ' . $msg . "\n");
?>