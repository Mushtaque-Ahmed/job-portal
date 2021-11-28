                               
								<?php

					               include "config.php";
									if(!mysqli_select_db($con,'job')){
										echo "db not selected";
									}
									if(isset($_POST["limit"],$_POST["start"])){

									$sql="select * from post INNER JOIN cat_job ON
									post.post_category=cat_job.id order by post_id desc limit ".$_POST["start"].", ".$_POST["limit"]."";
									$result=mysqli_query($con,$sql) or die("query failed");
									
									
								while($row=mysqli_fetch_array($result)){
								?>
								<article class="post">
								<!--<div class="post_date">
									<span class="day">28</span>
									<span class="month">Nov</span>
								</div>-->
								<figure class="post_img">
									<a href="blog-post.php?id=<?php echo $row['post_id']?>">
										<img src="<?php echo $row['post_img']?>"  height="112px" width="112px" alt="image">
									</a>
								</figure>
								<div class="post_content">
									<div class="post_meta">
										<h4>
											<a href="blog-post.php?id=<?php echo $row['post_id']?>"><?php echo $row['title']?></a>
										</h4>
										<div class="metaInfo">
											<span><i class="fa fa-calendar"></i><a href="blog-post.php?id=<?php echo $row['post_id']?>"><?php echo $row['dadline']?></a> </span>
											<span><i class="fa fa-map-marker"></i> <a href="#">Location:<?php echo $row['location']?></a></span>
											<span><i class="fa fa-inr"></i> <a href="blog-post.php?id=<?php echo $row['post_id']?>">Salary:<?php echo $row['salary']?></a></span>
										</div>
									</div>
									<p> <?php echo substr($row['job_details'],0,130) . "...";?></p>
									<a class="" href="blog-post.php?id=<?php echo $row['post_id']?>">Read More</a>
									 <div class="text-center"><a href="<?php echo $row['apply']?>" class="btn btn-default"><b>Apply<b></a></div>
								</div>
							</article>
							<?php
										}
									}
									
								?>
							