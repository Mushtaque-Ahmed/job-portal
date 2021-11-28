
<?php
     session_start();
    include "config.php";
	if(!mysqli_select_db($con,'job')){
		echo "db not selected";
	}

	 $id=mysqli_real_escape_string($con,$_POST['post_id']);
	 $title=mysqli_real_escape_string($con,$_POST['title']);
	 $location=mysqli_real_escape_string($con,$_POST['location']);
	 $salary=mysqli_real_escape_string($con,$_POST['salary']);
	 $details=mysqli_real_escape_string($con,$_POST['details']);
     $dadline=mysqli_real_escape_string($con,$_POST['dadline']);
	 $apply=mysqli_real_escape_string($con,$_POST['job-apply']);
	 $category=mysqli_real_escape_string($con,$_POST['category']);
		 
		 
	$sql="UPDATE  post SET  title='$title', location='$location', salary='$salary',
	   job_details='$details', dadline='$dadline', apply='$apply', post_category='$category'
	   WHERE post_id= '$id'";
	   $result=mysqli_query($con,$sql) or die ("Query failed:".mysqli_error($con));
	   if($result){
		    $_SESSION['status']="Update successfully";
					   $_SESSION['status_code']="success";
		   header ("location: adminpanel.php");
	   }else{
		   $_SESSION['status']="Try again";
					   $_SESSION['status_code']="error";
					   header("location:update-post.php");
	   }
	mysqli_close($con);
?>