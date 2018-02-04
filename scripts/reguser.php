<?php 
session_start();
require_once('../app/dbconnect.php');
if (isset($_POST['submit'])) {

	$name = mysql_real_escape_string($_POST['name']);
	$email = mysql_real_escape_string($_POST['email']);
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
        $address = mysql_real_escape_string($_POST['address']);
        $city = mysql_real_escape_string($_POST['city']);
        $landmark = mysql_real_escape_string($_POST['landmark']);
	

 if(mysql_query("INSERT INTO members(name,email,username,password,address,city,landmark) VALUES('$name','$email','$username','$password','$address','$city','$landmark')"))
 {
   ?>
    <script type="text/javascript">window.open("../login.php","_self")</script>
   <?php
 }
 else
 {
echo "error " . mysql_error();  
 }
}

 ?>