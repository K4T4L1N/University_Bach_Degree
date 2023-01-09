<?php 

session_start();

	include("connect.php");
  include("functions_login.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where username = '$username' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['id'] = $user_data['id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div><br>

			<input id="text" type="text" placeholder="username" name="username"><br>
			<input id="text1" type="password" placeholder="Password" name="password"><br>

			<input id="button" type="submit" value="Login"><br>

			<a href="signup.php" class="button">Click to Signup</a>
		</form>
	</div>
	<a href="index.php" class="button">&larr; HOME</a>


 <script src="assets/js/loginjs.js"></script>
</body>
</html>