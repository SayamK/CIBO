<?php
if (isset($_GET['msg'])) {
  $msg = $_GET['msg'];
  if ($msg==1) {
    echo "Dish Added Successfully!";
  }
  elseif ($msg==2) {
    echo "Error";
  }
}
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Add Dish</title>
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

                input[type="text"] {
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

input[type="text"]:focus {
	border: 1px solid rgba(39, 174, 96, 0.7);
	transition: all .4s ease;
} 

                input[type="number"] {
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

input[type="number"]:focus {
	border: 1px solid rgba(39, 174, 96, 0.7);
	transition: all .4s ease;
}

                input[type="file"] {
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

input[type="file"]:focus {
	border: 1px solid rgba(39, 174, 96, 0.7);
	transition: all .4s ease;
}

                select {
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

select:focus {
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
<h1>Add Dish</h1>
    <form action="scripts/add-dish-func.php" method="post" enctype="multipart/form-data">
       <input type="text" name="name" placeholder="Name"><br><br>
       <input type="text" name="details" placeholder="Details (10 Words)"><br><br>
       <input type="number" name="price" placeholder="Price"><br><br>
       <select name="type">
         <option>Veg</option>
         <option>Non-Veg</option>
       </select><br><br>
       <input type="file" name="image"><br><br>
       <select name="category">
         <option>Mughlai</option>
         <option>Continental</option>
         <option>Italian</option>
         <option>Chinese</option>
         <option>Beverages</option>
         <option>Deserts</option>
         <option>Others</option>
       </select><br><br>
       <input type="submit" name="submit">
    </form>
</center>
   </body>
 </html>
