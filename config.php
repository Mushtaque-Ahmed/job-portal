<?php
     $host="localhost";
	 $user="root";
	 $pass="";
	 $database="job";
	  
	  $con=mysqli_connect($host,$user,$pass,$database);
	  
	 if(!$con){
		 die("database not connected:".mysqli_connect_error());
	 }
?>