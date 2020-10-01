<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Fonzone Shopping</title>
  <link rel="icon" href="assets/images/logo.jpg" type="image/jpg">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-liberty.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Template CSS -->

<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:demo');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:demo');
  	}
})();
</script>

<div id="codefund"><!-- fallback content --></div>
<script src="https://codefund.io/properties/441/funder.js" async="async"></script>
	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=UA-149859901-1'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149859901-1');
</script>

<script>
  window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
  ga('create', 'UA-149859901-1', '#demo.com');
  ga('require', 'eventTracker');
  ga('require', 'outboundLinkTracker');
  ga('require', 'urlChangeTracker');
  ga('send', 'pageview');
</script>
<script async src='/js/autotrack.js'></script>

<meta name="robots" content="noindex">
</head>
<body>

<section class="w3l-banner-slider-main inner-pagehny">
  <div class="breadcrumb-infhny">
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
            <a class="navbar-brand" href="index.php">
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
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item">
                  <a class="nav-link" href="index.php">Latest</a>
				</li>
				<li class="nav-item">
                  <a class="nav-link" href="index.php">Top Selling</a>
				</li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php"><span class="fa fa-user" style="font-size:26px" aria-hidden="true"></span> &nbsp;&nbsp;Login</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
			  <!--//nav-->
		  </header>
      <div class="breadcrumb-contentnhy">
        <div class="container">
          <?php
              include 'config.php';
              if(isset($_GET['ID'])){
                $id = $_GET['ID'];
                $sel="select * from latest_products where id='$id'";
                $result = mysqli_query($conn,$sel);

                while($row = mysqli_fetch_array($result)){
          ?>
          <nav aria-label="breadcrumb">
            <h2 class="hny-title text-center">Fonzone Shopping</h2>
            <ol class="breadcrumb mb-0">
              <li><a href="index.php">Home</a>
                <span class="fa fa-angle-double-right"></span></li>
              <li class=""><?php echo $row['product_name_home']; ?></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="w3l-ecommerce-main-inn">
	<!--/ecommerce-single-->
	<div class="ecomrhny-content-inf py-5">
		<div class="container py-lg-5">
        <div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">

            <!---728x90--->

            
            </div>
            
			<!--/row1-->
			<div class="sp-store-single-page row">
				<div class="col-lg-5 single-right-left">
					<div class="flexslider1">

						<ul class="slides">
							<li data-thumb="<?php echo $row['product_image_single1']; ?>">
								<div class="thumb-image"> <img src="<?php echo $row['product_image_single1']; ?>" data-imagezoom="true"
										class="img-fluid" alt=" "> </div>
							</li>
							<li data-thumb="<?php echo $row['product_image_single2']; ?>">
								<div class="thumb-image"> <img src="<?php echo $row['product_image_single2']; ?>" data-imagezoom="true"
										class="img-fluid" alt=" "> </div>
							</li>
							<li data-thumb="<?php echo $row['product_image_single3']; ?>">
								<div class="thumb-image"> <img src="<?php echo $row['product_image_single3']; ?>" data-imagezoom="true"
										class="img-fluid" alt=" "> </div>
							</li>
							<li data-thumb="<?php echo $row['product_image_single4']; ?>">
								<div class="thumb-image"> <img src="<?php echo $row['product_image_single4']; ?>" data-imagezoom="true"
										class="img-fluid" alt=" "> </div>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="eco-buttons mt-5">

						<div class="transmitv single-item">
              <form action="" class="form-submit">
                <input type="hidden" class="pid" value="<?php echo $row['id']; ?>">
                <input type="hidden" class="pname" value="<?php echo $row['product_name_home']; ?>">
                <input type="hidden" class="pprice" value="<?php echo $row['product_price_new']; ?>">
                <input type="hidden" class="pimage" value="<?php echo $row['product_image_home1']; ?>">
                <input type="hidden" class="pcode" value="<?php echo $row['product_code']; ?>">
                <a href="login.php" class="action add-to-cart btn" data-toggle="tooltip" title="Please login to your account" onclick="return confirm('Please login to your account\n\nClick OK to redirect to the login page');">
                  Add to Cart
                </a> 
              </form>
						</div>
						<div class="buyhny-now"> <a href="#" class="action btn">Buy Now </a></div>
					</div>
				</div>
				<div class="col-lg-7 single-right-left pl-lg-4">
					<h3><?php echo $row['product_name_single']; ?></h3>
					<div class="caption">
						<ul class="rating-single">
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star-half-o yellow-star" aria-hidden="true"></span>
								</a>
							</li>
						</ul>

						<h6>
							<span class="item_price">₹ <?php echo number_format($row['product_price_new'],2); ?></span>
							<del>₹ <?php echo number_format($row['product_price_old'],2); ?></del> Free Delivery
						</h6>
					</div>
					<div class="desc_single my-4">
						<ul class="emi-views">
							<li><span>Special Price</span> Get extra 5% off (price inclusive of discount)</li>
							<li><span>Bank Offer</span> 5% Unlimited Cashback on Axis Bank Credit Card</li>
							<li><span>Bank Offer</span> 5% Cashback* on HDFC Bank Debit Cards</li>
							<li><span>Bank Offer</span> Extra 5% off* with Axis Bank Buzz Credit Card</li>
						</ul>
					</div>
					<div class="desc_single mb-4">
						<h5>Description:</h5>
						<p><?php echo $row['description']; ?> </p>
					</div>
					<div class="description-apt d-grid mb-4">
						<div class="occasional">
							<h5 class="sp_title mb-3">Highlights:</h5>
							<ul class="single_specific">
								<li> <?php echo $row['highlights1']; ?></li>
								<li> <?php echo $row['highlights2']; ?></li>
								<li> <?php echo $row['highlights3']; ?></li>
								<li> <?php echo $row['highlights4']; ?></li>
							</ul>

						</div>

						<div class="color-quality">
							<h5 class="sp_title">Services:</h5>
							<ul class="single_serv">
								<li>
									<a href="#">7 Days Replacement Policy</a>
								</li>
								<li class="gap">
									<a href="#">Cash on Delivery available</a>
								</li>
							</ul>
						</div>
          </div>
          
					<div class="description mb-4">
						<h5>Enter pincode to check availability at your location</h5>
						<form action="#" class="d-flex" method="post">
							<input type="text" placeholder="Enter pincode" required>
							<button class="submit btn" type="submit">Check</button>
						</form>
					</div>

				</div>
			</div>
		</div>
    <!--//row1-->]
    <div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->
        
        </div>
        
	</div>
	<!--//ecommerce-single-->
</section>
          <?php } ?>
      <?php } ?>
