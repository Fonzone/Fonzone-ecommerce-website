<?php
	session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Fonzone :: Home</title>
  <link rel="icon" href="assets/images/logo.jpg" type="image/jpg">
  
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-liberty.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Template CSS -->

</head>
<body>
<!--w3l-banner-slider-main-->
<section class="w3l-banner-slider-main">
	<div class="top-header-content">
		<header class="tophny-header">
			<div class="container-fluid">
				<div class="top-right-strip row">
					<!--/left-->
					<div class="top-hny-left-content col-lg-6 pl-lg-0">
						<h6>Upto 20% off on Redmi Note 9 Series, <a href="#"> Click here for <span
							class="fa fa-hand-o-right hand-icon" aria-hidden="true"></span> <span
							class="hignlaite">More details</span></a></h6>
					</div>
					<!--//left-->
					<!--//right-->
				</div>
			</div>
			<!--/nav-->
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid serarc-fluid">
					<a class="navbar-brand" href="index_new.php">
						Fonzone</a>
					<!-- if logo is image enable this   
							<a class="navbar-brand" href="#index.php">
								<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
							</a> -->
					<!--/search-right-->
					<div class="search-right">
						<a href="#search" title="search"><span class="fa fa-search mr-2" aria-hidden="true"></span>
							<span class="search-text">Search here</span></a>
						<!-- search popup -->
						<div id="search" class="pop-overlay">
							<div class="popup">
								<form action="#" method="post" class="search-box">
									<input type="search" placeholder="Keyword" name="search" required="required"
										autofocus="">
									<button type="submit" class="btn">Search</button>
								</form>
							</div>
							<a class="close" href="#">×</a>
						</div>
						<!-- /search popup -->
					</div>
					<!--//search-right-->
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon fa fa-bars"> </span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="login.php"><span class="fa fa-user" style="font-size:24px" aria-hidden="true"></span>&nbsp;&nbsp;Hi <?php echo "<span class='text-primary'><b>".$_SESSION['name']."</b></span>";?></a>
								<div class="dropdown-menu bg-secondary">
									<a class="dropdown-item" href="#">Account</a>
									<a class="dropdown-item" href="cart.php">Cart <span class="badge badge-danger cart-item"></span></a>
									<a class="dropdown-item" href="#">Orders</a>
									<a class="dropdown-item" href="logout.php">Logout</a>
								</div>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="index_new.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#latest">Latest</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#top-selling">Top Selling</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="">About</a>
                            </li>
							<li class="nav-item">
								<a class="nav-link" href="contact_new.php">Contact</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"> <span class="badge badge-danger cart-item"></span></i></a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!--//nav-->
		</header>
	</div>
</section>

<div id="demo" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="false">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
	<li data-target="#demo" data-slide-to="2"></li>
	<li data-target="#demo" data-slide-to="3"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets\images\banner1.jpg" alt="banner1" style="width:100%;">
    </div>
    <div class="carousel-item">
      <img src="assets\images\banner2.jpg" alt="banner2" style="width:100%;">
    </div>
    <div class="carousel-item">
      <img src="assets\images\banner3.jpg" alt="banner3" style="width:100%;">
	</div>
	<div class="carousel-item">
      <img src="assets\images\banner4.jpg" alt="banner4" style="width:100%;">
	</div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<div id="message"> </div>
