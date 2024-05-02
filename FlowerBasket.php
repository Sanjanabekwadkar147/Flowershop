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
				<img src="i36.jpg">
			</div>
			<div class="title">
				<h1>Beige</h1>
				<p>price: 1245RS</p>
			</div>
			<div class="des">
				<a href="FlowerBasket.php?name=Beige&price=1245&image=i36.jpg">
					<button onclick="addToCart('Beige', '1245', 'i36.jpg')">Add to cart</button>
				</a>
			</div>
		</div>
		<div class="card" id="product2">
			<div class="image">
				<img src="i37.jpg">
			</div>
			<div class="title">
				<h1>Adam's</h1>
				<p>price: 800RS</p>
			</div>
			<div class="des">
				<a href="FlowerBasket.php?name=Adam's&price=800&image=i37.jpg"><button
						onclick="addToCart('Adams', '800','i37.jpg')">Add to cart</button></a>
			</div>
		</div>
		<div class="card" id="product3">
			<div class="image">
				<img src="i38.jpg">
			</div>
			<div class="title">
				<h1>Floral</h1>
				<p>price: 2300RS</p>
			</div>
			<div class="des">
				<a href="FlowerBasket.php?name=Floral&price=2300&image=i38.jpg"><button
						onclick="addToCart('Floral', '2300','i38.jpg')">Add to cart</button></a>
			</div>
		</div>
		<div class="card" id="product4">
			<div class="image">
				<img src="i39.jpg">
			</div>
			<div class="title">
				<h1>Healthy</h1>
				<p>price: 3000RS</p>
			</div>
			<div class="des">

				<a href="FlowerBasket.php?name=Healthy&price=3000&image=i39.jpg"><button
						onclick="addToCart('Healthy', '3000','i39.jpg')">Add to cart</button></a>
			</div>
		</div>


		<div class="card" id="product5">
			<div class="image">
				<img src="i40.jpg">
			</div>
			<div class="title">
				<h1>Coral</h1>
				<p>price: 1100RS</p>
			</div>
			<div class="des">

				<a href="FlowerBasket.php?name=Coral&price=1100&image=i40.jpg"><button
						onclick="addToCart('Coral', '1100','i40.jpg')">Add to cart</button></a>
			</div>
		</div>
		<div class="card" id="product6">
			<div class="image">
				<img src="i41.jpg">
			</div>
			<div class="title">
				<h1>Rougue</h1>
				<p>price: 2120RS</p>
			</div>
			<div class="des">

				<a href="FlowerBasket.php?name=Rougue&price=2120&image=i41.jpg"><button
						onclick="addToCart('Rouge', '2120','i41.jpg')">Add to cart</button></a>
			</div>
		</div>
		<div class="card" id="product7">
			<div class="image">
				<img src="i42.jpg">
			</div>
			<div class="title">
				<h1>Bloom</h1>
				<p>price: 2540RS</p>
			</div>
			<div class="des">

				<a href="FlowerBasket.php?name=Bloom&price=2540&image=i42.jpg"><button
						onclick="addToCart('Bloom', '2540','i42.jpg')">Add to cart</button></a>
			</div>
		</div>
		<div class="card" id="product8">
			<div class="image">
				<img src="i43.jpg">
			</div>
			<div class="title">
				<h1>Mixed</h1>
				<p>price: 2500RS</p>
			</div>
			<div class="des">

				<a href="FlowerBasket.php?name=Mixed&price=2500&image=i43.jpg"><button
						onclick="addToCart('Mixed', '2500','i43.jpg')">Add to cart</button></a>
			</div>
		</div>


		<div class="card" id="product9">
			<div class="image">
				<img src="i44.jpg">
			</div>
			<div class="title">
				<h1>Nutty Delights</h1>
				<p>price: 1400RS</p>
			</div>
			<div class="des">

				<a href="FlowerBasket.php?name=Nutty Delights&price=1400&image=i44.jpg"><button
						onclick="addToCart('Nutty Delights', '1400','i44.jpg')">Add to cart</button></a>
			</div>
		</div>
		<div class="card" id="product10">
			<div class="image">
				<img src="i45.jpg">
			</div>
			<div class="title">
				<h1>MeadowBox</h1>
				<p>price: 2100RS</p>
			</div>
			<div class="des">

				<a href="FlowerBasket.php?name=MeadowBox&price=2100&image=i45.jpg"><button
						onclick="addToCart('Meadow Box', '2100','i45.jpg')">Add to cart</button></a>
			</div>
		</div>
		<div class="card" id="product11">
			<div class="image">
				<img src="i46.jpg">
			</div>
			<div class="title">
				<h1>FlowerConfetti</h1>
				<p>price: 1500RS</p>
			</div>
			<div class="des">

				<a href="FlowerBasket.php?name=FlowerConfetti&price=1500&image=i46.jpg"><button
						onclick="addToCart('Flower Confetti', '1500','i46.jpg')">Add to cart</button></a>
			</div>
		</div>
		<div class="card" id="product12">
			<div class="image">
				<img src="i47.jpg">
			</div>
			<div class="title">
				<h1>SunRediance</h1>
				<p>price: 750RS</p>
			</div>
			<div class="des">

				<a href="FlowerBasket.php?name=SunRediancel&price=750&image=i47.jpg"><button
						onclick="addToCart('Sun Rediance', '750','i47.jpg')">Add to cart</button></a>
			</div>
		</div>
	</div>
	<br>
<?php
  include('footer.php');
?>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600&display=swap');

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
			background-color: rgb(227, 223, 223);
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