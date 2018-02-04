<?php
require_once('dbconnect.php');

if($_POST['key'] == "ilovecibo") {
header("location: ../admin.php");
}
else {
header("location: ../index.php");
}
?>