<section class="w3l-ecommerce-main">
	<!-- /products-->
	<div class="ecom-contenthny py-5">
		<div class="container py-lg-5">
			
			<h3 class="hny-title mb-0 text-center" id="latest">Latest Smartphones</h3>
			<p class="text-center">Handpicked Favourites just for you</p>
			<!-- /row-->
			<div class="ecom-products-grids row mt-lg-5 mt-3">
				<?php                       // to fetch all the products from the database
					include 'config.php';
					$stmt = $conn->prepare("select * from latest_products");                //select all products and assignining to stmt variable
					$stmt->execute();
					$result = $stmt->get_result();             //storing result to result variable
					while($row = $result->fetch_assoc()){
				?>
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2 transmitv">
						<div class="product-image2">
							<a href="single1_new.php ? ID=<?php echo $row['id']; ?>">
								<img class="pic-1 img-fluid" src="<?php echo $row['product_image_home1']; ?>">
								<img class="pic-2 img-fluid" src="<?php echo $row['product_image_home2']; ?>">
							</a>
							<ul class="social">
									<li><a href="single1_new.php ? ID=<?php echo $row['id']; ?>" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

									<li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
									</li>
							</ul>
							<div class="transmitv single-item">
							<form action="" class="form-submit">
								<input type="hidden" class="pid" value="<?php echo $row['id']; ?>">
                                <input type="hidden" class="pname" value="<?php echo $row['product_name_home']; ?>">
                                <input type="hidden" class="pprice" value="<?php echo $row['product_price_new']; ?>">
                                <input type="hidden" class="pimage" value="<?php echo $row['product_image_home1']; ?>">
                                <input type="hidden" class="pcode" value="<?php echo $row['product_code']; ?>">
								<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart addItemBtn" <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){ echo '';} else { echo 'data-toggle="tooltip" title="Please login to your account"';} ?>>
									Add to Cart
								</button>
							</form>
							</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="single1_new.php ? ID=<?php echo $row['id']; ?>"><?php echo $row['product_name_home']; ?></a></h3>
							<span class="price"><del>₹ <?php echo number_format($row['product_price_old'],2); ?></del>₹ <?php echo number_format($row['product_price_new'],2); ?></span>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
			<!-- //row-->
		</div>
	</div>
</section>
<!-- //products-->

<section class="w3l-content-w-photo-6">
	<!-- /specification-6-->
	  <div class="content-photo-6-mian py-5">
			 <div class="container py-lg-5">
					<div class="align-photo-6-inf-cols row">
						
						<div class="photo-6-inf-right col-6">
								<h3 class="hny-title text-left">iPhone 11 Series</span></h3>
								<p>*Incl Rs 5000 Instant Off on Prepaid</p>
								<a href="#" class="read-more btn">
										From ₹63,300*
								</a>
						</div>
						<div class="photo-6-inf-left col-6">
								<img src="assets/images/iPhone_11_series-1.jpg" class="img-fluid" alt="">
						</div>
					</div>
				 </div>
			 </div>
	 </section>
   <!-- //specification-6-->
     
<section class="w3l-video-6">
	<!-- /video-6-->
	<div class="video-66-info">
		<div class="container-fluid">
			<div class="video-grids-info row">
				<div class="video-gd-right col-7">
					<div class="video-inner text-center">
								<!--popup-->
									<a class="play-button btn popup-with-zoom-anim" href="#small-dialog">
											<span class="fa fa-play" aria-hidden="true"></span>
									</a>
									<div id="small-dialog" class="mfp-hide">
										<div class="search-top notify-popup">
											<iframe width="853" height="480" src="https://www.youtube.com/embed/eslSprp_kos" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</div>
									</div>
									<!--//popup-->
					      </div>
				  </div>
				<div class="video-gd-left col-5 p-lg-5 p-4">
					<div class="p-xl-4 p-0 video-wrap">
						<h3 class="hny-title text-left">realme X50 Pro 5G</h3>
						<p>5G | SD 865 | 65W Super Dart Charge</p>
						<a href="#" class="read-more btn">
							From ₹39,999*
						</a>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- //video-6-->
<!-- //w3l-banner-slider-main -->

<section class="w3l-ecommerce-main">
	<!-- /products-->
	<div class="ecom-contenthny py-5">
		<div class="container py-lg-5">
			<h3 class="hny-title mb-0 text-center" id="top-selling">Top Selling Smartphones</h3>
			<p class="text-center">Handpicked Favourites just for you</p>
			<!-- /row-->
			<div class="ecom-products-grids row mt-lg-5 mt-3">
				<?php 
					include 'config.php';
					$stmt = $conn->prepare("select * from top_products");
					$stmt->execute();
					$result = $stmt->get_result();            
					while($row = $result->fetch_assoc()){
				?>
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2 transmitv">
						<div class="product-image2">
							<a href="single2_new.php ? ID=<?php echo $row['id']; ?>">
								<img class="pic-1 img-fluid" src="<?php echo $row['product_image_home1']; ?>">
								<img class="pic-2 img-fluid" src="<?php echo $row['product_image_home2']; ?>">
							</a>
							<ul class="social">
									<li><a href="single2_new.php ? ID=<?php echo $row['id']; ?>" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

									<li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
									</li>
							</ul>
							<div class="transmitv single-item">
							<form action="" class="form-submit">
								<input type="hidden" class="pid" value="<?php echo $row['id']; ?>">
                                <input type="hidden" class="pname" value="<?php echo $row['product_name_home']; ?>">
                                <input type="hidden" class="pprice" value="<?php echo $row['product_price_new']; ?>">
                                <input type="hidden" class="pimage" value="<?php echo $row['product_image_home1']; ?>">
                                <input type="hidden" class="pcode" value="<?php echo $row['product_code']; ?>">
								<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart addItemBtn" <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){ echo '';} else { echo 'data-toggle="tooltip" title="Please login to your account"';} ?>>
									Add to Cart
								</button>
							</form>
							</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="single2_new.php ? ID=<?php echo $row['id']; ?>"><?php echo $row['product_name_home']; ?></a></h3>
							<span class="price"><del>₹ <?php echo number_format($row['product_price_old'],2); ?></del>₹ <?php echo number_format($row['product_price_new'],2); ?></span>
						</div>
					</div>
				</div>
				<?php } ?>	
			</div>
			<!-- //row-->
		</div>
	</div>
</section>

<section class="w3l-content-5">
	<!-- /content-6-section -->
	<div class="content-5-main">
		<div class="container">
			<div class="content-info-in row">
				<div class="content-gd col-md-6 offset-lg-3 text-center">
					<h3 class="hny-title two">
						<span>Redmi Note 9 Series</span></h3>
					<p>Redmi Note 9 | Redmi Note 9 Pro | Redmi Note 9 Pro Max</p>
					<p>No Cost EMI from Rs 999/month*</p>
					<a href="#" class="read-more-btn2 btn">
						From ₹ 11,999*
					</a>

				</div>

			</div>

		</div>
	</div>
</section>
<!-- //content-6-section -->
<section class="w3l-grids-hny-2">
	<!-- /content-6-section -->
	<div class="grids-hny-2-mian py-5">
		<div class="container py-lg-5">
				
			<h3 class="hny-title mb-0 text-center">Shop By Brand</h3>
			<p class="mb-4 text-center">Handpicked Favourites just for you</p>
			<div class="welcome-grids row mt-5">
				<div class="col-lg-2 col-md-4 col-6 welcome-image">
						<div class="boxhny13">
								<a href="#URL">
										<img src="assets/images/apple1.jpg" class="img-fluid" alt="" />
								<div class="boxhny-content">
									<h3 class="title">Shop Now
								</div>
							</a>
						</div>
						<h4><a href="#URL">Apple</a></h4>

				</div>				
				<div class="col-lg-2 col-md-4 col-6 welcome-image">
						<div class="boxhny13">
								<a href="#URL">
										<img src="assets/images/samsung1.jpg" class="img-fluid" alt="" />
								<div class="boxhny-content">
									<h3 class="title">Shop Now</h3>
								</div>
							</a>
						</div>
						<h4><a href="#URL">
								Samsung</a></h4>	
				</div>
				<div class="col-lg-2 col-md-4 col-6 welcome-image">
						<div class="boxhny13">
								<a href="#URL">
										<img src="assets/images/Xiaomi1.jpg" class="img-fluid" alt="" />
								<div class="boxhny-content">
									<h3 class="title">Shop Now</h3>
								</div>
							</a>
						</div>
						<h4><a href="#URL">Xiaomi</a></h4>	
				</div>
				<div class="col-lg-2 col-md-4 col-6 welcome-image">
						<div class="boxhny13">
								<a href="#URL">
										<img src="assets/images/realme1.jpg" class="img-fluid" alt="" />
								<div class="boxhny-content">
									<h3 class="title">Shop Now</h3>
								</div>
							</a>
						</div>
						<h4><a href="#URL">Realme</a></h4>
				</div>
				<div class="col-lg-2 col-md-4 col-6 welcome-image">
						<div class="boxhny13">
								<a href="#URL">
										<img src="assets/images/oppo1.jpg" class="img-fluid" alt="" />
								<div class="boxhny-content">
									<h3 class="title">Shop Now</h3>
								</div>
							</a>
						</div>
						<h4><a href="#URL">
								Oppo</a></h4>	
				</div>
				<div class="col-lg-2 col-md-4 col-6 welcome-image">
						<div class="boxhny13">
								<a href="#URL">
										<img src="assets/images/Honor1.jpg" class="img-fluid" alt="" />
								<div class="boxhny-content">
									<h3 class="title">Shop Now</h3>
								</div>
							</a>
						</div>
						<h4><a href="#URL">
								Honor</a></h4>	
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //content-6-section -->
<!-- //post-grids-->
<section class="w3l-customers-sec-6">
	<div class="customers-sec-6-cintent py-5">
		<!-- /customers-->
		<div class="container py-lg-5">
				<h3 class="hny-title text-center mb-0 ">Customers <span>Love</span></h3>
				<p class="mb-5 text-center">What People Say</p>
			<div class="row customerhny my-lg-5 my-4">
				<div class="col-md-12">
					<div id="customerhnyCarousel" class="carousel slide" data-ride="carousel">

						<ol class="carousel-indicators">
							<li data-target="#customerhnyCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#customerhnyCarousel" data-slide-to="1"></li>
						</ol>
						<!-- Carousel items -->
						<div class="carousel-inner">

							<div class="carousel-item active">
								<div class="row">
									<div class="col-md-3">
										<div class="customer-info text-center">
											<div class="feedback-hny">
												<span class="fa fa-quote-left"></span>
												<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
													adipisicing elit. Labore rem, dicta assumenda mollitia molestias
													quas nihil quasis.</p>
											</div>
											<div class="feedback-review mt-4">
												<img src="assets/images/c1.jpg" class="img-fluid" alt="">
												<h5>Smith Roy</h5>

											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="customer-info text-center">
											<div class="feedback-hny">
												<span class="fa fa-quote-left"></span>
												<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
														adipisicing elit. Labore rem, dicta assumenda mollitia molestias
														quas nihil quasis.</p>
											</div>
											<div class="feedback-review mt-4">
												<img src="assets/images/c2.jpg" class="img-fluid" alt="">
												<h5>Lora Grill</h5>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="customer-info text-center">
											<div class="feedback-hny">
												<span class="fa fa-quote-left"></span>
												<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
													adipisicing elit. Labore rem, dicta assumenda mollitia molestias
													quas nihil quasis.</p>
											</div>
											<div class="feedback-review mt-4">
												<img src="assets/images/c3.jpg" class="img-fluid" alt="">
												<h5>Laura Sten</h5>

											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="customer-info text-center">
											<div class="feedback-hny">
												<span class="fa fa-quote-left"></span>
												<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
													adipisicing elit. Labore rem, dicta assumenda mollitia molestias
													quas nihil quasis.</p>
											</div>
											<div class="feedback-review mt-4">
												<img src="assets/images/c4.jpg" class="img-fluid" alt="">
												<h5>John Lee</h5>

											</div>
										</div>
									</div>
								</div>
								<!--.row-->
							</div>
							<!--.item-->

							<div class="carousel-item">
								<div class="row">
									<div class="col-md-3">
											<div class="customer-info text-center">
													<div class="feedback-hny">
														<span class="fa fa-quote-left"></span>
														<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
															adipisicing elit. Labore rem, dicta assumenda mollitia molestias
															quas nihil quasis.</p>
													</div>
													<div class="feedback-review mt-4">
														<img src="assets/images/c4.jpg" class="img-fluid" alt="">
														<h5>John Lee</h5>
		
													</div>
												</div>
									</div>
									<div class="col-md-3">
											<div class="customer-info text-center">
													<div class="feedback-hny">
														<span class="fa fa-quote-left"></span>
														<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
															adipisicing elit. Labore rem, dicta assumenda mollitia molestias
															quas nihil quasis.</p>
													</div>
													<div class="feedback-review mt-4">
														<img src="assets/images/c3.jpg" class="img-fluid" alt="">
														<h5>Laura Sten</h5>
		
													</div>
												</div>
									</div>
									<div class="col-md-3">
											<div class="customer-info text-center">
												<div class="feedback-hny">
													<span class="fa fa-quote-left"></span>
													<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
														adipisicing elit. Labore rem, dicta assumenda mollitia molestias
														quas nihil quasis.</p>
												</div>
												<div class="feedback-review mt-4">
													<img src="assets/images/c1.jpg" class="img-fluid" alt="">
													<h5>Smith Roy</h5>
	
												</div>
											</div>
										</div>
										<div class="col-md-3">
												<div class="customer-info text-center">
														<div class="feedback-hny">
															<span class="fa fa-quote-left"></span>
															<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
																adipisicing elit. Labore rem, dicta assumenda mollitia molestias
																quas nihil quasis.</p>
														</div>
														<div class="feedback-review mt-4">
															<img src="assets/images/c2.jpg" class="img-fluid" alt="">
															<h5>Lora Grill</h5>
			
														</div>
													</div>
										</div>
								</div>
								<!--.row-->
							</div>
							<!--.item-->

						</div>
						<!--.carousel-inner-->
					</div>
					<!--.Carousel-->

				</div>
			</div>
		</div>
	</div>
</section>
<!-- //customers-->
<section class="w3l-subscription-6">
	<!--/customers -->
	<div class="subscription-infhny">
		<div class="container-fluid">

			<div class="subscription-grids row">

				<div class="subscription-right form-right-inf col-lg-6 p-md-5 p-4">
					<div class="p-lg-5 py-md-0 py-3">
						<h3 class="hny-title">Join us for FREE to get instant <span>email updates!</span></h3>
							<p>Subscribe and get notified at first on the latest update and offers!</p>

						<form action="#" method="post" class="signin-form mt-lg-5 mt-4">
							<div class="forms-gds">
								<div class="form-input">
									<input type="email" name="" placeholder="Your email here" required="">
								</div>
								<div class="form-input"><button class="btn">Join</button></div>
							</div>
						</form>
					</div>
				</div>
				<div class="subscription-left forms-25-info col-lg-6 ">

				</div>
			</div>

			<!--//customers -->
		</div>
</section>
<!-- //customers-6-->


<section class="w3l-footer-22">
	<!-- footer-22 -->
	<div class="footer-hny py-5">
		<div class="container py-lg-5">
			<div class="text-txt row">
				<div class="left-side col-lg-4">
					<h3><a class="logo-footer" href="index.html">
						Fonzone</a></h3>
					<!-- if logo is image enable this   
								<a class="navbar-brand" href="#index.html">
									<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
								</a> -->
					<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur.Vivamus
						a ligula quam. Ut blandit eu leo non suscipit. </p>
					<ul class="social-footerhny mt-lg-5 mt-4">

						<li><a class="facebook" href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a>
						</li>
						<li><a class="twitter" href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a>
						</li>
						<li><a class="google" href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
						</li>
						<li><a class="instagram" href="#"><span class="fa fa-instagram" aria-hidden="true"></span></a>
						</li>
					</ul>
				</div>

				<div class="right-side col-lg-8 pl-lg-5">
				<h4>Upto 20% off on Redmi Note 9 Series</h4>
					<div class="sub-columns">
						<div class="sub-one-left">
							<h6>Useful Links</h6>
							<div class="footer-hny-ul">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li><a href="#">About</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="contact_new.php">Contact</a></li>
								</ul>
								<ul>
									<li><a href="#">Careers</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Terms and Conditions</a></li>
									<li><a href="#">Support</a></li>
								</ul>
							</div>

						</div>
						<div class="sub-two-right">
							<h6>Our Store</h6>
							<p class="mb-5">Fonzone, Fort Road, Kannur, Kerala, India</p>

							<h6>We accept:</h6>
							<ul>
								<li><a class="pay-method" href="#"><span class="fa fa-cc-visa"
											aria-hidden="true"></span></a>
								</li>
								<li><a class="pay-method" href="#"><span class="fa fa-cc-mastercard"
											aria-hidden="true"></span></a>
								</li>
								<li><a class="pay-method" href="#"><span class="fa fa-cc-paypal"
											aria-hidden="true"></span></a>
								</li>
								<li><a class="pay-method" href="#"><span class="fa fa-cc-amex"
											aria-hidden="true"></span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="below-section row">
				<div class="columns col-lg-6">
					<ul class="jst-link">
						<li><a href="#">Privacy Policy </a> </li>
						<li><a href="#">Term of Service</a></li>
						<li><a href="#">Customer Care</a> </li>
					</ul>
				</div>
				<div class="columns col-lg-6 text-lg-right">
					<p>© 2020 Fonzone. All rights reserved. Designed by <a href="">
							Dot KP</a>
					</p>
				</div>
				<button onclick="topFunction()" id="movetop" title="Go to top">
					<span class="fa fa-angle-double-up"></span>
				</button>
			</div>
		</div>
	</div>
	<!-- //titels-5 -->
	<!-- move top -->

	<script>
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function () {
			scrollFunction()
		};

		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				document.getElementById("movetop").style.display = "block";
			} else {
				document.getElementById("movetop").style.display = "none";
			}
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
	</script>
	<!-- /move top -->
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!--/login-->
<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
  </script>
