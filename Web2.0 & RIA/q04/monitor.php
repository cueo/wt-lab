<?php
	ob_start();

	$file = fopen('seats.in', 'r');
	$oldtime = filemtime('seats.in');
	$line = fgets($file);
	echo $line;
	ob_flush();
	flush();

	while (true)
	{
		clearstatcache();
		$newtime = filemtime('seats.in');
		if ($newtime > $oldtime)
		{
			fseek($file, 0);
			$line = fgets($file);
			echo $line;
			ob_flush();
			flush();
			$oldtime = $newtime;
		}
		sleep(3);
	}
	fclose($file);
?>
