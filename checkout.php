<?php           //Checkout process //Firstly I will grab the grand total amount from the cart table and I will also grab the products and quantity of the product.
    session_start();
    require 'config.php';

    $grand_total = 0;
    $allItems = '';
    $items = array();

    $sql = "SELECT CONCAT(product_name, '(',quantity,')') AS ItemQty, total_price FROM cart";            //CONCAT is using to combine product_name and qty.  //For eg Redmi(2),Iphone(4)
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()){
        $grand_total += $row['total_price'];
        $items[] = $row['ItemQty'];
    }
    //echo $grand_total;    
    //print_r($items);

    $allItems = implode(", ", $items);             //implode is using to make the array in to a single string
    //echo $allItems;
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Fonzone :: Checkout</title>
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
									<a class="dropdown-item" href="account.php">Account</a>
									<a class="dropdown-item" href="cart.php">Cart <span class="badge badge-danger"></span></a>
									<a class="dropdown-item" href="#">Orders</a>
									<a class="dropdown-item" href="logout.php">Logout</a>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="index_new.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">About</a>
                            </li>
							<li class="nav-item">
								<a class="nav-link" href="contact_new.php">Contact</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!--//nav-->
		</header>
	</div>
</section>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 px-4 pb-4" id="order">
            <h4 class="text-center text_info p-2">Payment</h4>
            <div class="jumbotron p-3 mb-2 text-center">
                <h6 class="lead"><b>Product(s) : </b><?php echo $allItems; ?></h6>
                <h6 class="lead"><b>Delivery Charge : </b>Free</h6>
                <h5><b>Total Amount Payable : </b><?php echo number_format($grand_total,2); ?></h5>
                <form action="" method ="post" id="placeOrder">
                    <input type="hidden" name="products" value="<?php echo $allItems; ?>">
                    <input type="hidden" name="grand_total" value="<?php echo $grand_total; ?>">
                    
                    <?php
                    $id=$_SESSION['id'];
                    $sel="select * from customer where id='$id'";
                    $res = mysqli_query($conn,$sel);  
                        
                    while($arr = mysqli_fetch_array($res))
                    {
                    ?>
                    <input type="hidden" name="name" value="<?php echo $arr[1]; ?>">
                    <input type="hidden" name="email" value="<?php echo $arr[2]; ?>">
                    <input type="hidden" name="mobile" value="<?php echo $arr[3]; ?>">
                    <input type="hidden" name="address" value="<?php echo $arr[4]; ?>">
                    <?php } ?>
                    <h6 class="text-center lead">Select Payment Mode</h6>
                    <div class="form-group">
                        <select name="pmode" class="form-control" required="">
                            <option value="" selected disabled>-Select Payment Mode-</option>
                            <option value="COD">Cash On Delivery</option>
                            <option value="Net Banking" selected disabled>Net Banking</option>
                            <option value="Debit Card" selected disabled>Debit Card</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Place Order" class="btn btn-danger btn-block">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<section class="w3l-footer-22">
	<!-- footer-22 -->
	<div class="footer-hny py-5">
		<div class="container py-lg-5">
			<div class="text-txt row">
				<div class="left-side col-lg-4">
					<h3><a class="logo-footer" href="index_new.php">
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
									<li><a href="index_new.php">Home</a></li>
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

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){

        //To send user info and order details into orders table and display back those details to the checkout page. For this we use ajax to send a request to the server.
        $("#placeOrder").submit(function(e){
            e.preventDefault();
            $.ajax({
                url: 'action.php',
                method: 'post',
                data: $('form').serialize()+"&action=order",            //The serialize( ) method serializes a set of input elements into a string of data. Also Iam concatenating(joining) extra string there ie., "&action=order"
                success: function(response){
                    $("#order").html(response);                        
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
    });
</script>
</body>
</html>