<section class="w3l-ecommerce-main w3l-ecommerce-main-inn">
	<!-- /content-6-section -->
	<div class="content-singlev-ecomm py-5">
		<div class="container py-lg-5">
			<div class="two-products-single row">
				<div class="col-md-6 pro-grid-left">
					<div class="pro-grid-one">
						<div class="product-des-hny">
							<h4 class="text-wthree">Redmi Note 9 Pro Series
								<br>20% OFF </h4>
								<a href="#" class="read-more-btn2 btn">
									From ₹ 11,999*
								</a>
						</div>
					</div>
				</div>

				<div class="col-md-6 pro-grid-right">
					<div class="pro-grid-one pro-grid-two">
						<div class="product-des-hny">
							<h4 class="text-wthree">Apple iPhone 11 Series
								<br>20% OFF </h4>
							<a href="#" class="read-more-btn2 btn">
								From ₹ 63,300*
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //content-6-section -->
<section class="w3l-ecommerce-main">
	<!-- /products-->
	<div class="ecom-contenthny py-5">
		<div class="container py-lg-5">
        <div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">

            <!---728x90--->
            
            </div>
            
			<h3 class="hny-title mb-0 text-center">Similar Products</h3>
			<p class="text-center">New Collections Shop With Us</p>
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
            <a href="single2.php ? ID=<?php echo $row['id']; ?>">
								<img class="pic-1 img-fluid" src="<?php echo $row['product_image_home1']; ?>">
								<img class="pic-2 img-fluid" src="<?php echo $row['product_image_home2']; ?>">
							</a>
							<ul class="social">
									<li><a href="single2.php ? ID=<?php echo $row['id']; ?>" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>
									<li><a href="ecommerce.html" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
									</li>
							</ul>
							<div class="transmitv single-item">
							<form action="" class="form-submit">
								<input type="hidden" class="pid" value="<?php echo $row['id']; ?>">
                <input type="hidden" class="pname" value="<?php echo $row['product_name_home']; ?>">
                <input type="hidden" class="pprice" value="<?php echo $row['product_price_new']; ?>">
                <input type="hidden" class="pimage" value="<?php echo $row['product_image_home1']; ?>">
                <input type="hidden" class="pcode" value="<?php echo $row['product_code']; ?>">
								<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart addItemBtn">
									Add to Cart
								</button>
							</form>
							</div>
						</div>
						<div class="product-content">
              <h3 class="title"><a href="single2.php ? ID=<?php echo $row['id']; ?>"><?php echo $row['product_name_home']; ?></a></h3>
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


<section class="w3l-footer-22">
	<!-- footer-22 -->
	<div class="footer-hny py-5">
		<div class="container py-lg-5">
			<div class="text-txt row">
				<div class="left-side col-lg-4">
					<h3><a class="logo-footer" href="index.php">
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
									<li><a href="contact.html">Contact</a></li>
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

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

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
 <!-- FlexSlider -->
 <script src="assets/js/jquery.flexslider.js"></script>
 <!-- single -->
 <script src="assets/js/imagezoom.js"></script>
 <!-- single -->
 <script>
   // Can also be used with $(document).ready()
   $(window).load(function () {
     $('.flexslider1').flexslider({
       animation: "slide",
       controlNav: "thumbnails"
     });
   });
 </script>
  <script src="assets/js/minicart.js"></script>
 <!-- //FlexSlider-->
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
<!-- price range (top products) -->
<script src="assets/js/jquery-ui.js"></script>
<script>
  //<![CDATA[ 
  $(window).load(function () {
    $("#slider-range").slider({
      range: true,
      min: 0,
      max: 9000,
      values: [50, 6000],
      slide: function (event, ui) {
        $("#amount").val("₹" + ui.values[0] + " - ₹" + ui.values[1]);
      }
    });
    $("#amount").val("₹" + $("#slider-range").slider("values", 0) + " - ₹" + $("#slider-range").slider("values", 1));

  }); //]]>
</script>
<!-- //price range (top products) -->
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
		$('[data-toggle="tooltip"]').tooltip(); 						//For tooltip toggling
  });
</script>
</body>
</html>