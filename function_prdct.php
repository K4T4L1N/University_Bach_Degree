<?php

  include("connect.php");
  include("functions_login.php");
$user_data=check_login($con);


$name = $_POST['name'];
$description = $_POST['description'];
$continent = $_POST['continent'];
$theme = $_POST['theme'];
$color = $_POST['color'];

//Insert Query of SQL
$query = "insert into products(description, name, continent, theme, color) values ('$description', '$name', '$continent', '$theme', '$color')";
$result = mysqli_query($con, $query);  
  header("Location: profile.php");
  die;
 ?>