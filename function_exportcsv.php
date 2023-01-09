<?php

  include("connect.php");
  include("functions_login.php");
$user_data=check_login($con);

  if(isset($_POST["Export_usr"])){
     
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data_usrs.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('id', 'username', 'password', 'email'));  
      $query = "SELECT * from users ORDER BY id DESC";  
      $result = mysqli_query($con, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  

  if(isset($_POST["Export_prdcts"])){
     
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data_prdcts.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('user_id', 'description', 'description', 'name', 'continent', 'theme', 'color'));  
      $query1 = "SELECT * from products ORDER BY id DESC";  
      $result = mysqli_query($con, $query1);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);       
 }  

  if(isset($_POST["Export_fdbck"])){
     
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data_feedback.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('comments', 'likes'));  
      $query2 = "SELECT * from products_feedback ORDER BY id DESC";  
      $result = mysqli_query($con, $query2);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output); }

 ?>