<?php
	extract($_GET);
	$file = fopen('movies.txt', 'r');
	$suggestions = '';
	while ($line = fgets($file))
	{
		if (strncasecmp($q, $line, strlen($q)) == 0)
			$suggestions = $suggestions . $line . '<br />';
	}
	echo $suggestions;
?>