<!--//login-->
<script>
// optional
		$('#customerhnyCarousel').carousel({
				interval: 5000,
				responsiveClass: true
    });
  </script>
 <!-- cart-js -->
 <script src="assets/js/minicart.js"></script>
 <script>
     transmitv.render();

     transmitv.cart.on('transmitv_checkout', function (evt) {
         var items, len, i;

         if (this.subtotal() > 0) {
             items = this.items();

             for (i = 0, len = items.length; i < len; i++) {}
         }
     });
 </script>
 <!-- //cart-js -->
<!--pop-up-box-->
<script src="assets/js/jquery.magnific-popup.js"></script>
<!--//pop-up-box-->
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',
      fixedContentPos: false,
      fixedBgPos: true,
      overflowY: 'auto',
      closeBtnInside: true,
      preloader: false,
      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

  });
</script>
<!--//search-bar-->
<!-- disable body scroll which navbar is in active -->

<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<script type="text/javascript">
	$(document).ready(function(){
		$(".addItemBtn").click(function(e){
			e.preventDefault();                     //this function will stop refreshing page when we click on "Add to cart" button. Sending data to the server without page refreshing.(Send data to the server is using ajax)
			
			//For getting the specific product value of input type hidden
			var $form = $(this).closest(".form-submit");
			var pid = $form.find(".pid").val();             //get the value from input field of id and assigning to var pid
			var pname = $form.find(".pname").val();         //get the value from input field of product name and assigning to var pname
			var pprice = $form.find(".pprice").val();       // "    "
			var pimage = $form.find(".pimage").val();
			var pcode = $form.find(".pcode").val();

			//Now we will send a request using ajax to the server
			$.ajax({
				url: 'action.php',
				method: 'post',
				data: {pid:pid,pname:pname,pprice:pprice,pimage:pimage,pcode:pcode},        //assigning each variables in ajax and these datas are sending to server.
				success: function(response){
					$("#message").html(response);           //html response comeback from the server displays in id="message" ie.,When we click Add to cart displays a success alert
					
					load_cart_item_number();
				}
			});
		});
		
		load_cart_item_number();
            
            //To show number of cart items(showing near cart symbol in top of the home page) when clicking Add to cart. For this we need to use ajax to send a request to the server.
		function load_cart_item_number(){
			$.ajax({
				url: 'action.php',
				method: 'get',
				data: {cartItem:"cart_item"},
				success: function(response){
					$(".cart-item").html(response);
				}
			});
		}

		$('[data-toggle="tooltip"]').tooltip(); 
    });
</script>

</body>
</html>