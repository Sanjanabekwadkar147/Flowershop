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
				<img src="i24.jpg">
			</div>
			<div class="title">
				<h1>LoveGrow</h1>
				<p>price: 1100RS</p>
			</div>
			<div class="des">
				<a href="FlowerHamper.php?name=Love Grow&price=1100&image=i24.jpg"><button
						onclick="addToCart('LoveGrow', '1100','i24.jpg')">Add to cart</button></a>
			</div>
		</div>
		<div class="card" id="product2">
			<div class="image">
				<img src="i25.jpeg">
			</div>
			<div class="title">
				<h1>Floral Gift</h1>
				<p>price: 1240RS</p>
			</div>
			<div class="des">

				<a href="FlowerHamper.php?name=Floral Gift&price=1240&image=i25.jpeg"><button
						onclick="addToCart('Floral Gift', '1240','i25.jpeg')">Add to cart</button></a>
			</div>
		</div>
		<div class="card" id="product3">
			<div class="image">
				<img src="i26.jpeg">
			</div>
			<div class="title">
				<h1>Pink Bloom</h1>
			</div>
			<div class="des">
				<p>price: 645RS</p>
				<a href="FlowerHamper.php?name=Pink Bloom&price=645&image=i26.jpg"><button
						onclick="addToCart('Pink Bloom', '6450','i26.jpeg')">Add to cart</button></a>
			</div>
		</div>
		<div class="card" id="product4">
			<div class="image">
				<img src="i27.jpg">
			</div>
			<div class="title">
				<h1>Gift Basket </h1>
			</div>
			<div class="des">
				<p>price: 1195RS</p>
				<a href="FlowerHamper.php?name=Gift Basket&price=1195&image=i27.jpg"><button
						onclick="addToCart('Gift Basket', '1195','i27.jpg')">Add to cart</button></a>
			</div>
		</div>


		<div class="card" id="product5">
			<div class="image">
				<img src="i28.jpg">
			</div>
			<div class="title">
				<h1>Birthday Hamper</h1>
			</div>
			<div class="des">
				<p>price: 3000RS</p>
				<a href="FlowerHamper.php?name=Birthday Hamper&price=3000&image=i28.jpg"><button
						onclick="addToCart('Birthday Hamper', '3000','i28.jpg')">Add to cart</button></a>
			</div>
		</div>
		<div class="card" id="product6">
			<div class="image">
				<img src="i29.jpg">
			</div>
			<div class="title">
				<h1>LoveBloom Hamper </h1>
			</div>
			<div class="des">
				<p>price: 500RS</p>
				<a href="FlowerHamper.php?name=LoveBloom Hamper&price=500&image=i29.jpg"><button
						onclick="addToCart('LoveBloom Hamper', '500','i29.jpg')">Add to cart</button></a>
			</div>
		</div>
		<div class="card" id="product7">
			<div class="image">
				<img src="i30.jpg">
			</div>
			<div class="title">
				<h1>Peachy Chocbox</h1>
			</div>
			<div class="des">
				<p>price: 600RS</p>
				<a href="FlowerHamper.php?name=Peachy Chocbox&price=600&image=i30.jpg"><button
						onclick="addToCart('Peachy Chocbox', '600','i30.jpg')">Add to cart</button></a>
			</div>
		</div>
		<div class="card" id="product8">
			<div class="image">
				<img src="i31.jpeg">
			</div>
			<div class="title">
				<h1>Country Garden</h1>
			</div>
			<div class="des">
				<p>price: 3500RS</p>
				<a href="FlowerHamper.php?name=Country Garden&price=3500&image=i31.jpg"><button
						onclick="addToCart('Country Garden', '3500','i31.jpeg')">Add to cart</button></a>
			</div>
		</div>


		<div class="card" id="product9">
			<div class="image">
				<img src="i32.jpg">
			</div>
			<div class="title">
				<h1>Floral Hamper</h1>
			</div>
			<div class="des">
				<p>price: 1100RS</p>
				<a href="FlowerHamper.php?name=Floral Hamper&price=1100&image=i32.jpg"><button
						onclick="addToCart('Floral Hamper', '1100','i32.jpg')">Add to cart</button></a>
			</div>
		</div>
		<div class="card" id="product10">
			<div class="image">
				<img src="i33.jpg">
			</div>
			<div class="title">
				<h1>Pastel Pink</h1>
			</div>
			<div class="des">
				<p>price: 1095RS</p>
				<a href="FlowerHamper.php?name=Pastel Pink&price=1950&image=i33.jpg"><button
						onclick="addToCart('Pastel Pink', '1095','i33.jpg')">Add to cart</button></a>
			</div>
		</div>
		<div class="card" id="product11">
			<div class="image">
				<img src="i34.jpg">
			</div>
			<div class="title">
				<h1>Red Bloom</h1>
			</div>
			<div class="des">
				<p>price: 1250RS</p>
				<a href="FlowerHamper.php?name=Red Bloom&price=1250&image=i34.jpg"><button
						onclick="addToCart('Red Bloom', '1250','i34.jpg')">Add to cart</button></a>
			</div>
		</div>
		<div class="card" id="product12">
			<div class="image">
				<img src="i35.jpg">
			</div>
			<div class="title">
				<h1>Regal Bloom</h1>
			</div>
			<div class="des">
				<p>price: 950RS</p>
				<a href="FlowerHamper.php?name=Regal Bloom&price=950&image=i35.jpg"><button
						onclick="addToCart('Regal Bloom', '950','i35.jpg')">Add to cart</button></a>
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