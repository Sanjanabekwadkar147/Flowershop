<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Bootstrap demo</title>
   <script src="product.js" defer></script>
</head>

<body>
   <?php
   include 'header.php';
   ?>
<br>

   <div class="container">

      <h3 class="title"> Our Products </h3>

      <div class="products-container">

         <div class="product" data-name="p-1">
            <img src="i11.jpg" alt="">
            <h3>White Tulip</h3>
            <div class="price">3000 Rs</div>
         </div>

         <div class="product" data-name="p-2">
            <img src="i12.jpg" alt="">
            <h3>Pink Tulip</h3>
            <div class="price">1500 Rs</div>
         </div>

         <div class="product" data-name="p-3">
            <img src="i24.jpg" alt="">
            <h3>Love Grow</h3>
            <div class="price">1100 Rs</div>
         </div>

         <div class="product" data-name="p-4">
            <img src="i25.jpeg" alt="">
            <h3>Floral Gift</h3>
            <div class="price">1240 Rs</div>
         </div>

         <div class="product" data-name="p-5">
            <img src="i41.jpg" alt="">
            <h3>Rougue</h3>
            <div class="price">2120 Rs</div>
         </div>

         <div class="product" data-name="p-6">
            <img src="i42.jpg" alt="">
            <h3>Bloom</h3>
            <div class="price">2540 Rs</div>
         </div>
         <div class="product" data-name="p-7">
            <img src="i15.jpg" alt="">
            <h3>Pink Rose</h3>
            <div class="price">1000 Rs</div>
         </div>

         <div class="product" data-name="p-8">
            <img src="i26.jpeg" alt="">
            <h3>Pink Bloom</h3>
            <div class="price">650 Rs</div>
         </div>

         <div class="product" data-name="p-9">
            <img src="i43.jpg" alt="">
            <h3>Mixed Hamper</h3>
            <div class="price">2500 Rs</div>
         </div>

      </div>

   </div>

   <div class="products-preview">

      <div class="preview" data-target="p-1" id="product1">
         <i class="fas fa-times"></i>
         <img src="i11.jpg" alt="">
         <h3>White Tulip</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <div class="price">3000 Rs</div>
         <div class="buttons">
            <a href="Products.php?name=White Tulip&price=3000&image=i11.jpg" class="cart"
               onclick="addToCart('White Tulip',3000,'i11.jpg')">add to cart</a>
         </div>
      </div>

      <div class="preview" data-target="p-2" id="product2">
         <i class="fas fa-times"></i>
         <img src="i12.jpg" alt="">
         <h3>Pink Tulip</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <div class="price">1500 Rs</div>
         <div class="buttons">
            <a href="Products.php?name=Pink Tulip&price=1500&image=i12.jpg" class="cart"
               onclick="addToCart('Pink Tulip',1500,'i12.jpg')">add to cart</a>
         </div>
      </div>

      <div class="preview" data-target="p-3" id="product3">
         <i class="fas fa-times"></i>
         <img src="i24.jpg" alt="">
         <h3>Love Grow</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <div class="price">1100 Rs</div>
         <div class="buttons">
            <a href="Products.php?name=Love Grow&price=00&image=i24.jpg" class="cart"
               onclick="addToCart('Love Grow',1100,'i24.jpg')">add to cart</a>
         </div>
      </div>

      <div class="preview" data-target="p-4" id="product4">
         <i class="fas fa-times"></i>
         <img src="i25.jpeg" alt="">
         <h3>Floral Gift</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <div class="price">1240 Rs</div>
         <div class="buttons">

            <a href="Products.php?name=Floral Gift&price=1240&image=i25.jpg" class="cart"
               onclick="addToCart('Floral Gift',1240,'i25.jpeg')">add to cart</a>
         </div>
      </div>

      <div class="preview" data-target="p-5" id="product5">
         <i class="fas fa-times"></i>
         <img src="i41.jpg" alt="">
         <h3>Rougue</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>

         <div class="price">2120 Rs</div>
         <div class="buttons">

            <a href="Products.php?name=Rougue&price=2120&image=i41.jpg" class="cart"
               onclick="addToCart('Rougue',2120,'i41.jpg')">add to cart</a>
         </div>
      </div>

      <div class="preview" data-target="p-6" id="product6">
         <i class="fas fa-times"></i>
         <img src="i42.jpg" alt="">
         <h3>Bloom</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <div class="price">2540 Rs</div>
         <div class="buttons">

            <a href="Products.php?name=Bloom&price=2540&image=i42.jpg" class="cart"
               onclick="addToCart('Bloom',2540,'i42.jpg')">add to cart</a>
         </div>
      </div>
      <div class="preview" data-target="p-7" id="product7">
         <i class="fas fa-times"></i>
         <img src="i15.jpg" alt="">
         <h3>Pink Rose</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <div class="price">1000 Rs</div>
         <div class="buttons">

            <a href="Products.php?name=Pink Rose&price=1000&image=i15.jpg" class="cart"
               onclick="addToCart('Pink Rose',1000,'i15.jpg')">add to cart</a>
         </div>
      </div>
      <div class="preview" data-target="p-8" id="product8">
         <i class="fas fa-times"></i>
         <img src="i26.jpeg" alt="">
         <h3>Pink Bloom</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <div class="price">650 Rs</div>
         <div class="buttons">
            <a href="Products.php?name=Pink Bloom&price=650&image=i26.jpg" class="cart"
               onclick="addToCart('Pink Bloom',650,'i26.jpeg')">add to cart</a>
         </div>
      </div>
      <div class="preview" data-target="p-9" id="product9">
         <i class="fas fa-times"></i>
         <img src="i43.jpg" alt="">
         <h3>Mixed Hamper</h3>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <div class="price">2500 Rs</div>
         <div class="buttons">
            <a href="Products.php?name=Mixed Hamper&price=2500&image=i43.jpg" class="cart"
               onclick="addToCart('Mixed Hamper',2500,'i43.jpg')">add to cart</a>
         </div>
      </div>


   </div>
   <?php
  include('footer.php');
  ?>


   <style>
      @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600&display=swap');

      * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         outline: none;
         border: none;
         text-decoration: none;
         transition: all .2s linear;
         text-transform: capitalize;
      }

      html {
         font-size: 65%;
         overflow-x: hidden;
      }

      body {
         background: #eee;
      }

      .container {
         max-width: 1200px;
         margin: 0 auto;
         padding: 3rem 2rem;
      }

      .container .title {
         font-size: 3.5rem;
         color: #444;
         margin-bottom: 3rem;
         text-transform: uppercase;
         text-align: center;
      }

      .container .products-container {
         display: grid;
         grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
         gap: 2rem;
      }

      .container .products-container .product {
         text-align: center;
         padding: 3rem 2rem;
         background: #fff;
         box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
         outline: .1rem solid #ccc;
         outline-offset: -1.5rem;
         cursor: pointer;
      }

      .container .products-container .product:hover {
         outline: .2rem solid #222;
         outline-offset: 0;
      }

      .container .products-container .product img {
         height: 25rem;
      }

      .container .products-container .product:hover img {
         transform: scale(.9);
      }

      .container .products-container .product h3 {
         padding: .5rem 0;
         font-size: 2rem;
         color: #444;
      }

      .container .products-container .product:hover h3 {
         color: #27ae60;
      }

      .container .products-container .product .price {
         font-size: 2rem;
         color: #444;
      }

      .products-preview {
         position: fixed;
         top: 0;
         left: 0;
         min-height: 100vh;
         width: 100%;
         background: rgba(0, 0, 0, .8);
         display: none;
         align-items: center;
         justify-content: center;
      }

      .products-preview .preview {
         display: none;
         padding: 2rem;
         text-align: center;
         background: #fff;
         position: relative;
         margin: 2rem;
         width: 40rem;
      }

      .products-preview .preview.active {
         display: inline-block;
      }

      .products-preview .preview img {
         height: 30rem;
      }

      .products-preview .preview .fa-times {
         position: absolute;
         top: 1rem;
         right: 1.5rem;
         cursor: pointer;
         color: #444;
         font-size: 4rem;
      }

      .products-preview .preview .fa-times:hover {
         transform: rotate(90deg);
      }

      .products-preview .preview h3 {
         color: #444;
         padding: .5rem 0;
         font-size: 2.5rem;
      }

      .products-preview .preview .stars {
         padding: 1rem 0;
         font-size: 1.7rem;
      }

      .products-preview .preview .stars i {
         color: #27ae60;
      }

      .products-preview .preview .stars span {
         color: #999;
      }

      .products-preview .preview p {
         line-height: 1.5;
         padding: 1rem 0;
         font-size: 1.6rem;
         color: #777;
      }

      .products-preview .preview .price {
         padding: 1rem 0;
         font-size: 2.5rem;
         color: #27ae60;
      }

      .products-preview .preview .buttons {
         display: flex;
         gap: 1.5rem;
         flex-wrap: wrap;
         margin-top: 1rem;
      }

      .products-preview .preview .buttons a {
         flex: 1 1 16rem;
         padding: 1rem;
         font-size: 1.8rem;
         color: #444;
         border: .1rem solid #444;
      }

      .products-preview .preview .buttons a.cart {
         background: #444;
         color: #fff;
      }

      .products-preview .preview .buttons a.cart:hover {
         background: #111;
      }

      .products-preview .preview .buttons a.buy:hover {
         background: #444;
         color: #fff;
      }

      @media (max-width:991px) {

         html {
            font-size: 55%;
         }

      }

      @media (max-width:768px) {

         .products-preview .preview img {
            height: 25rem;
         }

      }

      @media (max-width:450px) {

         html {
            font-size: 45%;
         }

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