<!DOCTYPE html>
<html>
<head>
	<title>All Products</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
					<li><a class="current" href="details.php">Product Details</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="sign_up.php">Sign Up Here</a></li>
					<li><a href="login.php">Login Here</a></li>
				</ul>
			</nav>
			<img src="./images/cart.png" width="30px" height="30px">
		</div>
	</div>

<div class="small-container single-product">
	<div class="row">
		<div class="col-2">
			<img src="./images/gallery-1.jpg" width="100%" id="productImg">
			<div class="small-img-row">
				<div class="small-img-col">
					<img src="./images/gallery-1.jpg" width="100%" class="small-img">
				</div>
				<div class="small-img-col">
					<img src="./images/gallery-2.jpg" width="100%" class="small-img">
				</div>
				<div class="small-img-col">
					<img src="./images/gallery-3.jpg" width="100%" class="small-img">
				</div>
				<div class="small-img-col">
					<img src="./images/gallery-4.jpg" width="100%" class="small-img">
				</div>
			</div>
		</div>
		<div class="col-2">
			<p>Home / T-Shirt</p>
			<h1>Red Printed T-shirt by HRX</h1>
			<h4>$50.00</h4>
			<select>
				<option>Select Size</option>
				<option>XXL</option>
				<option>XL</option>
				<option>Large</option>
				<option>Medium</option>
				<option>Small</option>
			</select>
			<input type="number" value="1">
			<a href="" class="btn">Add To Cart</a>
			<h3>Product Details <i class="fa fa-indent"></i></h3>
			<br>
			<p>Give your summer wardrobe a style upgrade with the HRX
			Men's Active T-Shirt. Team it with a pair of shorts for
			your morning workout or a denims for an evening out with
			the guys.</p>
		</div>
	</div>
</div>	

<div class="small-container">
	<div class="rowv row-2">
		<h2>Related Products</h2>
	</div>
</div>


<div class="small-container">
	<div class="row">
		<div class="col-4">
			<img src="./images/product-9.jpg">
			<h4>Red Printed Tshirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>$50.00</p>
		</div>
		<div class="col-4">
			<img src="./images/product-10.jpg">
			<h4>Red Printed Tshirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>$50.00</p>
		</div>
		<div class="col-4">
			<img src="./images/product-11.jpg">
			<h4>Red Printed Tshirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>$50.00</p>
		</div>
		<div class="col-4">
			<img src="./images/product-12.jpg">
			<h4>Red Printed Tshirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>$50.00</p>
		</div>
	</div>

</div>


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

<script>
	var productImg = document.getElementById("productImg");
	var smallimg = document.getElementsByClassName("small-img");

	smallimg[0].onclick = function() {
		productImg.src = smallimg[0].src;
	}

	smallimg[1].onclick = function() {
		productImg.src = smallimg[1].src;
	}

	smallimg[2].onclick = function() {
		productImg.src = smallimg[2].src;
	}

	smallimg[3].onclick = function() {
		productImg.src = smallimg[3].src;
	}
</script>
</body>

</html>