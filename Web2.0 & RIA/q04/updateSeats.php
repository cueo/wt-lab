<?php
	$file = fopen("seats.in", "r");
	$line = fgets($file);
	fclose($file);
	$data = explode(';', $line);
	
	extract($_POST);
	$index = (int)$college * 2 + (int)$stream;
	echo $index;

	$data[$index] = (int)$data[$index] - 1;
	$str = implode(';', $data);

	$file = fopen("seats.in", "w");
	fwrite($file, $str);
	fclose($file);
?>
