<?php
          session_start();
       include "config.php";
	   if(!mysqli_select_db($con,'job')){
		   echo "db not connected";
	   }
  
   if(isset($_POST['submit'])){
    $email= mysqli_real_escape_string($con,$_POST['email']);

	
	$query="select * from email where clint_email='$email'";
      $sql=mysqli_query($con,$query) or die("query failed");
	  $num=mysqli_num_rows($sql);
	  
	  
	 if($num==1){
		 
		 $_SESSION['status']="Email already taken,please try another one";
		 $_SESSION['status_code']="error";
		 header('location:index.php');
	 }else{
			 $q="insert into email (clint_email) values('$email')";
			$result=mysqli_query($con,$q);
			if($result){
                    
             
				
			     $_SESSION['status']="Thank You, for subscribetion your Email"; 
                $_SESSION['status_code']="success";
				
				 header('location:index.php');
			 
		 }
	 } 
	 }
   
?>