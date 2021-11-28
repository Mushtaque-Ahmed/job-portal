<?php
      session_start();    
	include "config.php";
       if(!mysqli_select_db($con,'job')){
		   echo "db not selected";
	   }
	    if(isset($_POST['submit'])){
	      $name=mysqli_real_escape_string($con,$_POST['name']);
		  $email=mysqli_real_escape_string($con,$_POST['email']);
		  $sub=mysqli_real_escape_string($con,$_POST['subject']);
		  $mass=mysqli_real_escape_string($con,$_POST['message']);
	     $q="select * from contact where addr='$email'";
		 $result=mysqli_query($con,$q) or die("query failed:".mysqli_error($con));
		 $num=mysqli_num_rows($result);
		 if($num==1){

			  $_SESSION['status']="Allready taken your Email,please try another";
		 $_SESSION['status_code']="error";
		 			 header('location:contact.php');
			 
		 }else{ 
		          $sql="insert into contact (name,addr,subj,massage) values('$name','$email','$sub','$mass')";
		             
			        $query=mysqli_query($con,$sql)or die("query failed:".mysqli_error($con));
					if($query){
						
						  $_SESSION['status']="thanks for subscribtions";
						  $SESSION['status_code']="success";
					header ('location:contact.php');
					}
		 }
		} 
?>