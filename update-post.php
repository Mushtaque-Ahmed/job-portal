<?php session_start();
  if(!isset($_SESSION['user'])){
			   header ("location:index.php");
		   }
?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Assam Job See</title>
	<meta name="description" content="">
	
	<!-- CSS FILES -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">
    <link rel="stylesheet" type="text/css" href="css/switcher.css" media="screen" />

          <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
       <script src="ckeditor5/ckeditor.js"></script>
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
                <span><i class="fa fa-phone"></i>Phone: 8472083737</span>
                <span><i class="fa fa-envelope"></i>Email: mushtaqueahmed178@gmail.com</span>
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
                    <h1><a href="index.php"><img src="images/logo3.png" alt="Rainy" /></a></h1>
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
                           <!-- <ul class="dropdown-menu">
                                <li><a href="index_2.html">Home 2</a></li>
                                <li><a href="index_3.html">Home 3</a></li>
                                <li><a href="index_4.html">Home 4</a></li>
                                <li><a href="index_5.html">Home 5</a></li>
                            </ul>-->
                        </li>

                       <!-- <li><a href="#">Shortcodes</a>
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
                                <li><a href="services.php">Services</a></li>
                                <li><a href="faq.php">FAQ</a></li>
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

                        <li><a href="#">Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-large-image.php">Large Image</a></li>
                                <li><a href="adminpanel.php">Admin-panel</a></li>
                                <li><a href="blog-post.php">Single Post</a></li>
                            </ul>
                        </li>

                        <li class="active"><a href="contact.php">Contact</a></li>
						
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
                    <h2>Post</h2>
                    <nav id="breadcrumbs">
                        <ul>
                            <li>You are here:</li>
                            <li><a href="index.php">Home</a></li>
                            <li>post</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</div>

