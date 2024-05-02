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

  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="i1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="i2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="i3.jpeg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
 
  <br>
   <div class="section__container">
    <div class="header">
      <p>LATEST PRODUCTS</p>
    </div>
    <div class="testimonials__grid">
      <div class="card">
        <span><i class="ri-double-quotes-l"></i></span>
        <hr />
        <img src="i4.jpg" alt="user" />
        <p class="name">Beige</p>
      </div>
      <div class="card">
        <span><i class="ri-double-quotes-l"></i></span>
        <hr />
        <img src="i24.jpg" alt="user" />
        <p class="name">Love Grow</p>
      </div>
      <div class="card">
        <span><i class="ri-double-quotes-l"></i></span>
        <hr />
        <img src="i6.jpg" alt="user" />
        <p class="name">Rouge</p>
      </div>
    </div>
  </div>
  

  <?php
  include('footer.php');
  ?>
  <style>
    .section__container {
  width: 100%;
  max-width: 1200px;
  margin: auto;
  padding: 1rem;
  text-align: center;
}

.header {
  margin-bottom: 2rem;
}

.header p {
  letter-spacing: 2px;
  font-size: 1.5rem;
  font-weight: 500;
}

.header h1 {
  font-family: "Noto Serif", serif;
  font-size: 2rem;
  font-weight: 900;
}

.testimonials__grid {
  width: 100%;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 2rem;
  margin-bottom: 2rem;
}

.card {
  padding: 2rem;
  display: grid;
  gap: 1rem;
  background-color: var(--extra-light);
  border-radius: 5px;
  box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.1);
  cursor: pointer;
}

.card i {
  font-size: 2.5rem;
  color: gold;
}

.card p {
  font-size: 1rem;
  font-weight: 500;
}

.card hr {
  width: 40px;
  margin: auto;
  color: var(--text-light);
}

.card img {
  width: 100%;
  height: 100%;
  margin: auto;
  /* border-radius: 100%; */
  border: 1px solid var(--primary-color);
}

.card .name {
  font-size: 0.9rem;
  font-weight: 400;
  color: var(--text-light);
  transition: 0.3s;
}

.card .name:hover {
  color: var(--primary-color);
}

@media (width < 900px) {
  .testimonials__grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
  }
}

@media (width < 600px) {
  .testimonials__grid {
    grid-template-columns: repeat(1, 1fr);
  }
}
    .latest-product {
      background-color: #eee;
      padding: 20px 0;
      text-align: center;
    }

    .latest-product h2 {
      color: #69275c;
      font-size: 2rem;
      font-style: italic;
    }

    .latest-product p {
      color: #555;
      font-size: 1rem;
      font-style: italic;
    }
    
    .card-link {
      text-decoration: none;
    }

    .card-hover:hover {
      transform: scale(1.1);
    }
  </style>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
    var myCarousel = new bootstrap.Carousel(document.getElementById('carouselExampleFade'), {
      interval: 1000, // Set the interval to 3000 milliseconds (3 seconds)
      // pause: 'hover' // Pause on hover
    });
  });

  </script>
</body>

</html>