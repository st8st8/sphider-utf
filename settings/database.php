<?php
require "credentials.php";


//	error_reporting (E_ALL);

	
	function MySQLi_conn()
	{
		global $mysql_host, $mysql_user, $mysql_password,$database;
		$mysqli_conn = new mysqli($mysql_host, $mysql_user, $mysql_password,$database);

		if (mysqli_connect_errno()) {
		    printf("Connect failed: %s\n", mysqli_connect_error());
		    die("MySQLi error!");
		}
		$mysqli_conn->query("SET NAMES 'utf8'");
		return $mysqli_conn;
	}

	$mysqli_conn=MySQLi_conn();

?>

