<?php
	header("Content-type: text/xml");
	$fixit=array(
		"ssl"=>array(
			"verify_peer"=>false,
			"verify_peer_name"=>false,
		),
	);

	$context = stream_context_create($fixit);

	echo file_get_contents("https://news.google.com/news/feeds?output=rss", false, stream_context_create($fixit));
	// echo file_get_contents("olympics.xml");
?>