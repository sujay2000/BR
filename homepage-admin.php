<?php
error_reporting(E_ERROR | E_PARSE);
include("config.php");
$sql = "SELECT * FROM customer";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>Adventure Bootstrap Template</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--

Template 2078 Adventure

http://www.tooplate.com/view/2078-adventure

-->
	<!-- Bootstrap CSS
   ================================================== -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Animate CSS
   ================================================== -->
	<link rel="stylesheet" href="css/animate.min.css">

	<!-- Font Icons
   ================================================== -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/et-line-font.css">

	<!-- Nivo Lightbox CSS
   ================================================== -->
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">

	<!-- Owl Carousel CSS
   ================================================== -->
   	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/owl.carousel.css">

	<!-- BxSlider CSS
   ================================================== -->
   	<link rel="stylesheet" href="css/bxslider.css">

   	<!-- Main CSS
   	================================================== -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Google web font
   ================================================== -->
	<link href='https://fonts.googleapis.com/css?family=Raleway:700' rel='stylesheet' type='text/css'>
	
</head>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- Preloader section
================================================== -->
<section  class="preloader">

	<div class="sk-rotating-plane"></div>

</section>


<!-- Navigation section
================================================== -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">

		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#home" class="smoothScroll navbar-brand">ADMIN PORTAL</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
            
				<!-- <li><a href="#home" class="smoothScroll">HOME</a></li> -->
                
				<li><a href="#work" class="smoothScroll">USERS</a></li>
				<li><a href="#about" class="smoothScroll">ADD BIKES</a></li>
				<li><a href="#team" class="smoothScroll">BIKES</a></li>
				<li><a href="#portfolio" class="smoothScroll">BOKKING</a></li>
				<li><a href="#plan" class="smoothScroll">FEEDBACKS</a></li>
				<li><a href="index.html" class="smoothScroll">LOGOUT</a></li>
			</ul>
		</div>

	</div>
</section>


<!-- Homepage section
================================================== -->
<div id="home">
	<div class="site-slider">
        <ul class="bxslider">
			<li>
                <img src="images/slider/slide1.jpg" alt="slider image 1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-caption">
                                <h2>Plan your trip</h2>
                                <p class="color-white">Fusce elementum nisi et magna tristique, ut facilisis magna dapibus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="images/slider/slide2.jpg" alt="slider image 2">
                <div class="container caption-wrapper">
                    <div class="slider-caption">
                        <h2>Bootstrap Layout</h2>
                        <p class="color-white">Pellentesque mollis purus ipsum. Fusce tristique ante et est placerat dignissim.</p>
                    </div>
                </div>
            </li>
            <li>
                <img src="images/slider/slide3.jpg" alt="slider image 3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-caption">
                                <h2>Mobile Ready</h2>
                                <p class="color-white">You may modify any content section as you wish.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="images/slider/slide4.jpg" alt="slider image 4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-caption">
                                <h2>Responsive Theme</h2>
                                <p class="color-white">Phasellus ultrices, nunc et tempus porta, tellus purus elementum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="images/slider/slide5.jpg" alt="slider image 5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-caption">
                                <h2>Download it FREE!</h2>
                               <p class="color-white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul> <!-- /.bxslider -->
        <div class="bx-thumbnail-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="bx-pager">
                            <a data-slide-index="0" href=""><img src="images/slider/thumb1.jpg" alt="thumbnail 1" /></a>
                            <a data-slide-index="1" href=""><img src="images/slider/thumb2.jpg" alt="thumbnail 2" /></a>
                            <a data-slide-index="2" href=""><img src="images/slider/thumb3.jpg" alt="thumbnail 3" /></a>
                            <a data-slide-index="3" href=""><img src="images/slider/thumb4.jpg" alt="thumbnail 4" /></a>
                            <a data-slide-index="4" href=""><img src="images/slider/thumb5.jpg" alt="thumbnail 5" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.site-slider -->
</div>


<!-- Work section
================================================== -->
<section id="work" class="parallax-section">
	<div class="container">
		<div class="row">
            <h1 align="center"> CUSTOMERS DETAILS</h1><br>

			<!-- Section title
			================================================== -->
			<table class="table" border="1">
                            <thead>
                                <tr style="background-color:black;color:white">
                                    
                                    <th scope="col">NAME</th>
                                    <th scope="col">PHONE</th>
                                    <th scope="col">EAMIL</th>
                                    <th scope="col">ADDRESS</th>
                                    <th scope="col">LICENCE NUMBER</th>
                                    <th scope="col">REMOVE</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>
                                <tr>
                                   
                                    <td><b><?php echo $row['name']; ?></b></td>
                                    <td><b><?php echo $row['phone']; ?></b></td>
                                    <td><b><?php echo $row['email']; ?></b></td>
                                    <td><b><?php echo $row['address']; ?></b></td>
                                    <td><b><?php echo $row['driving']; ?></b></td>
									<td>
                      <a href="delete-c.php?id=<?php echo $row['id'];?>" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>

                            </tbody>
											<?php		}
			}
		?>
                        </table>


			<!-- Work Owl Carousel section
			================================================== -->
			

		</div>
	</div>
