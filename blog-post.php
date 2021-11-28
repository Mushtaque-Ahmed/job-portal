<?php
  session_start();
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Assam job See</title>
	<meta name="description" content="">
	
	<!-- CSS FILES -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">
    <link rel="stylesheet" type="text/css" href="css/switcher.css" media="screen" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="rainy-container">
    <img id="background" alt="background" class="background" src="" style="width:100%;"/>
</div>
<!--Start Header-->
<div id="top-fix">
    <!--Start Header-->
    <header id="header" class="container">
        <div class="row">
            <div class="hidden-xs col-sm-7 top-info">
                <span><i class="fa fa-phone"></i>Phone: (123) 456-7890</span>
                <span><i class="fa fa-envelope"></i>Email: mail@example.com</span>
            </div>
            <div class="col-sm-5 top-info clearfix">
                <ul>
                    <li><a class="my-facebook" href=""><i class="fa fa-facebook"></i></a></li>
                    <li><a class="my-tweet" href=""><i class="fa fa-twitter"></i></a></li>
                    <li><a class="my-pint" href=""><i class="fa fa-pinterest"></i></a></li>
                    <li><a class="my-rss" href=""><i class="fa fa-rss"></i></a></li>
                    <li><a class="my-skype" href=""><i class="fa fa-skype"></i></a></li>
                    <li><a class="my-google" href=""><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <!-- Logo / Mobile Menu -->
            <div id="logo-bar" class="col-sm-12 ">
                <div id="logo">
                    <h1><a href="index.php.php"><img src="images/logo3.png" alt="Rainy" /></a></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Navigation
            ================================================== -->
            <div class="navbar navbar-default navbar-static-top" role="navigation">
                <!--<div class="navbar navbar-default navbar-static-top" role="navigation">-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a>
                            <!--<ul class="dropdown-menu">
                                <li><a href="index.php_2.html">Home 2</a></li>
                                <li><a href="index.php_3.html">Home 3</a></li>
                                <li><a href="index.php_4.html">Home 4</a></li>
                                <li><a href="index.php_5.html">Home 5</a></li>
                            </ul>-->
                        </li>

                        <!--<li><a href="#">Shortcodes</a>
                            <ul class="dropdown-menu">
                                <li><a href="elements.html">Elements</a></li>
                                <li><a href="columns.html">Columns</a></li>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                <li><a href="icons.html">Icons</a></li>
                            </ul>
                        </li>-->

                        <li><a href="#">Pages</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="about.php">About</a>
                                    <!--<ul class="dropdown-menu">
                                        <li><a href="about.html">About Us 1</a></li>
                                        <li><a href="about-2.html">About Us 2</a></li>
                                    </ul>-->
                                </li>
                                <!--<li><a href="services.php">Services</a></li>
                                <li><a href="faq.php">FAQ</a></li>-->
                                <!--<li><a href="sidebar-right.html">Right Sidebar</a></li>
                                <li><a href="sidebar-left.html">Left Sidebar</a></li>
                                <li><a href="404-page.html">404 Page</a></li>-->
                            </ul>
                        </li>

                        <!--<li><a href="#">Portfolio</a>
                            <ul class="dropdown-menu">
                                <li><a href="portfolio_1.html">Portfolio 1</a></li>
                                <li><a href="portfolio_2.html">Portfolio 2</a></li>
                                <li><a href="portfolio_3.html">Portfolio 3</a></li>
                                <li><a href="portfolio_4.html">Portfolio 4</a></li>
                                <li>
                                    <a href="portfolio_single.html">Portfolio Single</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio_single.html">Portfolio Single 1</a></li>
                                        <li><a href="portfolio_single_2.html">Portfolio Single 2</a></li>
                                        <li><a href="portfolio_single_3.html">Portfolio Single 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>-->

                        <li class="active"><a href="#">Blog</a>
                            <ul class="dropdown-menu">
                                <!--<li><a href="blog-large-image.html">Large Image</a></li>
                                <li><a href="blog-medium-image.html">Medium Image</a></li>-->
                                <li class="active"><a href="blog-post.php">All Job</a></li>
                            </ul>
                        </li>

                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <!--</div>-->
            </div>
        </div>
        <!-- Container / End -->
    </header>
    <section class="page_head">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>Blog Post</h2>
                    <nav id="breadcrumbs">
                        <ul>
                            <li>You are here:</li>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="index.php">Blog</a></li>
                            <li>Blog Post</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</div>
