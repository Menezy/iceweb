<?php 
include_once 'app/connect.php';
include_once 'class/feeds.php';
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $newsID = $_GET['newsID'];
}
include_once 'module/newsData.php';
?>
<!DOCTYPE html>
<html class="no-js" prefix="og: http://ogp.me/ns#" lang="en-IN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>ICE commercial power</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Commercial energy re-invented. We built a solar energy model structured for Nigeria's commercial sector. We empower businesses to push beyond the constraints
        of an unreliable public energy grid. The energy revolution has arrived" />
    <link href="img/startup_logo_96dp.png" rel="apple-touch-icon" sizes="96x96">
    <link href="img/startup_logo_96dp.png" rel="icon" sizes="96x96" type="image/png">
    <link href="img/startup_logo_32dp.png" rel="icon" sizes="32x32" type="image/png">
    <meta content="img/startup_logo_96dp.png" name="msapplication-TileImage">

    <meta property="og:url" content="https://www.icecommpower.com/index.html" />
    <meta property="og:title" content="ICE Commercial power" />
    <meta property="og:locale" content="en_IN" />
    <meta property="og:site_name" content="ICE commercial power" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="ICE commercial power" />
    <meta name="twitter:creator" content="ICE commercial power" />

    <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo BASEPATH . "css/owl.carousel.min.css" ?>">
    <link rel="stylesheet" href="<?php echo BASEPATH . "css/animate.min.css" ?>">
    <link rel="stylesheet" href="<?php echo BASEPATH . "css/app.css" ?>">

    <script> $(window).on('load', function(){ $(".loader").fadeOut(2000); }); </script>
    <style>
        .single-footer-widget a{
            color:white;
            text-decoration:none;
        }
        .footer-social a{
            padding:10px;
            
        }
        @media only screen and (min-width: 1024px) {
            #postTitle{
                margin-bottom:70px;
                text-align:center;
            }

        }
        
    </style>
</head>

<body>


    <!-- NAVIGATION 
            =================-->
    <?php include_once 'inc/nav.php'; ?>

    <!-- HEADER 
            =================-->
            <style>
                header.header-cat.header-cat-2 { background-image: url("../admin/<?php echo $post_featuredimage; ?>"); }
            </style>
    <header id="conent" class="header-cat header-cat-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" id="postTitle">
                    <h1 style="font-size:24px;"><?php echo $post_title?></h1><br><br>
                </div><br>
            </div>
        </div><br>
    </header>

    <!-- BLOG 
            =================-->
    <section id="blog" class="blog full">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-6">
                            <span><b><?php echo $post_time ?></b></span>

                        </div>
                        <div class="col-md-6">
                            By <span><b><?php echo $post_author ?></b></span>

                        </div>


                    </div> <br>

                    <p class="text-left"><?php echo $post_body ?></p>
                    
                    
                          <!--  <div class="text-center" style="font-size:50px;">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-instagram"></i>
                                <i class="fa fa-twitter"></i>
                            </div> -->
                </div>
                <div class="col-md-3" style="height:100vh;">
                    <div class="card">
                        <div class="card-body" style="background-color:red;color:white;">
                            <blockquote>"The future of Nigeria lies in Renewable energy"</blockquote>
                            <p class="text-center">Bright M. Sunday</p>
                        </div>
                    </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- CLIENTS
            =================-->

    <!-- FOOTER 
          =================-->
     <!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-4 col-sm-4">
							<div class="single-footer-widget">
								<h6>Product</h6>
								<p>
									<a href="">Mobile app</a>
								</p>
															
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-4">
								<div class="single-footer-widget">
										<h6>Company</h6>
										<p>
											<a href="">About us</a>
										</p>
										<p>
											<a href="">Privacy</a>
										</p>
										<p>
											<a href="">Terms of Use</a>
										</p>
	
								</div>
	
						</div>
						<div class="col-lg-3 col-md-4 col-sm-4">
								<div class="single-footer-widget">
										<h6>Contact</h6>
										<p>
												<a href="tel:17189027654" class="text-white">+1718-902-7654 (USA)</a>
										</p>
										<p>
												<a href="tel:2348122244769" class="text-white">+234-812-224-4769 (NIGERIA)</a>
										</p>
										<p>
												<a href="info@icecommpower.com" class="text-white">info@icecommpower.com</a>
										</p>
	
								</div>
	
						</div>
					
						<!--<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
											<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
											<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>
	
										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>	-->					
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p class="text-white">Social corner</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</div>
							</div>
						</div>							
					</div>
					
				</div style="margin-bottom:-40px;">
						<p class="footer-text text-center" style="margin-bottom:-80px;">
							
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> ICE Commercial Power. All rights reserved. 
						</p>	
	
				</div>
			</footer>	
			<!-- End footer Area -->	
    <script src="<?php echo BASEPATH . "js/vendor/jquery-2.2.4.min.js" ?>"></script>
    <script src="<?php echo BASEPATH . "js/popper.min.js" ?>"></script>
    <script src="<?php echo BASEPATH . "js/bootstrap.min.js" ?>"></script>
    <script src="<?php echo BASEPATH . "js/jquery.easing.min.js" ?>"></script>
    <script src="<?php echo BASEPATH . "js/owl.carousel.min.js" ?>"></script>
    <script src="<?php echo BASEPATH . "js/wow.min.js" ?>"></script>
    <script src="<?php echo BASEPATH . "js/app.js" ?>"></script>

</body>

</html>