<?php
	$file = fopen('data.txt', 'r');
	extract($_GET);
	while ($line = fgets($file))
	{
		$modline = trim($line);		// important - do not forget to do this, might throw some error otherwise
		$data = explode(';', $modline);
		if ($data[0] == $usn)
			echo "<script>parent.update('$modline');</script>";
	}
	fclose($file);
?>