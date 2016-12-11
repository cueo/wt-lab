<?php
	header("Content-type: text/xml");
	$fixit=array(
		"ssl"=>array(
			"verify_peer"=>false,
			"verify_peer_name"=>false,
		),
	);

	$context = stream_context_create($fixit);

	extract($_GET);
	echo file_get_contents("https://www.bing.com/news?q=" . $query . "&format=RSS", false, stream_context_create($fixit));
	// echo file_get_contents("olympics.xml");
?>