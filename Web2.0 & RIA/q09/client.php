<?php
	extract($_GET);
	
	// echo $usn . ' ' . $gpa;
	$array = array('usn' => $usn, 'gpa' => $gpa);
	$data = http_build_query($array);

	$header = "Content-type: application/x-www-form-urlencoded";

	$request = array('http' =>
		array(
			'method' => 'PUT',
			'content' => $data,
			'header' => $header
			));

	$context = stream_context_create($request);

	$response = file_get_contents("http://localhost/lab/web-lab/Web2.0%20&%20RIA/q09/update", FALSE, $context);
	echo $response;
?>