      
	  <?php
        include "config.php";
		if(!mysqli_select_db($con,'job')){
		   echo "db not selected";
		}
		
		    if(isset($_POST["query"]))
			{
				$output='';
				$query="select * from post where title like '%".$_POST["query"]."%' or job_details like '%".$_POST["query"]."%'";
				$result=mysqli_query($con,$query);
				$output='<ul class="list-unstyled">';
				if(mysqli_num_rows($result)>0)
				{
				   while($row=mysqli_fetch_array($result))
			    	   {
						     $output.='<article class="post">
							 <div class="post_date">
									<span class="day">28</span>
									<span class="month">Nov</span>
								</div>
								<figure class="post_img">
									<a href="blog-post.php?id='. $row['post_id'].'">
										<img src="images/blog/postpic.png" alt="blog post">
									</a>
								</figure>
								<div class="post_content">
									<div class="post_meta">
										<h4>
											<a href="blog-post.php?id='.$row['post_id'].'">'.$row['title'].'</a>
										</h4>
										<div class="metaInfo">
											<span><i class="fa fa-user"></i> By <a href="blog-post.php?id='. $row['post_id'].'">'.$row['dadline'].'</a> </span>
											<span><i class="fa fa-map-marker"></i> <a href="#">Location:'.$row['location'].'</a></span>
											<span><i class="fa fa-usd"></i> <a href="blog-post.php?id='.$row['post_id'].'">Salary:'.$row['salary'].'</a></span>
										</div>
									</div>
									<p> '.substr($row['job_details'],0,130) .' "...";</p>
									<a class="btn btn-small btn-default" href="blog-post.php?id='.$row['post_id'].'">Read More</a>
								</div>
							</article>';
	  		  }					
				}else{
					$output.='<li class="text-danger" class="text-center">sorry record are not able</li>';
				}
				$output.='</ul>';
				echo $output;
			}
				
		


?>