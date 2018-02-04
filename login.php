<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="login.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="login.js"></script>

</head>
<body>
<div class="whole">
	<div class="login">
		<div class="container">
			<form action="scripts/checkLogin.php" method="post">
				<input type="text" name="username" id="username" placeholder="Username">
				<input type="password" name="password" id="password" placeholder="Password">
				<input type="submit" name="submit" class="loginBtn" value="Log In">
			</form>
			<p>OR</p>

			<button class="slideSign">Sign Up Now</button>
<?php 
if(isset($_GET['msg'])) {
$msg=$_GET['msg'];
if($msg==1) {
echo "<p>Invalid Username or Password!</p>";
}    
}
 ?>
		</div>
	</div>
	<div class="signup">
		<div class="container">
			<form action="scripts/reguser.php" method="post">
				<input type="text" name="name" placeholder="Name">
				<input type="email" name="email" placeholder="Email">
				<input type="text" name="username" placeholder="Userrname">
				<input type="password" name="password" placeholder="Password">
				<input type="text" name="address" placeholder="Address">
				<input type="text" name="city" placeholder="City">
				<input type="text" name="landmark" placeholder="Landmark">
				<input type="submit" name="submit" value="Sign Up">
			</form>
			<p>OR</p>

			<button  class="slideLog">Have an Account? Log In</button>
		</div>
	</div>
</div>
</body>
</html>
