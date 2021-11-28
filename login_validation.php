<?php
         session_start();
      include "config.php";
	  
	  if(!mysqli_select_db($con,'job')){
		  echo "db not selected";
	  }
	  
          $user=mysqli_real_escape_string($con,$_POST['name']);
		  $pass=mysqli_real_escape_string($con,$_POST['password']);
		  
		   $sql="select * from login where user='$user' && password='$pass'";
		  
		  $result=mysqli_query($con,$sql);
		  $num=mysqli_num_rows($result);
		  
		  if($num==1){
			  $_SESSION['user']=$user;
			  header ("location:adminpanel.php");
		  }else{
			  $_SESSION['status']="sorry! Please enter valid user name & password";
		       $_SESSION['status_code']="error";
			  header ("location:login.php");
		  }




?>