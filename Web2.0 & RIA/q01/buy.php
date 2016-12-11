<?php
	// echo "lol";
	$file = fopen("data.in", "r");
	$line = fgets($file);
	fclose($file);
	$data = explode(';', $line);
	$rado = (int)explode(':', $data[0])[1];
	$rolex = (int)explode(':', $data[1])[1];
	extract($_POST);
	if (isset($watch))
	{
		$watch = (int)$watch;
		if ($watch == 0)
			$rado -= 1;
		elseif ($watch == 1)
			$rolex -= 1;
		$line = 'Rado:' . $rado . ';' . 'Rolex:' . $rolex;
		$file = fopen('data.in', 'w');
		echo $line;
		fwrite($file, $line);
		fclose($file);
	}
?>
