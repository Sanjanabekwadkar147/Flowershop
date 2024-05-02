<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "FlowerShop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $cartItems = json_decode($_POST['cartItems'], true);

  foreach ($cartItems as $item) {
      $productName = $item['name'];
      $price = $item['price'];
      $quantity = isset($item['quantity']) ? $item['quantity'] : 1;
      $total = $price * $quantity;
      $orderId = $item['orderID']; 

      $sql = "INSERT INTO place_order (order_id, name, price, quantity, Total)
      VALUES ('$orderId', '$productName', $price, $quantity, $total)";

      if ($conn->query($sql) !== TRUE) {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
  }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  <style>

    .order-container {
      max-width: 1000px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    #cartCards {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .card {
      width: 80%;
      margin-bottom: 20px;
    }

    .card img {
      width: 100%;
      border-radius: 10px 10px 0 0;
    }

    .card-body {
      padding: 15px;
      margin-left: 10px;
    }

    .total {
      font-weight: bold;
      text-align: center;
      margin-top: 20px;
      font-size: 1.2em;
    }


    .btn-primary {
      margin-top: 20px;
    }

    .ratings {
      color: rgb(255, 136, 0);
    }
  </style>
</head>

<body>
<?php 
include 'header.php';
?>
  <div class="container order-container">
  <form id="orderForm" method="post" action="Order.php">
    <input type="hidden" id="cartItemsInput" name="cartItems">
</form>
    <h2>Your Shopping Cart</h2>
    <div class="container mt-4" id="cartCards"></div><br>
    <button class="btn btn-success" onclick="submitOrder()">Place Order</button>
    <div class="text-center mt-3">
    </div>
  </div>
  <br>
  <?php
  include('footer.php');
  ?>
  
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>

  <script>
    document.querySelector('.btn-success').addEventListener('click', function () {
    let cartItems = JSON.parse(localStorage.getItem('cart')) || [];
    document.getElementById('cartItemsInput').value = JSON.stringify(cartItems);
});
    window.onload = function () {
      displayCart();
    };

    function displayCart() {
      
      let cartItems = JSON.parse(localStorage.getItem('cart')) || [];
      let cartCountElement = document.getElementById('cartCount');
      cartCountElement.textContent = cartItems.length;
      let cartCards = document.getElementById('cartCards');
      let grandTotal = 0;

      cartCards.innerHTML = ''; 

      cartItems.forEach((item, index) => {
        let itemQuantity = parseInt(item.quantity) || 1; 
        let itemTotal = item.price * itemQuantity; 
        grandTotal += itemTotal; // 

        let cart = document.createElement('div');
        cart.className = 'card mb-3';
        cart.innerHTML = `
    <div class="row g-0">
        <div class="col-md-4">
            <img src="${item.image}" class="img-fluid rounded-start" alt="${item.name}">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">${item.name}</h5>
                <p class="card-text">Price: ${item.price} RS</p>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div><br>
                <p class="card-text">Quantity: <input type="number" min="1" max="10" value="${itemQuantity}" onchange="updateQuantity(${index}, this.value)"></p>
                <p class="card-text">Total: ${itemTotal} RS</p>
                <button class="btn btn-danger" onclick="deleteItem(${index})">Remove</button>
               
            </div>
        </div>
    </div>
`;
        cartCards.appendChild(cart);
      });

      // Display grand total
      let grandTotalContainer = document.createElement('div');
      grandTotalContainer.className = 'total';
      grandTotalContainer.textContent = `Grand Total: ${grandTotal} RS`;
      cartCards.appendChild(grandTotalContainer);
    }
    function submitOrder() {
    let cartItems = JSON.parse(localStorage.getItem('cart')) || [];
    
    
    cartItems.forEach((item, index) => {
        item.orderID = `ORD${index + 1}`;
    });

    document.getElementById('cartItemsInput').value = JSON.stringify(cartItems);

    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'addtocart.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            window.location.href = 'Order.php';
        }
    };
    xhr.send('cartItems=' + encodeURIComponent(JSON.stringify(cartItems)));
}


    // Function to update quantity
    function updateQuantity(index, newQuantity) {
      let cartItems = JSON.parse(localStorage.getItem('cart')) || [];
      cartItems[index].quantity = newQuantity;
      localStorage.setItem('cart', JSON.stringify(cartItems));
      displayCart();
    }

    // Function to delete an item from the cart
    function deleteItem(index) {
      let cartItems = JSON.parse(localStorage.getItem('cart')) || [];
      cartItems.splice(index, 1);
      localStorage.setItem('cart', JSON.stringify(cartItems));
      displayCart();
    }
  </script>
</body>

</html>
