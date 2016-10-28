<?php
	
	/*

	things needed: 
		-	db access
		-	show a list of items stored (can clear)
		- 	display search results 
	*/


	$sid = '';
	function start_session()
	{
		global $sid;
		session_start();
		$sid = session_id();

		return $sid;
	}

	function open_db()
	{
		$connect = mysql_connect("127.0.0.1", "root", "root");
		if(!$connect) 
		{
			die("Could not connect to MYSQL");
		}

		$db = mysql_select_db("test");
		if(!$db) 
		{
			die("Could not connect to the database");
		}
	}

	$row = '';
	function search($item)
	{
		global $row;
		$res = mysql_query("select description from item where item = '$item';");
		if(!$res)
		{
			die("Query execution failed");
		}	


		while($row = mysql_fetch_array($res, MYSQL_ASSOC))
		{
			echo $row['description'];
			return $row['description'];
		}
	}


	function add_to_cart($item)
	{
		global $sid;
		$res = mysql_query("insert into cart values ('$sid', '$item');");
		if(!$res)
		{
			die("Query execution failed");
		}
	}

	function get_cart()
	{
		global $sid;
		$res = mysql_query("select * from cart where sid = '$sid';");
		if(!$res)
		{
			die("Query execution failed");
		}

		$i = 1;
		while($row = mysql_fetch_array($res, MYSQL_ASSOC))
		{
			  echo "$i)  " . $row['item'] . "______";
			  $i++;
		}
	}

	function end_session()
	{
		session_unset();
		session_destroy();
	}

?>