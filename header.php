<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">Flower Shop</a> -->&nbsp;
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php" style="color: white;">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Aboutus.php" style="color: white;">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Products.php" style="color: white;">PRODUCTS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color: white;">
                            SHOP
                        </a>
                        <ul class="dropdown-menu" style="background-color: gray;">
                            <li><a class="dropdown-item" href="FlowerHamper.php" style="color: black;">FLOWER
                                    HAMPER</a></li>
                            <li><a class="dropdown-item" href="FlowerBooquet.php" style="color: black;">FLOWER
                                    BOUQUET</a></li>
                            <li><a class="dropdown-item" href="FlowerBasket.php" style="color: black;">FLOWER
                                    BASKET</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contatctus.php" style="color: white; ">CONTACT US</a>
                    </li>
                </ul>
                <div class="login-icon d-flex align-items-center">
                    <a href="addtocart.php" id="cartLink" data-bs-toggle="popover" data-bs-placement="bottom"
                        title="Shopping Cart" class="d-flex align-items-center" style="color: white; ">
                        CART <img src="add-cart.png" alt="Cart" class="ms-2">
                        <span class="badge bg-danger cart-badge" id="cartCount"></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>


  <style>
    .custom-navbar {
    background-color: gray;
  }
  
    .login-icon {
      display: flex;
      margin-left: auto;
    }

    .login-icon1 {
      display: flex;
      margin-left: 20px;
    }

    .login-icon a {
      text-decoration: none;
      color: black;
    }

    .login-icon1 a {
      text-decoration: none;
      color: black;
    }

    .login-icon img {
      width: 30px;
    }

    .login-icon1 img {
      width: 30px;
    }

    /* Default styling for the cart badge */
    #cartLink {
      position: relative;
    }

    .cart-badge {
      position: absolute;
      top: -6px;
      right: -6px;
      background-color: red;
      color: white;
      border-radius: 30%;
      padding: 0.3em 0.5em;
      font-size: 0.7em;
    }


    /* Style for the navbar when collapsed */
    @media (max-width: 767px) {
      .navbar-collapse {
        justify-content: space-between;
      }

      .navbar-nav {
        margin-bottom: 10px;
      }

      .login-icon {
        margin-right: auto;
        margin-top: 15px;
        /* Adjust as needed */
      }

      .cart-badge {
        font-size: 12px;
      }
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha384-ojB7TM1BhL4sDScUGQz4M4f3RS4H/G9mEiNE4Mp4KcASQ6gW+RXXBEnzLRIfti1g"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-EAgZImt5Ic+8TrbNXUuHqkbrGhkkfmmFqFqC7fGCV9MQOuE2bn5CprWcPPvgm2n1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script>
        function displayCart() {
            let cartItems = JSON.parse(localStorage.getItem('cart')) || [];
            let cartCountElement = document.getElementById('cartCount');
            cartCountElement.textContent = cartItems.length;
        }
        window.onload = function () {
            displayCart();
        };
    </script>
</body>

</html>