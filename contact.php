<!DOCTYPE html>
<html>
<head>
	<title></title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<link rel="stylesheet" type="text/css" href="css/cont.css">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>

<body>
	<div class="container">
		<div class="navbar">
			<div class="logo">
				<img src="./images/logo.png" width="125px">
			</div>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="products.php">Products</a></li>
					<li><a href="details.php">Product Details</a></li>
					<li><a class="current" href="contact.php">Contact</a></li>
					<li><a href="sign_up.php">Sign Up Here</a></li>
					<li><a href="login.php">Login Here</a></li>
				</ul>
			</nav>
			<img src="./images/cart.png" width="30px" height="30px">
		</div>
	</div>

	<div class="wrapper">
		<div class="title">
			<h1>contact us form</h1>
		</div>

		<form action="" method="POST">
			<div class="contact-form">
				<div class="input-fields">
					<input type="text" class="input" placeholder="Name" name="cName">
      				<input type="text" class="input" placeholder="Email Address" name="cEmail">
      				<input type="text" class="input" placeholder="Phone" name="cPhone">
      				<input type="text" class="input" placeholder="Subject" name="cSubject">
				</div>
				<div class="msg">
					<textarea placeholder="Message" name="cMessage"></textarea>
					<input type="submit" value="submit" class="btn" name="submit">
				</div>
			</div>
		</form>
		
	</div>

	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>

<div class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col-1">
				<h3>Download Our App</h3>
				<p>Download App for Android and ios mobile phone.</p>
				<div class="app-logo">
					<img src="./images/play-store.png">
					<img src="./images/app-store.png">
				</div>
			</div>
			<div class="footer-col-2">
				<img src="./images/logo-white.png">
				<p>Our purpose is to sustainably make the pleasure<br> and benefits of
				food items accessible to the many.</p>
			</div>
			<div class="footer-col-3">
				<h3>Useful Links</h3>
				<ul>
					<li>Coupons</li>
					<li>Blog Post</li>
					<li>Return Policy</li>
					<li>Join Affiliate</li>
				</ul>
			</div>
			<div class="footer-col-4">
				<h3>Follow Us</h3>
				<ul>
					<li>Facebook</li>
					<li>Twitter</li>
					<li>Instagram</li>
					<li>YouTube</li>
				</ul>
			</div>
		</div>
		<hr>
		<p class="copyright">Copyright 2020 - Easy Tutorials</p>
	</div>
</div>	

</body>

</html>

<?php

include 'connection.php';

if(isset($_POST['submit'])) {
	
	$Name = $_POST['cName'];
	$Email = $_POST['cEmail'];
	$Phone = $_POST['cPhone'];
	$Subject = $_POST['cSubject'];
	$Message = $_POST['cMessage'];
	
	$insertquery = " insert into c_details(name,email,phone,subject,message) values('$Name','$Email','$Phone','$Subject','$Message') ";

	$res = mysqli_query($conn,$insertquery);

	if($res) {
		?>
		<script>
			alert("data inserted properly");
		</script>
		<?php
	}else {
		?>
		<script>
			alert("data has not been inserted properly");
		</script>
		<?php
	}
}

?>