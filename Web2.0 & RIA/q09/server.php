<?php
	header("Content-type: application/json");
	$method = $_SERVER['REQUEST_METHOD'];
	
	if ($method == 'GET')
	{
		extract($_GET);
		$data = array();
		if ($usn == '91')
		{
			$data['usn'] = 91;
			$data['name'] = 'Mohit Mayank';
			$data['dept'] = 'CSE';
			$data['gpa'] = 9.4;
		}
		else
		{
			$data['error'] = 'no data found';
		}
		echo json_encode($data);
	}

	elseif ($method == 'PUT')
	{
		$str = file_get_contents('php://input');
		$input = explode('&', $str);
		$data = array();
		$data['usn'] = explode('=', $input[0])[1];
		$data['gpa'] = explode('=', $input[1])[1];

		$file = fopen('data.txt', 'a');
		fwrite($file, implode(';', $data) . "\n");
		fclose($file);

		echo json_encode($data);
	}
?>