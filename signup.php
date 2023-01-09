<?php 
session_start();

	include("connect.php");
  include("functions_login.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		if(!empty($user_name) && !empty($password) && !empty($email))
		{
			echo "<br><p style='color:red; margin: 10px; background-color:black;'>" . "&nbsp;Please enter some valid information!&nbsp;" . "</p>";

		}else
		{
			//save to database
			$user_id = random_num(20);
			$query = "insert into users (id,username,password,email) values ('$id','$username','$password','$email')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="assets/css/loginstyle.css">

<style>
  body{
      background-image: url('assets/css/images/photo_bg.png');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
    }
</style>
</head>
<body>

	<div class="container" id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input placeholder="E-mail" id="email" type="text" name="email"><br>
			<input id="text" type="text" placeholder="Username" name="username"><br>
			<input id="text" type="password" placeholder="Password" name="password"><br>

			<input id="button" type="submit" value="Sign up"><br>

			<a href="login.php" class="button">Click to Login</a><br><br>

		</form>
	</div>
		<a href="index.php" class="button">&larr; HOME</a>


 <script src="assets/js/loginjs.js"></script>
</body>
</html>