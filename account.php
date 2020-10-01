<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Fonzone Account</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	 <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- Custom Theme files -->
	<link href="assets/css/style2.css" rel="stylesheet" type="text/css" media="all" />
	<link href="assets/css/style-liberty.css" rel="stylesheet" type="text/css" media="all" />
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
	<!-- //web font -->
</head>
<body>
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
					<a class="navbar-brand" href="index.php">
						Fonzone</a>
					<!-- if logo is image enable this   
							<a class="navbar-brand" href="#index.php">
								<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
							</a> -->
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
									<a class="dropdown-item active" href="account.php">Account</a>
									<a class="dropdown-item" href="cart.php">Cart <span class="badge badge-danger cart-item"></span></a>
									<a class="dropdown-item" href="#">Orders</a>
									<a class="dropdown-item" href="logout.php">Logout</a>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="index.php">Home</a>
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
<!-- main -->
<div class="w3layouts-main"> 
	<div class="bg-layer pb-5">
		<h1>My Account</h1>
		<div class="header-main col-lg-6 col-md-8 col-10">
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<?php
                require 'config.php';
                
                $id=$_SESSION['id'];
                $sel="select * from customer where id='$id'";
                $res=mysqli_query($conn,$sel);  
                    
                while($row= mysqli_fetch_array($res))
                {
            ?>
            <div class="header-left-bottom">
                <form action="#" method="post">
                    <div class="icon1">
                        <span class="fa fa-user"></span>
                        <input type="text" placeholder="Full Name" required="" name="name" value="<?php echo $row[1]; ?>"/>
                    </div>
                    <div class="icon1">
                        <span class="fa fa-mobile-phone" style="font-size: 24px;"></span>
                        <input type="text" placeholder="Mobile Number" required="" name="mobile" value="<?php echo $row[3]; ?>"/>
                    </div>
                    <div class="icon1">
                        <span class="fa fa-envelope"></span>
                        <input type="email" placeholder="Email Address" required="" name="email" value="<?php echo $row[2]; ?>"/>
                    </div>
                    
                    <div class="icon1">
                        <span class="fa fa-address-card"></span>
                        <textarea name="address" class="form-control border-0" rows="4" placeholder="Enter Delivery Address Here..." required=""><?php echo $row[4]; ?></textarea>
                    </div>
                    <div class="icon1">
                        <span class="fa fa-lock"></span>
                        <input type="password" placeholder="Password" required="" name="password" value="<?php echo $row[5]; ?>"/>
                    </div>
                    <div class="bottom">
                        <input type="submit" class="btn" value="Update" name="update"/>
                    </div>
                </form>	
            </div>
        </div>
    </div>
</div>
            <?php
            }

            if(isset($_POST['update']))
            {
                $name=$_POST['name'];
                $email=$_POST['email'];
                $mobile=$_POST['mobile'];
                $address=$_POST['address'];
                $password=$_POST['password'];

                $query="update customer set name='$name',email='$email',mobile='$mobile',address='$address',password='$password' where id='$id'";
                mysqli_query($conn,$query);        
                echo '<script type="text/javascript">'; 
                echo 'alert("Data Updated!!");'; 
                echo '</script>';
            }
            ?>


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

<!-- disable body scroll which navbar is in active -->

<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!-- //main -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){

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
	});
</script>
</body>
</html>