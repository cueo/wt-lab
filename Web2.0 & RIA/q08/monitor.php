<?php
	header("Content-type: text/event-stream");

	ob_start();
	ob_flush();
	flush();

	$fname = 'chat.txt';
	$oldtime = filemtime($fname);
	while (true)
	{
		clearstatcache();
		$newtime = filemtime($fname);
		if ($newtime > $oldtime)
		{
			$oldtime = $newtime;

			$msgarr = file($fname);
			$msg = array_pop($msgarr);
			echo "event:chatmsg\n";
			echo "retry:100\n";
			echo "data:$msg\n\n";

			ob_flush();
			flush();
		}
		sleep(2);
	}
?>