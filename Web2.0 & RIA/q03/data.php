<?php
	header("Content-type: application/json");
	$data = array();

	$data['instruction'] = "<h3>How to use this site:</h3>
<p>You need to have a mouse or a keyboard in order to use this site. A pair of eyes is also appreciated. Try to keep looking at the screen. Do not get distracted by the mundane stuff in life.</p>";

	$data['links'] = "<a href='google.com'>Google</a>
<a href='reddit.com'>Reddit</a>
<a href='psarips.com'>PSArips</a>";

	$data['images'] = "<img src='one.jpg' alt='404' style='display: inline' width='300px' height='300px' />
<img src='two.jpg' alt='404' style='display: inline' width='300px' height='300px' />";

	extract($_GET);
	$temp = array("$type" => $data[$type]);
	echo json_encode($temp);
?>