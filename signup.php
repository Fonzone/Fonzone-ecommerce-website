<!DOCTYPE html>
<html>
<head>
<title>Fonzone Signup Page</title>

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
    
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->
    

	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
	<!-- //web font -->

</head>
<body>

<!-- main -->
<div class="w3layouts-main"> 
	<div class="bg-layer">
		<h1>Slide Login form</h1>
		<div class="header-main">
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom">
				<form action="#" method="post">
                    <div class="icon1">
						<span class="fa fa-user"></span>
						<input type="text" placeholder="Full Name" required="" name="name"/>
                    </div>
                    <div class="icon1">
						<span class="fa fa-user"></span>
						<input type="text" placeholder="Mobile Number" required="" name="mobile"/>
					</div>
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="email" placeholder="Email Address" required="" name="email"/>
					</div>
					<div class="icon1">
						<span class="fa fa-lock"></span>
						<input type="password" placeholder="Password" required="" name="password"/>
					</div>
					<div class="login-check">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i> Keep me logged in</label>
					</div>
					<div class="bottom">
						<input type="submit" class="btn" value="Sign Up" name="signup"/>
					</div>
				</form>	
			</div>
			<div class="social">
				<ul>
					<li>or Signup using : </li>
					<li><a href="#" class="facebook"><span class="fa fa-facebook"></span></a></li>
					<li><a href="#" class="twitter"><span class="fa fa-twitter"></span></a></li>
					<li><a href="#" class="google"><span class="fa fa-google-plus"></span></a></li>
				</ul>
			</div>
		</div>
		
		<!-- copyright -->
		<div class="copyright">
			<p>© 2020 Fonzone. All rights reserved | Design by <a href="#" target="_blank">Dot KP</a></p>
		</div>
		<!-- //copyright --> 
	</div>
</div>	
<!-- //main -->
<?php
$con=mysqli_connect("localhost","root","","nihal");  //database connectivity
if(isset($_POST['sign']))
{
	$nam=$_POST['nam'];
	$mob=$_POST['mob'];
	$mail=$_POST['mail'];
	$psw=$_POST['psw'];

	$insert="insert into fonzone (Name,Mobile,Email,Password) values ('$nam','$mob','$mail','$psw')";

	mysqli_query($con,$insert);
	echo "Registered Successfully";
	echo "<a href='login.html'>Link</a>";
}
?>

</body>
</html>