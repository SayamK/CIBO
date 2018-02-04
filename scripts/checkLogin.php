 <?php
require_once('../app/dbconnect.php');
if (isset($_POST['username']) and isset($_POST['password'])){
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM `members` WHERE username='$username' and password='$password'";

$result = mysql_query($query) or die(mysql_error());

$count = mysql_num_rows($result);

if ($count == 1){
session_start();
$_SESSION['username'] = $username;
?>
<script type="text/javascript">window.open('../app/','_self')</script>
<?php
}

else{
?>
<script type="text/javascript">window.open('../login.php?msg=1','_self')</script>
<?php
}

}

?>
