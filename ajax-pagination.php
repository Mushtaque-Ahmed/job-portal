                             <?php
                              include "config.php";
							   if(!mysqli_select_db($con,'job')){
									 echo "db not selected";
								 }			
                                  $limit_per_page=3;
                                 $page="";
                              if(isset($_POST['page_no'])){
								  $page=$_POST['page_no'];
							  }else{
								  $page=1;
							  }		
                                $ofset=($page - 1)* $limit_per_page;							  
                                   $q="select * from post limit $ofset,$limit_per_page";
                                $result=mysqli_query($con,$q) or die ("query failed");
								$output="";
                                 if(mysqli_num_rows($result)>0){
						    <table class='table table-striped table-hover'>
                            <thead>
                            <tr>
                                <th>SL No.</th>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>';
                  	 
								while ($row=mysqli_fetch_assoc($result)){
                               $output.='
								 <tbody>
								<tr>
								<td> '.$row['post_id'].'</td>
                                <td>'.$row['title'].'</td>
                                <td>'. $row['dadline'].'</td>
                                <td class="edit"><a href="update-post.php?id='.$row['post_id'].' "<i class='fa fa-edit'></i></a></td>
                                <td class="delete"><a href="delete-post.php?id='.$row['post_id'].'"><i class='fa fa-trash-o'></i></a></td>
                               </tr>
							
								</tbody>';
								 }

                        $output.="</table>";
                  $sql_total="select * from post";
				  $records=mysqli_query($con,$sql_total);
				  $total_record=mysqli_num_rows($records);
				  $total_pages=ceil($total_record/$limit_per_page);
				  
				 
					$output.=' <div id="pagination">';
			
					   for($i=1; $i<=$total_pages;$i++){
							$output.='<a  class='active' id='.$i.' >'.$i.'</a>';
					   }	
						
						$output.='</div>';
				  
						echo $output;
								
					 }else{
						 echo "no reord found";
					 }
?>