<!--start wrapper-->
	<section class="wrapper">
		<section class="content blog">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
						<div class="blog_single">
						<?php
					               include "config.php";
									if(!mysqli_select_db($con,'job')){
										echo "db not selected";
									}
									$limit=3;
					               if(isset($_GET['page'])){
						             $page=$_GET['page'];
					                    }else{
						               $page=1;
					                   }
                                       $offset=($page - 1)* $limit;
									      
		                                   if(isset($_GET['id'])){
											   $cat=$_GET['id'];
										   $sql="select * from post where post_id='$cat' order by post_id desc limit {$offset},{$limit}";
										   }else{
										   $sql="select * from post where post_category order by post_id desc limit {$offset},{$limit}";
										   }			   
									$result=mysqli_query($con,$sql) or die("1st query failes:".mysqli_error($con));
									if(mysqli_num_rows($result)>0){	
										while($row=mysqli_fetch_assoc($result)){
								?>
							<article class="post">
								<figure class="post_img">
									<a href="#">
										<img src="images/blog/blog_1.png" alt="blog post">
									</a>
								</figure>
								<div class="post_date">
									<!--<span class="day">28</span>
									<span class="month">Nov</span>-->
								</div>
								<div class="post_content">
									<div class="post_meta">
										<h2>
											<a href="blog-post.php?id=<?php echo $row['post_id']?>"><?php echo $row['title']?></a>
										</h2>
										<div class="metaInfo">
											<span><i class="fa fa-calendar"></i> <a href="blog-post.php?id=<?php echo $row['post_id']?>"><?php echo $row['dadline']?></a> </span>
											<span><i class="fa fa-calendar"></i> Last Date:<a href="blog-post.php?id=<?php echo $row['post_id']?>"><?php echo $row['dadline']?></a> </span>
											<span><i class="fa fa-map-marker"></i> <a href="blog-post.php?id=<?php echo $row['post_id']?>">Location:<?php echo $row['location']?></a>, <a href="#">News</a> </span>
											<span><i class="fa fa-inr"></i> <a href="blog-post.php?id=<?php echo $row['post_id']?>">Salary:<?php echo $row['salary']?></a></span>
										</div>
									</div>
									
									
									<p><?php echo $row['job_details']?></p>
								</div>
								    <div class="text-center"><a href="<?php echo $row['apply']?>" class="btn btn-default"><b>Apply<b></a></div>
								<ul class="shares">
									<li class="shareslabel"><h3>Share</h3></li>
									<li><a class="twitter" href="#" data-placement="bottom" data-toggle="tooltip" title="Twitter"></a></li>
									<li><a class="facebook" href="#" data-placement="bottom" data-toggle="tooltip" title="Facebook"></a></li>
									<li><a class="gplus" href="#" data-placement="bottom" data-toggle="tooltip" title="Google Plus"></a></li>
									<li><a class="pinterest" href="#" data-placement="bottom" data-toggle="tooltip" title="Pinterest"></a></li>
									<li><a class="yahoo" href="#" data-placement="bottom" data-toggle="tooltip" title="Yahoo"></a></li>
									<li><a class="linkedin" href="#" data-placement="bottom" data-toggle="tooltip" title="LinkedIn"></a></li>
								</ul>
							</article>
							<?php
								}
									}
								 if(isset($_GET['id'])){
								   $cat=$_GET['id'];
							$sql2="select * from cat_job where cat_post='$cat'";
							$result2=mysqli_query($con,$sql2) or die("2nd query failes:".mysqli_error($con));
							 $total_row=mysqli_fetch_assoc($result2);
							 if(mysqli_num_rows($result2)>0){
							  $total_records=$total_row['cat_post'];
							 
							  $total_page=ceil($total_records/$limit);
							  echo ' <ul class="pagination justify-content-center">';
							  if($page>1){
								  echo'<li class="page-item"><a class="page-link" href="blog-post.php?id='. $cat.' &page='.($page - 1).' ">previous</a></li>';
							  }
							  for($i=1; $i<= $total_page; $i++){
								  if($i==$page){
									  $active="active";
								  }else{
									  $active="";
								  }
							  echo'<li class="page-item '.$active.'"><a class="page-link" href="blog-post.php?id='.$cat.' &page='.$i.' ">'.$i.'</a></li>';
							  }
							  if($total_page > $page){
								  echo'<li class="page-item"><a class="page-link" href="blog-post.php?id='. $cat.' &page='.($page + 1).' ">next</a></li>';
							  }
							  echo'</ul>';
						        }		
                               }else{
								   $sql2="select * from post";
							    								 
						  $result2=mysqli_query($con,$sql2)or die("3rd query failes:".mysqli_error($con));
						   
						  if(mysqli_num_rows($result2)>0){
							  $total_records=mysqli_num_rows($result2);
							 
							  $total_page=ceil($total_records/$limit);
							  echo ' <ul class="pagination justify-content-center">';
							  if($page>1){
								  echo'<li class="page-item"><a class="page-link" href="blog-post.php?page='.($page - 1).'">previous</a></li>';
							  }
							  for($i=1; $i<= $total_page; $i++){
								  if($i==$page){
									  $active="active";
								  }else{
									  $active="";
								  }
							  echo'<li class="page-item '.$active.'"><a class="page-link" href="blog-post.php?page='.$i.'">'.$i.'</a></li>';
							  }
							  if($total_page > $page){
								  echo'<li class="page-item"><a class="page-link" href="blog-post.php?page='.($page + 1).'">next</a></li>';
							  }
							  echo'</ul>';
						        }
							   }								
                            ?>
							<!--<div class="about_author">
								<div class="author_desc">
									<img src="images/blog/author.png" alt="about author">
									<ul class="author_social">
										<li><a class="fb" href="#." data-placement="top" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twtr" href="#." data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
										<li><a class="skype" href="#." data-placement="top" data-toggle="tooltip" title="Skype"><i class="fa fa-skype"></i></a></li>
									</ul>
								</div>
								<div class="author_bio">
									<h3 class="author_name"><a href="#">Jhon Doe</a></h3>
									<h5>CEO at <a href="#">Themeforest</a></h5>
									<p class="author_det">
										Lorem ipsum dolor sit amet, consectetur adip, sed do eiusmod tempor incididunt  ut aut reiciendise voluptat maiores alias consequaturs aut perferendis doloribus omnis saperet docendi nec, eos ea alii molestiae aliquand.
									</p>
								</div>
							</div>-->
						</div>
							
						<!--News Comments-->
                        <!--<div class="news_comments">
                            <div class="dividerHeading">
                                <h4><span>Comments (6)</span></h4>
                            </div>

                            <div id="comment">
                                <ul id="comment-list">
                                    <li class="comment">
                                        <div class="avatar"><img class="avatar" src="images/blog/avatar_1.png" alt=""></div>
                                        <div class="comment-container">
                                            <h4 class="comment-author"><a href="#">John Smith</a></h4>
                                            <div class="comment-meta"><a class="comment-date link-style1" href="#">February 22, 2014</a><a href="#respond" class="comment-reply-link link-style3">Reply »</a></div>
                                            <div class="comment-body">
                                                <p>Ne omnis saperet docendi nec, eos ea alii molestiae aliquand. Latine fuisset mele, mandamus atrioque eu mea, wi forensib argumentum vim an. Te viderer conceptam sed, mea et delenit fabellas probat.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="comment">
                                        <div class="avatar"><img class="avatar" src="images/blog/avatar_2.png" alt=""></div>
                                        <div class="comment-container">
                                            <h4 class="comment-author"><a href="#">Eva Smith</a></h4>
                                            <div class="comment-meta"><a class="comment-date link-style1" href="#">February 13, 2014</a><a href="#respond" class="comment-reply-link link-style3">Reply »</a></div>
                                            <div class="comment-body">
                                                <p>Vidit nulla errem ea mea. Dolore apeirian insolens mea ut, indoctum consequuntur hasi. No aeque dictas dissenti as tusu, sumo quodsi fuisset mea in. Ea nobis populo interesset cum, ne sit quis elit officiis, min im tempor iracundia sit anet. Facer falli aliquam nec te. In eirmod utamur offendit vis, posidonium instructior sed te.</p>
                                            </div>
                                        </div>
                                        <ul class="children">
                                            <li class="comment">
                                                <div class="avatar"><img class="avatar" src="images/blog/avatar_3.png" alt=""></div>
                                                <div class="comment-container">
                                                    <h4 class="comment-author"><a href="#">Thomas Smith</a></h4>
                                                    <div class="comment-meta"><a class="comment-date link-style1" href="#">February 14, 2014</a><a href="#respond" class="comment-reply-link link-style3">Reply »</a></div>
                                                    <div class="comment-body">
                                                        <p>Labores pertinax theophrastus vim an. Error ditas in sea, per no omnis iisque nonumes. Est an dicam option, ad quis iriure saperet nec, ignota causae inciderint ex vix. Iisque qualisque imp duo eu, pro reque consequ untur. No vero laudem legere pri, error denique vis ne, duo iusto bonorum.</p>
                                                    </div>
                                                </div>
                                                <ul class="children">
                                                    <li class="comment">
                                                        <div class="avatar"><img class="avatar" src="images/blog/avatar_2.png" alt=""></div>
                                                        <div class="comment-container">
                                                            <h4 class="comment-author"><a href="#">Eva Smith</a></h4>
                                                            <div class="comment-meta"><a class="comment-date link-style1" href="#">February 14, 2014</a><a href="#respond" class="comment-reply-link link-style3">Reply »</a></div>
                                                            <div class="comment-body">
                                                                <p>Dico animal vis cu, sed no aliquam appellantur, et exerci eleifend eos. Vixese eros tiloi novum adtam, mazim inimicus maiestatis ad vim. Ex his unum fuisset reformidans, has iriure ornatus atomorum ut, ad tation feugiat impedit per.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="comment">
                                        <div class="avatar"><img class="avatar" src="images/blog/avatar_1.png" alt=""></div>
                                        <div class="comment-container">
                                            <h4 class="comment-author"><a href="#">John Smith</a></h4>
                                            <div class="comment-meta"><a class="comment-date link-style1" href="#">February 07, 2014</a><a href="#respond" class="comment-reply-link link-style3">Reply »</a></div>
                                            <div class="comment-body">
                                                <p>Eu mea harum soleat albucius. At duo nihil saperet inimicus. Ne quo dicit offendit eloquenam. Ut intellegam inn theophras tus mea. Vide ceteros mediocritatem est in, utamur gubergren contentiones.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="comment">
                                        <div class="avatar"><img class="avatar" src="images/blog/avatar_3.png" alt=""></div>
                                        <div class="comment-container">
                                            <h4 class="comment-author"><a href="#">Thomas Smith</a></h4>
                                            <div class="comment-meta"><a class="comment-date link-style1" href="#">February 02, 2014</a><a href="#respond" class="comment-reply-link link-style3">Reply »</a></div>
                                            <div class="comment-body">
                                                <p>Quodsi eirmod salutandi usu ei, ei mazim facete mel. Deleniti interesset at sed, sea ei malis expetenda. Ei efficiat integebat mel, vis alii insoles te. Vis ex bonorum contentiones. An cum possit reformidans. Est at eripuit theophrastus. Scripta imper diet ad nec, everti contentiones id eam, an eum causae officiis.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- /#comments -->
                            <!--<div class="dividerHeading">
                                <h4><span>Leave a comment</span></h4>

                            </div>

                            <div class="row comment_form">
                                <div class="col-sm-4">
                                    <input class="form-control" name="name" type="text" id="name" size="30"  onfocus="if(this.value == 'Name') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Name'; }" value="Name" placeholder="Name" >
                                </div>
                                <div class="col-sm-4">
                                    <input class="form-control" name="email" type="text" id="email" size="30" onfocus="if(this.value == 'E-mail') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'E-mail'; }" value="E-mail" placeholder="E-mail">
                                </div>
                                <div class="col-sm-4">
                                    <input class="form-control" name="url" type="text" id="url" size="30" onfocus="if(this.value == 'Url') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Url'; }" value="Url" placeholder="Url">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p>
                                        <textarea name="comments" class="form-control" rows="6" cols="40" id="comments" onfocus="if(this.value == 'Message') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Message'; }" placeholder="Message">Message</textarea>
                                    </p>
                                </div>
                            </div>
                            <a class="btn btn-default btn-lg" href="#">Post Comment</a>
                        </div>-->
				    </div>
                        
					<!--Sidebar Widget-->
					<div class="col-xs-12 col-md-4 col-lg-4 col-sm-4">
                        <div class="sidebar">
                            <div class="widget widget_search">
                                <div class="site-search-area">
                                    <form action="#" id="site-searchform" method="get">
                                        <div>
                                            <input type="text" placeholder="Enter Search keywords..." id="s" name="s" class="input-text">
                                            <input type="submit" value="Search" id="searchsubmit">
                                        </div>
                                    </form>
                                </div><!-- end site search -->
                            </div>
                            <div class="widget widget_categories">
                                <div class="widget_title">
                                    <h4><span>Categories</span></h4>
                                </div>
									<?php
									 include "config.php";
                              if(isset($_GET['id'])){							  
							  $cat=$_GET['id'];
							  }
						  $sql_cat="select * from cat_job where cat_post>0";
						  $result_cat=mysqli_query($con,$sql_cat);
						  if(mysqli_num_rows($result_cat)>0){
                             				 
							 
							 while($row=mysqli_fetch_assoc($result_cat)){
							?>	  
						 
								<ul class="arrows_list list_style">
                                    <li><a href="category.php?id=<?php echo $row['id']?>"><?php echo $row['cat_name']?>
                                      (<?php echo $row['cat_post']?>)</a></li>
                                    
                                    
                                </ul>
								<?php
							   }
						   }
						   ?>
                            </div>

                            <div class="widget widget_about">
                                <div class="widget_title">
                                    <h4><span></span></h4>
                                </div>
                              <!--  <p>ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
                           </div>
                            <div class="widget widget_tab">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#Popular">Popular</a></li>
                                    <li class=""><a data-toggle="tab" href="#Recent">Recent</a></li>
                                   <!-- <li class="last-tab"><a data-toggle="tab" href="#Recent-Comment"><i class="fa fa-comments-o"></i></a></li>-->
                                </ul>
                                <div class="tab-content clearfix">
                                    <div id="Popular" class="tab-pane fade active in">
                                        											<?php
				      include "config.php";
					  if(!mysqli_select_db($con,'job')){
						  echo "db not selected";
					  }
					   $limit=3;
					     
				      $query="select * from post order by post_id desc limit {$limit}";
					  $result=mysqli_query($con,$query);
					  if(mysqli_num_rows($result)>0){
						  while($row=mysqli_fetch_assoc($result)){
							  ?>
                                        <ul class="recent_tab_list">
                                            <li>
                                                <span><a href="blog-post.php?id=<?php echo $row['post_id']?>"><img alt="image" src="images/content/recentpost.png"></a></span>
                                                <a href="blog-post.php?id=<?php echo $row['post_id']?>"><?php echo $row['title']?></a>
                                                <i><?php echo $row['dadline']?></i>
                                            </li>
                                          
                                        </ul>
										<?php
						  }
					  }
					 				?>
                                    </div>
                                    <div id="Recent" class="tab-pane fade">
										<?php
				      include "config.php";
					  if(!mysqli_select_db($con,'job')){
						  echo "db not selected";
					  }
					   $limit=3;
					     
				      $query="select * from post order by post_id desc limit {$limit}";
					  $result=mysqli_query($con,$query);
					  if(mysqli_num_rows($result)>0){
						  while($row=mysqli_fetch_assoc($result)){
							  ?>
                                        <ul class="recent_tab_list">
                                            <li>
                                                <span><a href="blog-post.php?id=<?php echo $row['post_id']?>"><img alt="" src="images/content/recentpost.png"></a></span>
                                                <a href="blog-post.php?id=<?php echo $row['post_id']?>"><?php echo $row['title']?></a>
                                                <i><?php echo $row['dadline']?></i>
                                            </li>
                                           
                                        </ul><?php
						                      }
					                          }
										?>
                                    </div>
                                        
                                  <!--  <div id="Recent-Comment" class="tab-pane fade">
                                        <ul class="comments">
                                            <li class="comments_list">
                                                <a href="#" class="post-thumbnail"><img width="60" height="60" alt="#" src="images/content/recent_3.png"></a>
                                                <p><strong><a href="#">LaraDut</a> <i>says: </i> </strong> Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada.</p>
                                            </li>
                                            <li class="comments_list">
                                                <a href="#" class="post-thumbnail"><img width="60" height="60" alt="#" src="images/content/recent_1.png"></a>
                                                <p><strong><a href="#">Ronny</a> <i>says: </i> </strong> Tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada.</p>
                                            </li>
                                            <li class="comments_list">
                                                <a href="#" class="post-thumbnail"><img width="60" height="60" alt="#" src="images/content/recent_2.png"></a>
                                                <p><strong><a href="#">Steve</a> <i>says: </i> </strong> Donec convallis, metus nec tempus aliquet, nunc metus adipiscing leo, a lobortis nisi dui ut odio. Nullam ultrices, eros accumsan vulputate faucibus, turpis tortor.</p>
                                            </li>
                                        </ul>
                                    </div>-->
                                </div>
                            </div>
                            <div class="widget widget_tags">
                                <div class="widget_title">
                                    <h4><span>Job Alert</span></h4>
                                </div>
								<div class="widget widget_search">
                                     <div class="site-search-area">
									 <form action="email-proccess.php" method="post" >
                                        <input class="form-control" type="email" name="email" placeholder="Your email here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email here'" required>
                                        <button type="submit" name="submit" class="btn btn-default">subscribe now</button>
                                       </form>
									   </div>
                                       </div>
                               <!-- <ul class="tags">
                                    <li><a href="#"><b>business</b></a></li>
                                    <li><a href="#">corporate</a></li>
                                    <li><a href="#">css3</a></li>
                                    <li><a href="#"><b>html5</b></a></li>
                                    <li><a href="#">javascript</a></li>
                                    <li><a href="#"><b>jquery</b></a></li>
                                    <li><a href="#">multipurpose</a></li>
                                    <li><a href="#"><b>mysql</b></a></li>
                                    <li><a href="#">portfolio</a></li>
                                    <li><a href="#">premium</a></li>
                                    <li><a href="#">responsive</a></li>
                                    <li><a href="#"><b>theme</b></a></li>
                                    <li><a href="#"><b>bestjquery</b></a></li>
                                </ul>-->
                            </div>
                            <!--<div class="widget widget_archives">
                                <div class="widget_title">
                                    <h4><span>Archives</span></h4>
                                </div>
                                <ul class="archives_list list_style">
                                    <li><a href="#">July 2014</a></li>
                                    <li><a href="#">June 2014</a></li>
                                    <li><a href="#">May 2014</a></li>
                                    <li><a href="#">April 2014</a></li>
                                    <li><a href="#">March 2014</a></li>
                                    <li><a href="#">February 2014</a></li>
                                    <li><a href="#">January 2014</a></li>
                                </ul>
                            </div>-->
                        </div>
					</div>
				</div><!--/.row-->
			</div> <!--/.container-->
		</section>
	</section>
	<!--end wrapper-->

	<!--start footer-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="widget_title">
                        <h4><span>About Us</span></h4>

                    </div>
                    <div class="widget_content">
                        <p>We are as a informar regarding various job vacacies like Government,Private and Public sector undertaking Educational Institutions.</p>
                        <ul class="contact-details-alt">
                            <li><i class="fa fa-map-marker"></i> <p><strong>Address</strong>:Guwahati,sixmile ,Assam,India</p></li>
                            <li><i class="fa fa-user"></i> <p><strong>Phone</strong>:(+91) 8472083737</p></li>
                            <li><i class="fa fa-envelope"></i> <p><strong>Email</strong>: <a href="mailto:mushtaqueahmed178@gmail.com">mushtaqueahmed178@gmail.com</a></p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="widget_title">
                        <h4><span>Recent Posts</span></h4>

                    </div>
                    <div class="widget_content">
                        <?php
				      include "config.php";
					  if(!mysqli_select_db($con,'job')){
						  echo "db not selected";
					  }
					   $limit=3;
					     
				      $query="select * from post order by post_id desc limit {$limit}";
					  $result=mysqli_query($con,$query);
					  if(mysqli_num_rows($result)>0){
						  while($row=mysqli_fetch_assoc($result)){
							  ?>
                         <ul class="links">
                            <li><a href="blog-post.php?id=<?php echo $row['post_id']?>"><?php echo $row['title']?><span><?php echo $row['dadline']?></span></a></li>    
                        </ul><?php
						  }
					      }
						?>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="widget_title">
                        <h4><span>Information</span></h4>

                    </div>
					<div class="widget_content">
                         <ul class="links">
                            <li><a href="index.php.php"><strong>AssamJobSee.com</strong></a></li>
                            <li><a href="about.php"><strong>About us</strong></a></li>
                            <li><a href="contact.php"><strong>Contact us</strong></a></li>
                            <li><a href="login.php"><strong>Log-in</strong></a></li>
                        </ul>
                    </div>
                   <!-- <div class="widget_content">
                        <ul class="tweet_list">
                            <li class="tweet_content item">
                                <p class="tweet_link"><a href="#">@yahooobaba </a> Lorem ipsum dolor et, consectetur adipiscing eli</p>
                                <span class="time">29 September  2020</span>
                            </li>
                            <li class="tweet_content item">
                                <p class="tweet_link"><a href="#">@yahooobaba </a> Lorem ipsum dolor et, consectetur adipiscing eli</p>
                                <span class="time">29 September  2020</span>
                            </li>
                            <li class="tweet_content item">
                                <p class="tweet_link"><a href="#">@yahooobaba </a> Lorem ipsum dolor et, consectetur adipiscing eli</p>
                                <span class="time">29 September  2020</span>
                            </li>
                        </ul>
                    </div>-->
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="widget_title">
                        <h4><span>Flickr Gallery</span></h4>

                    </div>
                    <div class="widget_content">
                        <div class="flickr">
                            <ul id="flickrFeed" class="flickr-feed"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	<!--end footer-->
	
	<section class="footer_bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<p class="copyright">&copy; Copyright <script>document.write(new Date().getFullYear());</script> All rights reserved | Powered by  <a href="https://www.yahoobaba.net/">Yahoo Baba</a></p>
				</div>
				
				<div class="col-md-6">
					<div class="footer_social">
						<ul class="footbot_social">
							<li><a class="fb" href="#." data-placement="top" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
							<li><a class="twtr" href="#." data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a class="dribbble" href="#." data-placement="top" data-toggle="tooltip" title="whatsapp"><i class="fa fa-whatsapp"></i></a></li>
							<li><a class="skype" href="#." data-placement="top" data-toggle="tooltip" title="Skype"><i class="fa fa-skype"></i></a></li>
							<li><a class="rss" href="#." data-placement="top" data-toggle="tooltip" title="RSS"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script> <!-- jQuery cookie -->
    <script type="text/javascript" src="js/styleswitch.js"></script> <!-- Style Colors Switcher -->
    <script src="js/jquery.smartmenus.min.js"></script>
    <script src="js/jquery.smartmenus.bootstrap.min.js"></script>
    <script src="js/jquery-scrolltofixed-min.js"></script>
    <script type="text/javascript" src="js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="js/jflickrfeed.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/swipe.js"></script>
    <script type="text/javascript" src="js/rainyday.js"></script>
    <script type="text/javascript" src="js/rainy-script.js"></script>
    <script src="js/main.js"></script>

    <!-- Start Style Switcher -->
    <!--<div class="switcher"></div>-->
    <!-- End Style Switcher -->
	<!-- sweet alert-->
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	  <?php
	       if(isset($_SESSION['status'])&& $_SESSION['status']!=''){
		  ?>
		  <script>
		         swal({
                        title: "<?php echo $_SESSION['status'];?>",
                         //text: "You clicked the button!",
                           icon: "<?php echo $_SESSION['status_code'];?>",
                         button: "ok!",
                      });
		  </script>
		  <?php
		  unset ($_SESSION['status']);
	  }
	  ?>
</body>
</html>