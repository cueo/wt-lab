<?php
	$file = fopen('book.txt', 'r');
	extract($_GET);
	while ($line = fgets($file))
	{
		$data = explode(';', $line);
		if ($isbn == $data[0])
			echo $data[1];
	}
	fclose($file);
?>