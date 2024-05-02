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
  <div class="contact-form">
    <div class="container">
      <div class="main">
        <div class="content">
          <h2>Contact Us</h2>
          <form action="https://api.web3forms.com/submit" method="post">
            <input type="hidden" name="access_key" value="126fd1cd-ff7b-4a9d-a3b2-6d2b6a83f6b9">
            <input type="text" name="name" placeholder="Enter Your Name">
            <input type="email" name="name" placeholder="Enter Your Email">
            <textarea name="message" placeholder="Your Message"></textarea>
            <button type="submit" class="btn">Send <i class="fas fa-paper-plane"></i></button>
          </form>
        </div>
        <div class="form-img">
          <img src="bg1.png" alt="">
        </div>
      </div>
    </div>
  </div>
  <?php
  include('footer.php');
  ?>

  <style>
    body,
    ul {
      margin: 0;
      padding: 0;
    }


    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      
    }

    .contact-form {
      position: relative;
      z-index: 0;
      background: #eee;
      padding: 30px;
      display: grid;
      grid-template-rows: auto auto;
      /* Updated to remove unnecessary space */
      align-items: center;
    }

    .container {
      max-width: 800px;
      margin-top: 10px auto;
    }

    .contact-form h1 {
      text-align: center;
      font-size: 2.5rem;
      font-weight: 400;
      color: #fff;
      font-family: 'poppins';
    }

    .contact-form h2 {
      line-height: 40px;
      margin-bottom: 5px;
      font-size: 30px;
      font-weight: 500;
      color: #69275c;
      text-align: center;
    }

    .contact-form .main {
      position: relative;
      display: flex;
      margin: 30px 0;
    }

    .content {
      flex-basis: 50%;
      padding: 3em 3em;
      background: #fff;
      box-shadow: 2px 9px 49px -17px rgba(156, 39, 148, 0.1);
      border-top-left-radius: 8px;
      border-bottom-left-radius: 8px;
    }

    .form-img {
      flex-basis: 50%;
      background: #f0f4f8;
      background-size: cover;
      padding: 40px;
      border-top-right-radius: 8px;
      border-bottom-right-radius: 8px;
      align-items: center;
      display: grid;
    }

    .form-img img {
      max-width: 100%;
    }

    .btn,
    button,
    input {
      border-radius: 35px;
    }

    .btn:hover,
    button:hover {
      color: #97359c;
      transition: 0.5s ease;
    }

    .contact-form form {
      margin: 30px 0;
    }

    .contact-form input,
    textarea {
      outline: none;
      margin-bottom: 15px;
      font-stretch: 16px;
      color: #999;
      padding: 14px 20px;
      width: 100%;
      display: inline-block;
      box-sizing: border-box;
      border: none;
      background: #fcfcfc;
      transition: 0.3s ease;
    }

    .contact-form input:focus {
      background: transparent;
      border: 1px solid #69275c;
    }

    .contact-form button {
      font-size: 18px;
      color: #fff;
      width: 100%;
      background: #69275c;
      font-weight: 600;
      transition: 0.3s ease;
      padding: 14px 15px;
      border: 1px solid #69275c;

    }

    @media(max-width:736px) {
      .contact-form {
        padding: 20px;
        /* Adjust padding for smaller screens */
      }

      .contact-form .main {
        flex-direction: column;
      }

      .contact-form form {
        margin-top: 30px;
        margin-bottom: 10px;

      }

      .form-img {
        border-radius: 0;
        border-bottom-left-radius: 8px;
        border-bottom-right-radius: 8px;
        order: 2;
      }

      .content {
        order: 1;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
      }
    }


  </style>
  <script>
    function validateForm() {
      var nameField = document.getElementById('name');
      var emailField = document.getElementById('email');
      var namePattern = /^[A-Za-z ]+$/;
      var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      if (!namePattern.test(nameField.value)) {
        alert('Please enter a valid name (only alphabets and spaces are allowed).');
        return false;
      }

      if (!emailPattern.test(emailField.value)) {
        alert('Please enter a valid email address.');
        return false;
      }

      alert('Message Sent Successfully');
      return true;
    }
  </script>
</body>

</html>