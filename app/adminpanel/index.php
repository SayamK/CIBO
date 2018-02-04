<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <style type="text/css">
          body {
background:#eee;
font-family:'Montserrat',sans-serif;
}
         h1 {
          margin-top: 100px;
          font-size: 40px;
         }        
         
                input[type="password"] {
	background: #fff;
	border:1px solid rgba(39, 174, 96, 0.3);
	color: #222;
	font-family: 'Montserrat',sans-serif;
	font-weight: 300;
	padding: 20px;
	width: 200px;
	font-size: 15px;
	outline: none;
	border-radius: 2px;
	transition: all .4s ease;
}

input[type="password"]:focus {
	border: 1px solid rgba(39, 174, 96, 0.7);
	transition: all .4s ease;
} 

        input[type="submit"] {
	background: #27ae60;
	border:none;
	color: #eee;
	font-family: 'Montserrat',sans-serif;
	font-weight: 300;
	padding: 20px;
	width: 200px;
	font-size: 15px;
	cursor: pointer;
	outline: none;
	border-radius: 2px;
	transition: all .4s ease;
}

input[type="submit"]:hover {
	background: #228C4F;
	transition: all .4s ease;
} 
</style>
  </head>
  <body>
<center>
<form method="post" action="scripts/validate-key.php">
<h1>Admin Login</h1><br><br>
  <input type="password" name="key" placeholder="Enter Key">
  <input type="submit" name="submit">
</form>
<center>
  </body>
</html>
