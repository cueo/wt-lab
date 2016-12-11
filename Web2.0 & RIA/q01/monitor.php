<?php
	ob_start();

	$file = fopen('data.in', 'r');
	$oldtime = filemtime('data.in');
	$line = fgets($file);
	echo $line;
	ob_flush();
	flush();

	while (true)
	{
		clearstatcache();
		$newtime = filemtime('data.in');
		if ($newtime > $oldtime)
		{
			fseek($file, 0);
			$line = fgets($file);
			echo $line;
			ob_flush();
			flush();
			$oldtime = $newtime;
		}
		sleep(5);
	}
	fclose($file);
?>