</section>


<!-- About section
================================================== -->
<section id="about" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
		
            <center><h1 class="heading color-white">REGISTER HERE</h1></center>
			<div class="col-md-offset-3 col-md-40 col-sm-42">
			<form action="addbike.php" method="post" class="wow fadeInUp" data-wow-delay="0.6s">
				
				<div class="col-md-30 col-sm-8"><br>
					<input type="text" class="form-control" placeholder="Brand" name="brand"><br>
			
					<input type="text" class="form-control" placeholder="Bike name" name="bname"><br>
					<input type="int" class="form-control" placeholder="Model" name="model"><br>
					<input type="int" class="form-control" placeholder="Amount per day" name="amt"><br>
					<select id="bikes"  class="form-control" name="type">
                        <option value="classic">classic</option>
                        <option value="sports">sports</option>
                        <option value="normal">normal</option>
        </select><br>

                    <input type="file" class="form-control" placeholder="image" name="img"><br>
					


					
				
				
				
					<input type="submit" class="form-control" value="ADD">
				</div>
			</form>
		</div>







			

			

			

		</div>
	</div>
</section>


<!-- team section
================================================== -->
<section id="team" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title">
					<h5 class="wow bounceIn">WE ARE READY</h5>
					<h1 class="heading">OUR TEAM</h1>
					<hr>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia deserunt.</p>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
				<div class="team-wrapper">
					<img src="images/team1.jpg" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>George Chan</h4>
							<h3>Trip Planner</h3>
							<ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.6"></a></li>
							</ul>
						</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.3s">
				<div class="team-wrapper">
					<img src="images/team2.jpg" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Kitty Sandar</h4>
							<h3>Trip Manager</h3>
							<ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.6"></a></li>
							</ul>
						</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.6s">
				<div class="team-wrapper">
					<img src="images/team3.jpg" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Johnny Lynn</h4>
							<h3>Location Explorer</h3>
							<ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.6"></a></li>
							</ul>
						</div>
				</div>
			</div>

		</div>
	</div>
</section>


<!-- Portfolio section
================================================== -->
<section id="portfolio" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title">
					<h5 class="wow bounceIn">WE ARE DELIGENT</h5>
					<h1 class="heading">SHOWCASE</h1>
					<hr>
					<p>Pellentesque mollis purus ipsum. Fusce tristique ante et est placerat dignissim. Curabitur tincidunt risus non dui vulputate tincidunt.</p>
				</div>
			</div>

            <div class="col-md-4 col-sm-6">
				<div class="grid">
              		<figure class="effect-zoe">
						<img src="images/portfolio-img1.jpg" alt="portfolio img"/>
							<figcaption>
								<h2>Mobile App</h2>
								<p class="icon-links">
									<a href="images/portfolio-img1.jpg" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
								</p>
							</figcaption>			
					</figure>
				</div>
            </div>   

            <div class="col-md-4 col-sm-6">
				<div class="grid">
              		<figure class="effect-zoe">
						<img src="images/portfolio-img2.jpg" alt="portfolio img"/>
							<figcaption>
								<h2>Trip Planning</h2>
								<p class="icon-links">
									<a href="images/portfolio-img2.jpg" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
								</p>
							</figcaption>			
					</figure>
				</div>
            </div> 

            <div class="col-md-4 col-sm-6">
				<div class="grid">
              		<figure class="effect-zoe">
						<img src="images/portfolio-img3.jpg" alt="portfolio img"/>
							<figcaption>
								<h2>Scheduling</h2>
								<p class="icon-links">
									<a href="images/portfolio-img3.jpg" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
								</p>
							</figcaption>			
					</figure>
				</div>
            </div> 
          	
          	<div class="col-md-4 col-sm-6">
				<div class="grid">
              		<figure class="effect-zoe">
						<img src="images/portfolio-img4.jpg" alt="portfolio img"/>
							<figcaption>
								<h2>Arranging</h2>
								<p class="icon-links">
									<a href="images/portfolio-img4.jpg" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
								</p>
							</figcaption>			
					</figure>
				</div>
            </div> 

            <div class="col-md-4 col-sm-6">
				<div class="grid">
              		<figure class="effect-zoe">
						<img src="images/portfolio-img5.jpg" alt="portfolio img"/>
							<figcaption>
								<h2>Organizing</h2>
								<p class="icon-links">
									<a href="images/portfolio-img5.jpg" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
								</p>
							</figcaption>			
					</figure>
				</div>
            </div> 

            <div class="col-md-4 col-sm-6">
				<div class="grid">
              		<figure class="effect-zoe">
						<img src="images/portfolio-img6.jpg" alt="portfolio img"/>
							<figcaption>
								<h2>Grouping</h2>
								<p class="icon-links">
									<a href="images/portfolio-img6.jpg" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
								</p>
							</figcaption>			
					</figure>
				</div>
            </div> 

            <!-- Portfolio bottom section
			================================================== -->
            <div class="col-md-offset-2 col-md-8 col-sm-12">
            	<div class="portfolio-bottom">
            		<h2>INTERESTED?</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Lorem ipsum dolor sit 	amet.</p>
					<a href="#plan" class="smoothScroll btn btn-default">LET'S GO!</a>
            	</div>
            </div>    

		</div>
	</div>
