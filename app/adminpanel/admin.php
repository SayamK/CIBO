<?php 

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>ADMIN PANEL</title>
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

        input[type="submit"],button {
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

input[type="submit"]:hover,button:hover {
	background: #228C4F;
	transition: all .4s ease;
} 
</style>
        <script type="text/javascript">
         function addTeam() {
          window.open('add-dish.php','_self');
         }
function updateScore() {
          window.open('edit-dish.php?ques=1','_self');
         }
function addQuestion() {
          window.open('add-question.php','_self');
         }
        </script>
        <style type="text/css">
         h1 {
          margin-top: 100px;
          font-size: 40px;
         }        
</style>
 </head>
 <body>
<center>
<h1>Admin Panel</h1>
<br><br>
 <button onclick="addTeam()">Add Dish</button>
</center> 
</body>
 </html>