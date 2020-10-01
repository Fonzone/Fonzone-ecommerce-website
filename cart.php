<?php
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Fonzone Cart</title>
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
									<a class="dropdown-item active" href="cart.php">Cart <span class="badge badge-danger cart-item"></span></a>
									<a class="dropdown-item" href="#">Orders</a>
									<a class="dropdown-item" href="logout.php">Logout</a>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="index_new.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="index_new.php">Latest</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="index_new.php">Top Selling</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="">About</a>
                            </li>
							<li class="nav-item">
								<a class="nav-link" href="contact_new.php">Contact</a>
							</li>
							<li class="nav-item active">
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

<div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div style="display:<?php if(isset($_SESSION['showAlert'])){echo $_SESSION['showAlert'];} 
                                        else {echo 'none';} unset($_SESSION['showAlert']); ?>;" 
                    class="alert alert-success alert-dismissible mt-3">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong><?php if(isset($_SESSION['message'])){echo $_SESSION['message'];} unset($_SESSION['message']); ?></strong> 
                </div>
                <div class="table-responsive mt-2">
                    <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <td colspan="7">
                                    <h4 class="text-center text-info m-0">Products in your cart!</h4>
                                </td>
                            </tr>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th><a href="action.php?clear=all" class="badge-danger badge p-1" onclick="return confirm('Are you sure want to clear your cart?');"><i class="fa fa-trash"></i>&nbsp;&nbsp;Clear Cart</a> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php                       //Now to display all the products that are added to cart table
                                require 'config.php';
                                $stmt = $conn->prepare("SELECT * FROM cart");
                                $stmt->execute();
                                $result = $stmt->get_result();
                                $grand_total = 0;
                                while($row = $result->fetch_assoc()){
                            ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <input type="hidden" class="pid" value="<?php echo $row['id']; ?>">            <!-- Extra fittings for using in ajax method -->
                                <td><img src="<?php echo $row['product_image']; ?>" width="50"></td>
                                <td><?php echo $row['product_name']; ?></td>
                                <td>₹ <?php echo number_format($row['product_price'],2); ?></td>
                                <input type="hidden" class="pprice" value="<?php echo $row['product_price']; ?>">          <!-- Extra fittings for using in ajax method -->
                                <td><input type="number" class="form-control itemQty" value="<?php echo $row['quantity']; ?>" style="width:75px;"></td>
                                <td>₹ <?php echo number_format($row['total_price'],2); ?></td>
                                <td><a href="action.php?remove=<?php echo $row['id']; ?>" class="text danger lead" onclick="return confirm('Are you sure want to remove this item?');"><i class="fa fa-trash"></i></td>
                            </tr>
                            <?php
                                $grand_total += $row['total_price'];
                                }
                            ?>
                            <tr>
                                <td colspan="3"><a href="index_new.php" class="btn btn-success">Continue Shopping</a> </td>
                                <td colspan="2"><b>Grand Total</b></td>
                                <td><b>₹ <?php echo number_format($grand_total,2); ?></b></td>
                                
                                <td><a href="checkout.php" class="btn btn-info <?php if($grand_total>1){ echo '';} else { echo 'disabled';} ?>" <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){ echo '';} else { echo 'data-toggle="tooltip" title="Please login to your acccount"';} ?>> 
                                        <i class="fa fa-credit-card"></i>&nbsp;&nbsp;Checkout
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <section class="w3l-footer-22 mt-5">
	<!-- footer-22 -->
	<div class="footer-hny py-5">
		<div class="container py-lg-5">
			<div class="text-txt row">
				<div class="left-side col-lg-4">
					<h3><a class="logo-footer" href="index_new.php">
						Fonzone</a></h3>
					<!-- if logo is image enable this   
								<a class="navbar-brand" href="#index_new.html">
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

            //When user change the quantity by increasing or decreasing the number of input field, then there will update the total price of an item and update in cart table also. For this we need to use ajax to send a request to the server. 
            $(".itemQty").on('change',function(){           //On item change function I will create variables to store the value of id, product_price and quantity.
                var $el = $(this).closest('tr');            //id, product_price, qty are in while loop. So we have to use this type closest method to grab the value of id, product_price and quantity. Here 'tr' is using because id, product_price, qty are in tr tag.

                var pid = $el.find(".pid").val();           //to grab the value of id from input field and assigning to var pid
                var pprice = $el.find(".pprice").val();     // "    "
                var qty = $el.find(".itemQty").val();

                location.reload(true);                      //For automatic reload (when user increase or decrease the quantity field).

                //Now here I write ajax code to send the id, total_price and no. of qty to the server. From the server I will update the cart with total_price and quantity.
                $.ajax({
                    url: 'action.php',
                    method: 'post',
                    cache: false,
                    data: {qty:qty,pid:pid,pprice:pprice},
                    success: function(response){    
                        console.log(response);
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

            $('[data-toggle="tooltip"]').tooltip();                 //For tooltip
        });
    </script>
</body>
</html>