</section>		


<!-- Plan section
================================================== -->
<section id="plan" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 wow fadeInUp">
				<div class="section-title">
					<h5 class="wow bounceIn">UNIQUE ADVENTURES</h5>
					<h1 class="heading color-white">TRIP PLANS</h1>
					<hr>
					<p class="color-white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia deserunt.</p>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
				<div class="plan">
					<h2 class="plan-title">Villager</h2>
					<div class="plan-price">
						<h1 class="plan-price-title">$500 / <small>trip</small></h1>
					</div>
					<ul class="plan-list">
						<li>4 days 3 nights</li>
						<li>Explore Forest</li>
						<li>Visit Waterfalls</li>
						<li>Group of 10 people</li>
					</ul>
					<div class="plan-button">
						<button class="btn btn-default">CHOOSE PLAN</button>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
				<div class="plan">
					<h2 class="plan-title">Tourer</h2>
					<div class="plan-price">
						<h1 class="plan-price-title">$800 / <small>trip</small></h1>
					</div>
					<ul class="plan-list">
						<li>8 days 7 nights</li>
						<li>Explore Mountains</li>
						<li>Touring Villages</li>
						<li>Group of 15 people</li>
					</ul>
					<div class="plan-button">
						<button class="btn btn-default">CHOOSE PLAN</button>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
				<div class="plan">
					<h2 class="plan-title">Explorer</h2>
					<div class="plan-price">
						<h1 class="plan-price-title">$1,400 / <small>trip</small></h1>
					</div>
					<ul class="plan-list">
						<li>12 days 11 nights</li>
						<li>Multiple Cities</li>
						<li>Unique Experiences</li>
						<li>Group of 20 people</li>
					</ul>
					<div class="plan-button">
						<button class="btn btn-default">CHOOSE PLAN</button>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>


<!-- Contact section
================================================== -->
<section id="contact" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title">
					<h5 class="wow bounceIn">PLAN YOUR TRIP</h5>
					<h1 class="heading">CONTACT US</h1>
					<hr>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla. Excepteu sunt in culpa qui officia deserunt mollit.</p>
				</div>
			</div>

			<!-- Contact form section
			================================================== -->
			<div class="col-md-offset-1 col-md-10 col-sm-12">
				<form action="#" method="post" class="wow fadeInUp" data-wow-delay="0.6s">
					<div class="col-md-4 col-sm-6">
						<input type="text" class="form-control" placeholder="Name" name="name">
					</div>
					<div class="col-md-4 col-sm-6">
						<input type="email" class="form-control" placeholder="Email" name="email">
					</div>
					<div class="col-md-4 col-sm-12">
						<input type="text" class="form-control" placeholder="Subject" name="subject">
					</div>
					<div class="col-md-12 col-sm-12">
						<textarea class="form-control" placeholder="Message" rows="7" name"message"></textarea>
					</div>
					<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
						<input type="submit" class="form-control" value="SHOOT MESSAGE">
					</div>
				</form>
			</div>

			<!-- Contact detail section
			================================================== -->
			<div class="contact-detail col-md-12 col-sm-12">
				<div class="col-md-6 col-sm-6">
					<h3><i class="icon-envelope medium-icon wow bounceIn" data-wow-delay="0.6s"></i> EMAIL</h3>
					<p>contact@company.com</p>
				</div>
				<div class="col-md-6 col-sm-6">
					<h3><i class="icon-phone medium-icon wow bounceIn" data-wow-delay="0.6s"></i> PHONES</h3>
					<p>030-030-0330 | 070-070-7777</p>
				</div>
			</div>

		</div>
	</div>
</section>


<!-- Footer section
================================================== -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">

				<h2 class="wow bounceIn">ADVENTURE STUDIO</h2>
				<ul class="social-icon">
					<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
					<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
					<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
					<li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="1s"></a></li>
					<li><a href="#" class="fa fa-github wow fadeIn" data-wow-delay="1.3s"></a></li>
					<li><a href="#" class="fa fa-tumblr wow fadeIn" data-wow-delay="1.6s"></a></li>
				</ul>
				<p>Copyright &copy; 2016 Adventure Studio 
                
                | Design: <a rel="nofollow" href="http://www.tooplate.com/free-templates" target="_parent">Tooplate</a></p>

			</div>
		</div>
	</div>
</footer>


<!-- Javascript 
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/jquery.easing-1.3.js"></script>
<script src="js/plugins.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>