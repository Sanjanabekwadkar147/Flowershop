<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>company</h4>
          <ul>
            <li><a href="Aboutus.php">about us</a></li>
            <li><a href="Products.php">our products</a></li>
            <li><a href="Contatctus.php">Contatctus</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>get help</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">shipping</a></li>
            <li><a href="#">returns</a></li>
            <li><a href="#">order status</a></li>
            <li><a href="#">payment options</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>online shop</h4>
          <ul>
            <li><a href="FlowerBasket.php">FlowerBasket</a></li>
            <li><a href="FlowerBooquet.php">FlowerBooquet</a></li>
            <li><a href="FlowerHamper.php">FlowerHamper</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a
              href="https://m.facebook.com/story.php?story_fbid=pfbid0ehngJJowZY5oiHGzNgZozUs2wSLmJuhRPN2vSi1ynmB7w7DnvRfwLkzSXSzTxA4pl&id=100092211640947&mibextid=Nif5oz"><i
                class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/__sanjuuuu__14?igsh=dTJjd2FqMDYybGoz"><i
                class="fab fa-instagram"></i></a>
            <a
              href="https://www.linkedin.com/in/sanjana-bekwadkar-5a045524b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i
                class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <style>
     .footer {
      background-color: #24262b;
      padding: 70px 0;
    }

    .footer-col {
      width: 25%;
      padding: 0 15px;
    }

    .footer-col h4 {
      font-size: 18px;
      color: #ffffff;
      text-transform: capitalize;
      margin-bottom: 35px;
      font-weight: 500;
      position: relative;
    }

    .footer-col h4::before {
      content: '';
      position: absolute;
      left: 0;
      bottom: -10px;
      background-color: #e91e63;
      height: 2px;
      box-sizing: border-box;
      width: 50px;
    }

    .footer-col ul li:not(:last-child) {
      margin-bottom: 10px;
    }

    .footer-col ul li a {
      font-size: 16px;
      text-transform: capitalize;
      color: #ffffff;
      text-decoration: none;
      font-weight: 300;
      color: #bbbbbb;
      display: block;
      transition: all 0.3s ease;
    }

    .footer-col ul li a:hover {
      color: #ffffff;
      padding-left: 8px;
    }

    .footer-col .social-links a {
      display: inline-block;
      height: 40px;
      width: 40px;
      background-color: rgba(255, 255, 255, 0.2);
      margin: 0 10px 10px 0;
      text-align: center;
      line-height: 40px;
      border-radius: 50%;
      color: #ffffff;
      transition: all 0.5s ease;
    }

    .footer-col .social-links a:hover {
      color: #24262b;
      background-color: #ffffff;
    }

    /*responsive*/
    @media(max-width: 767px) {
      .footer-col {
        width: 50%;
        margin-bottom: 30px;
      }
    }

    @media(max-width: 574px) {
      .footer-col {
        width: 100%;
      }
    }
  </style>
</body>

</html>