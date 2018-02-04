<?php
	$username = "sayaitoe_admin";
	$password = "buzodog115";
	$hostname = "localhost";
	$database = "sayaitoe_cibo";

	ini_set('session.gc_maxlifetime', 3600*3);
	//Connect to DB.
	$dbhandle = mysql_connect($hostname, $username, $password)
  		or die("Unable to connect to MySQL");


  	$selected_db = mysql_select_db($database,$dbhandle)
 		 or die("Could not select examples");

 		  error_reporting(0);

?>
