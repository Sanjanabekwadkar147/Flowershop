<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap demo</title>
</head>

<body>
<?php
include 'header.php';
?>
	<div class="main">

		<div class="card" id="product1">
			<div class="image">
				<img src="i11.jpg">
			</div>
			<div class="title">
				<h1>White Tulip</h1>
				<p>price: 3000RS</p>
			</div>
			<div class="des">
				<a href="FlowerBooquet.php?name=White Tulip&price=3000&image=i11.jpg"><button
						onclick="addToCart('White Tulip', 3000,'i11.jpg')">Add to cart</button></a>
			</div>
		</div>
		<div class="card" id="product2">
			<div class="image">
				<img src="i12.jpg">
			</div>
			<div class="title">
				<h1>Pink Tulip</h1>
				<p>price: 1500RS</p>
			</div>
			<div class="des">

				<a href="FlowerBooquet.php?name=Pink Tulip&price=1500&image=i12.jpg"><button
						onclick="addToCart('Pink Tulip', 1500,'i12.jpg')">Add to cart</button></a>
			</div>
		</div>
		<div class="card" id="product3">
			<div class="image">
				<img src="i13.jpg">
			</div>
			<div class="title">
				<h1>Purple Tulip</h1>
			</div>
			<div class="des">
				<p>price: 2500RS</p>
				<a href="FlowerBooquet.php?name=Purple Tulip&price=2500&image=i13.jpg"><button
						onclick="addToCart('Purple Tulip', 2500,'i13.jpg')">Add to cart</button></a>
			</div>
		</div>
		<div class="card" id="product4">
			<div class="image">
				<img src="i14.jpg">
			</div>
			<div class="title">
				<h1>Mixed Tulip</h1>
			</div>
			<div class="des">
				<p>price: 2000RS</p>
				<a href="FlowerBooquet.php?name=Mixed Tulip&price=2000&image=i14.jpg"><button
						onclick="addToCart('Mixed Tulip', 2000,'i14.jpg')">Add to cart</button></a>
			</div>
		</div>


		<div class="card" id="product5">
			<div class="image">
				<img src="i15.jpg">
			</div>
			<div class="title">
				<h1>Pink Rose</h1>
			</div>
			<div class="des">
				<p>price: 1000RS</p>
				<a href="FlowerBooquet.php?name=Pink Rose&price=1000&image=i15.jpg"><button
						onclick="addToCart('Pink Rose', 1000,'i15.jpg')">Add to cart</button></a>
			</div>
		</div>
		<div class="card" id="product6">
			<div class="image">
				<img src="i16.jpg">
			</div>
			<div class="title">
				<h1>Mixed Rose</h1>
			</div>
			<div class="des">
				<p>price: 2500RS</p>
				<a href="FlowerBooquet.php?name=Mixed Rose&price=2500&image=i16.jpg"><button
						onclick="addToCart('Mixed Rose', 2500,'i16.jpg')">Add to cart</button></a>
			</div>
		</div>
		<div class="card" id="product7">
			<div class="image">
				<img src="i17.jpg">
			</div>
			<div class="title">
				<h1>White Rose</h1>
			</div>
			<div class="des">
				<p>price: 2700RS</p>
				<a href="FlowerBooquet.php?name=White Rose&price=2700&image=i17.jpg"><button
						onclick="addToCart('White Rose', 2700,'i17.jpg')">Add to cart</button></a>
			</div>
		</div>
		<div class="card" id="product8">
			<div class="image">
				<img src="i18.jpg">
			</div>
			<div class="title">
				<h1>Red Rose</h1>
			</div>
			<div class="des">
				<p>price: 1500RS</p>
				<a href="FlowerBooquet.php?name=White Tulip&price=1500&image=i18.jpg"><button
						onclick="addToCart('Red Rose', 1500,'i18.jpg')">Add to cart</button></a>
			</div>
		</div>


		<div class="card" id="product9">
			<div class="image">
				<img src="i19.jpg">
			</div>
			<div class="title">
				<h1>Mixed Gerbera</h1>
			</div>
			<div class="des">
				<p>price: 700RS</p>
				<a href="FlowerBooquet.php?name=Mixed Gerbera&price=700&image=i19.jpg"><button
						onclick="addToCart('Mixed Gerbera', 700,'i19.jpg')">Add to cart</button></a>
			</div>
		</div>
		<div class="card" id="product10">
			<div class="image">
				<img src="i20.jpg">
			</div>
			<div class="title">
				<h1>White Gerbera</h1>
			</div>
			<div class="des">
				<p>price: 1000RS</p>
				<a href="FlowerBooquet.php?name=White Gerbera&price=1000&image=i20.jpg"><button
						onclick="addToCart('White Gerbera', 1000,'i20.jpg')">Add to cart</button></a>
			</div>
		</div>
		<div class="card" id="product11">
			<div class="image">
				<img src="i21.jpg">
			</div>
			<div class="title">
				<h1>Red Gerbera</h1>
			</div>
			<div class="des">
				<p>price: 1500RS</p>
				<a href="FlowerBooquet.php?name=Red Gerbera&price=1500&image=i21.jpg"><button
						onclick="addToCart('Red Gerbera', 1500,'i21.jpg')">Add to cart</button></a>
			</div>
		</div>
		<div class="card" id="product12">
			<div class="image">
				<img src="i22.jpeg">
			</div>
			<div class="title">
				<h1>Pink Gerbera</h1>
			</div>
			<div class="des">
				<p>price: 2000RS</p>
				<a href="FlowerBooquet.php?name=Pink Gerbera&price=2000&image=i22.jpeg"><button
						onclick="addToCart('Pink Gerbera', 2000,'i22.jpeg')">Add to cart</button></a>
			</div>
		</div>
	</div>
	<br>
<?php
  include('footer.php');
?>

	<style>
		* {
			margin: 0px;
			padding: 0px;
		}

		body {
			background-color: #eee;
		}

		.card {
			width: 270px;
			/*background-color: gray;*/
			margin-top: 40px;
			margin-left: 65PX;
			margin-right: 20px;
			box-shadow: 2px 2px 10px black;
			display: inline-block;
		}

		.card:hover img {
			transform: scale(1.1) rotate3d(0, 0, 1, 360deg);
		}

		.image img {
			width: 100%;
			height: 265px;
		}

		.title {
			text-align: center;
		}

		.des {
			text-align: center;
		}

		.des button {
			margin-bottom: 10px;
			margin-top: 10px;
			background-color: plum;
			border: 1px solid black;
			border-radius: 5px;
			padding: 5px;
		}

		button:hover {
			background-color: maroon;
			color: white;
			cursor: pointer;
		}

		.des button btn {
			justify-content: center;
		}

		.btn {
			display: flex;
			justify-content: center;
			margin-top: 20px;
		}

		.btn button {
			background-color: #4c68af;
			color: white;
			border: none;
			padding: 10px 20px;
			border-radius: 4px;
			cursor: pointer;
		}

		.btn button:hover {
			background-color: #a6a9ab;
		}
	</style>
	<script>
		function addToCart(productName, productPrice, productImage) {
			// Retrieve existing cart items from local storage or initialize an empty array
			let cartItems = JSON.parse(localStorage.getItem('cart')) || [];

			// Add the current product to the cart
			cartItems.push({ name: productName, price: productPrice, image: productImage });

			// Save the updated cart back to local storage
			localStorage.setItem('cart', JSON.stringify(cartItems));

			// Update the cart count and display it
			updateCartCount();
		}

	</script>
</body>

</html>