<?php       
           session_start();
        include "config.php";
		if(!mysqli_select_db($con,'job')){
			echo "db not selected";
		}
		
		if(isset($_POST['submit'])){
			
			  $file=$_FILES['fileToUpload'];
			  
			  $filename=$file['name'];
			  $fileerror=$file['error'];
			  $filetmp=$file['tmp_name'];
			  
			  $fileext=explode ('.', $filename);
			  $filecheck=strtolower(end($fileext));
			  $fileextstored=array('png','jpg','jpeg');
			  
			  
			$title=mysqli_real_escape_string($con,$_POST['title']);
			$location=mysqli_real_escape_string($con,$_POST['location']);
			$salary=mysqli_real_escape_string($con,$_POST['salary']);
			$job_details=mysqli_real_escape_string($con,$_POST['details']);
		    $date=mysqli_real_escape_string($con,$_POST['dadline']);
			$apply=mysqli_real_escape_string($con,$_POST['job-apply']);
			$category=mysqli_real_escape_string($con,$_POST['category']);
			$qualification=mysqli_real_escape_string($con,$_POST['Qualification']);
			$experience=mysqli_real_escape_string($con,$_POST['Experience']);
		  
			
			if(in_array($filecheck,$fileextstored)){
				$destinationfile='upload/'.$filename;
				move_uploaded_file($filetmp,$destinationfile);
				$q ="insert into post(post_img,title,location,salary,qualification,job_details,dadline,apply,post_category)
				values('$destinationfile','$title','$location','$salary','$qualification','$job_details','$date','$apply','$category');";
			   $q.="update cat_job set cat_post=cat_post+1 where id=$category";
			  
                   $result=mysqli_multi_query($con,$q) or die("query failed:".mysqli_error($con));
				   if($result){
					   $_SESSION['status']="successfully submited";
					   $_SESSION['status_code']="success";
				     header('location:adminpanel.php');
			   }
			  
			
			   
			}
		}
?>