<?php
   include "config.php";
   if(!mysqli_select_db($con,'job')){
	   echo "db not selected";
   }
   $title_id=$_GET['id'];
   $sql=" DELETE FROM post WHERE post_id='$title_id'";
   $result=mysqli_query($con,$sql) or die("delete query failed");
   if($result){
	   $_SESSION['status']="Successfully Deleted"; 
                $_SESSION['status_code']="success";
   
   header ("location:adminpanel.php");
   }
   mysqli_close($con);
?>