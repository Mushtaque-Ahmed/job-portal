  <?php
        include "config.php";
		if(!mysqli_select_db($con,'job')){
		   echo "db not selected";
		}
		
		    if(isset($_POST["query"]))
			{
				$output='';
				$query="select * from post where title like '%".$_POST["query"]."%'";
				$result=mysqli_query($con,$query);
				$output='<ul class="list-unstyled">';
				if(mysqli_num_rows($result)>0)
				{
				   while($row=mysqli_fetch_array($result))
			    	   {
						    $output.=' <div id="Recent" class="tab-pane fade">
                                      <ul class="recent_tab_list">
                                            <li>
                                                <span><a href="blog-post.php?id='.$row['post_id'].'"><img alt="" src="images/content/recentpost.png"></a></span>
                                                <a href="blog-post.php?id='.$row['post_id'].'?>"><'. $row['title'].'</a>
                                                <i>'.$row['dadline'].'</i>
                                            </li>
											</ul>';
                         }					
				}else{
					$output.='<li>sorry record are not able</li>';
				}
				$output.='</ul>';
				echo $output;
			}
			?>
			
			