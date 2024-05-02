<!DOCTYPE html>
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
    <div class="container order-container">
        <h2>Your Order Details</h2>
        <div class="container mt-4" id="orderCards"></div>
        <div class="total" id="orderTotal"></div>
    </div>
    <br>
    <?php
    include('footer.php');
    ?>
    <style>
        /* Style for the navbar when collapsed */
        @media (max-width: 767px) {

            .cart-badge {
                font-size: 12px;
            }

            h2 {
                font-size: 1.2em;
                /* Adjust the font size for smaller screens */
            }

            .total {
                font-size: 1em;
                /* Adjust the font size for smaller screens */
            }
        }

        .order-container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 1.5em;
            /* Adjust the font size as needed */
        }

        .total {
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
            font-size: 1.2em;
        }

        #orderCards {
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
        }


        .btn-primary {
            margin-top: 20px;
        }

        /* Media query for responsiveness */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: flex-start;
            }

            .nav-links li {
                display: block;
                margin-bottom: 10px;
            }

            .login-icon {
                margin-top: 10px;
            }
        }

        @media (max-width: 767px) {
            .order-container {
                padding: 10px;
            }

            h2 {
                font-size: 1.2em;
            }

            .total {
                font-size: 1em;
            }

            #orderCards .card {
                width: 100%;
            }

            .card img {
                border-radius: 10px;
            }
        }
    </style>
    <script>
         window.onload = function () {
            displayOrderDetails();
        };

        function displayOrderDetails() {
            let orderCards = document.getElementById('orderCards');
            let orderTotal = document.getElementById('orderTotal');

            let cartItems = JSON.parse(localStorage.getItem('cart')) || [];
            let cartCountElement = document.getElementById('cartCount');
            cartCountElement.textContent = cartItems.length;
            let grandTotal = 0;

            cartItems.forEach((item, index) => {
                let itemQuantity = item.quantity || 1;
                let productTotal = item.price * itemQuantity;
                let orderCard = document.createElement('div');
                orderCard.className = 'card mb-3';
                orderCard.innerHTML = `
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="${item.image}" class="img-fluid rounded-start" alt="${item.name}">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">${item.name} - ${generateOrderID(index)}</h5>
                    <p class="card-text">Price: ${item.price} RS</p>
                    <p class="card-text">Quantity: ${itemQuantity}</p>
                    <p class="card-text">Product Total: ${productTotal} RS</p>
                    <p class="card-text">Payment Status: UnPaid</p>
                  </div>
                </div>
              </div>
            `;
                orderCards.appendChild(orderCard);

                grandTotal += productTotal;
            });

            orderTotal.textContent = `Order Total: ${grandTotal} RS`;
            orderCards.appendChild(orderTotal);
        }

        function generateOrderID(index) {
            return `ORD${index + 1}`;
        }
    </script>
</body>

</html>