<!--start wrapper-->
	<section class="wrapper">
		<section class="content contact">
			<div class="container">
				<div class="row sub_content">
                  <div class="col-lg-12 col-md-12 col-sm-12">
						<!--<div class="maps">
							<div id="page_maps"></div>
						</div>-->
					</div>
				</div>


				<div class="row sub_content">
					<div class="col-lg-8 col-md-8 col-sm-8">
						<div class="dividerHeading">
							<h4><span>Update Post</span></h4>
						</div>
						<strong>Welcome,<?php echo $_SESSION['user']?></strong>
						<p>Vidit nulla errem ea mea. Dolore apeirian insolens mea ut, indoctum consequuntur hasi. No aeque dictas dissenti as tusu, sumo quodsi fuisset mea in. Ea nobis populo interesset cum, ne sit quis elit officiis, min im tempor iracundia sit anet. Facer falli aliquam nec te. In eirmod utamur offendit vis, posidonium instructior sed te.</p>
							
						<div class="alert alert-success hidden alert-dismissable" id="contactSuccess">
						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						  <strong>Success!</strong> Your message has been sent to us.
						</div>
						
						<div class="alert alert-error hidden" id="contactError">
						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						  <strong>Error!</strong> There was an error sending your message.
						</div>
						  <?php
						     include "config.php";
							   if(!mysqli_select_db($con,'job')){
									 echo "db not selected";
								 }
								 $post_id=$_GET['id'];
                                   $q="select * from post INNER JOIN cat_job ON post.post_category=cat_job.id
								   where post_id=$post_id";
                                $result=mysqli_query($con,$q) or die ("query failed".mysqli_error($con));	
                                 if(mysqli_num_rows($result)>0){
								while ($row=mysqli_fetch_assoc($result)){
						  ?>
						<form id="postForm" action="update_process.php" method="post" >
                           
							 <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="hidden"  name="post_id" class="form-control"  data-msg-required="Please enter your name." value="<?php echo $row['post_id']?>" placeholder="title" >
                                    </div>
								</div>
							</div>
							
							
							<div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" id="title" name="title" class="form-control"  data-msg-required="Please enter your name." value="<?php echo $row['title']?>" placeholder="title" >
                                    </div>
								</div>
							</div>
							<div class="row">
								   <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" id="location" name="location" class="form-control"  data-msg-email="Please enter a valid email address." data-msg-required="Please enter your email address." value="<?php echo $row['location']?>"" placeholder="location" >
                                    </div>
                                  </div>
                            </div>
							<div class="row">
								   <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" id="salary" name="salary" class="form-control"  data-msg-email="Please enter a valid email address." data-msg-required="Please enter your email address." value="<?php echo $row['salary']?>"" placeholder="salary" >
                                    </div>
                                  </div>
                            </div>
							<div class="row">
								   <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" id="job-apply" name="job-apply" class="form-control"  data-msg-email="Please enter a valid email address." data-msg-required="Please enter your email address." value="<?php echo $row['apply']?>"" placeholder="job-apply link" >
                                    </div>
                                  </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <select name="category" class="form-control">
										  <option>select category</option>
										   <?php
					                 include "config.php";
                                 if(!mysqli_select_db($con,'job')){
									 echo "db not selected";
								 }							
                                   $q1="select * from cat_job";
                                $result1=mysqli_query($con,$q1) or die ("query failed");	
                                 if(mysqli_num_rows($result1)>0){
								while ($row1=mysqli_fetch_assoc($result1)){
									if($row['post_category']==$row1['id']){
										$selected="selected";
									}else{
							         $selected="";			
									}
									echo "<option $selected value='{$row1['id']}'>{$row1['cat_name']}</option>";
								}
								 }								
								?>
										  
							  
										  
										</select>
                                    </div>
                                </div>
                            </div>
							<div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="date" id="date" name="dadline" class="form-control" data-msg-required="Please enter date." value="<?php echo $row['dadline']?>" placeholder="date">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <textarea id="editor" class="form-control" name="details" data-msg-required="Please enter your message."><?php echo $row['job_details']?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" name="submit" data-loading-text="Loading..." class="btn btn-default btn-sm" value="Update">
                                </div>
                            </div>
                        </form>
						<?php
								}
								 }else{
									 echo "result not found";
								 }
						?>
						<div class="text-center"><a href="logout.php">Log-out</a></div>
					</div>
					
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="sidebar_widget">
							<div class="widget_info">
								<div class="dividerHeading">
									<h4><span>Contact Info</span></h4>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adip, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								<ul class="widget_info_contact">
									<li><i class="fa fa-map-marker"></i> <p><strong>Address</strong>:Sixmile,Guwahati,Assam, India</p></li>
									<li><i class="fa fa-user"></i> <p><strong>Phone</strong>:(+91) 8472083737</p></li>
									<li><i class="fa fa-envelope"></i> <p><strong>Email</strong>: <a href="#">mushtaqueahmed178@gmail.com</a></p></li>
									<li><i class="fa fa-globe"></i> <p><strong>Web</strong>: <a href="#" data-placement="bottom" data-toggle="tooltip" title="www.bestjQuery.com">www.AssamJobSee.com</a></p></li>
								</ul>
								
							</div>
							
							<div class="widget_social">
								<div class="dividerHeading">
									<h4><span>Get Social</span></h4>
								</div>
								<ul class="widget_social">
									<li><a class="fb" href="#." data-placement="bottom" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twtr" href="#." data-placement="bottom" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a class="gmail" href="#." data-placement="bottom" data-toggle="tooltip" title="Google"><i class="fa fa-google-plus"></i></a></li>
									<li><a class="dribbble" href="#." data-placement="bottom" data-toggle="tooltip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
									<li><a class="skype" href="#." data-placement="bottom" data-toggle="tooltip" title="Skype"><i class="fa fa-skype"></i></a></li>
									<li><a class="pinterest" href="#." data-placement="bottom" data-toggle="tooltip" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
									<li><a class="instagram" href="#." data-placement="bottom" data-toggle="tooltip" title="Instagram"><i class="fa fa-instagram"></i></a></li>
									<li><a class="youtube" href="#." data-placement="bottom" data-toggle="tooltip" title="Youtube"><i class="fa fa-youtube"></i></a></li>
									<li><a class="linkedin" href="#." data-placement="bottom" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
									<li><a class="flickrs" href="#." data-placement="bottom" data-toggle="tooltip" title="Flickr"><i class="fa fa-flickr"></i></a></li>
									<li><a class="rss" href="#." data-placement="bottom" data-toggle="tooltip" title="RSS"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					
				</div>
			</div>
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
						<p>W3knowledge is the largest article website in Assam(india).We upload the good writing article like Islamic (like:-Islamic History and Culture from Quraan and Hadis).</p>
						<ul class="contact-details-alt">
							<li><i class="fa fa-map-marker"></i> <p><strong>Address</strong>:Sixmile,Guwahati,Assam, India</p></li>
							<li><i class="fa fa-user"></i> <p><strong>Phone</strong>:(+91) 8472083737</p></li>
							<li><i class="fa fa-envelope"></i> <p><strong>Email</strong>: <a href="#">mushtaqueahmed178@gmail.com</a></p></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-3">
					<div class="widget_title">
						<h4><span>Recent Posts</span></h4>
					</div>
					<div class="widget_content">
						<ul class="links">
							<li> <a href="#">Aenean commodo ligula eget dolor<span>November 07,  2020</span></a></li>
							<li> <a href="#">Temporibus autem quibusdam <span>November 05,  2020</span></a></li>
							<li> <a href="#">Debitis aut rerum saepe <span>November 03,  2020</span></a></li>
							<li> <a href="#">Et voluptates repudiandae <span>November 02,  2020</span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-3">
					<div class="widget_title">
						<h4><span>Twitter</span></h4>
                    </div>
                    <div class="widget_content">
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
                    </div>
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
					<p class="copyright">&copy; Copyright 2014 Yahoo Baba | Powered by  <a href="https://www.yahoobaba.net/">Yahoo Baba</a></p>
				</div>
				
				<div class="col-md-6">
					<div class="footer_social">
						<ul class="footbot_social">
							<li><a class="fb" href="#." data-placement="top" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
							<li><a class="twtr" href="#." data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a class="dribbble" href="#." data-placement="top" data-toggle="tooltip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
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
    <script src="js/jquery.smartmenus.min.js"></script>
    <script src="js/jquery.smartmenus.bootstrap.min.js"></script>
    <script src="js/jquery-scrolltofixed-min.js"></script>
    <script type="text/javascript" src="js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="js/jflickrfeed.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/swipe.js"></script>
    <script type="text/javascript" src="js/styleswitch.js"></script> <!-- Style Colors Switcher -->
    <script type="text/javascript" src="js/rainyday.js"></script>
    <script type="text/javascript" src="js/rainy-script.js"></script>
    <script src="js/jquery.gmap.js" type="text/javascript"></script>
    <script src="js/main.js"></script>
	
	
                   <script>
							            ClassicEditor
                                        .create( document.querySelector( '#editor' ) )
                                         .catch( error => {
                                          console.error( error );
                                            } );
							      // CKEDITOR.replace('jobd');
				</script>

	
	      <!-- Start Style Switcher -->
    <div class="switcher"></div>
    <!-- End Style Switcher -->
    <script type="text/javascript">
        window.onload = function() {
            run();
            loadScript();
        };
    </script>
</body>
</html>
