<?php
include("./includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mehendi Designs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/style.css">

<body>

     <!-- navbar  -->
    <section class="bar">
    <nav class="navbar navbar-expand-lg" style="background-color: #2b0505; height: 80px;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color: #ffffff; font-size: 30px; margin-right: 50%; font-weight: bolder;">Mehendi Designs</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="display: flex; justify-content: last baseline;">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="designs.php" style="margin: 0px 30px 0px 30px;  padding: 5px 10px 5px 10px; font-weight: 600; border-radius: 1px; color: #ffff;">Gallery</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    </section>


<!-- home section  -->

<section class="home">
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>

  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/slide1.jpg" class="d-block w-100" style="max-height: 500px; width: 100%; object-fit: cover;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/images/slide2.jpg" class="d-block w-100" style="max-height: 500px; width: 100%; object-fit: cover;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/images/slide3.jpg" class="d-block w-100" style="max-height: 500px; width: 100%; object-fit: cover;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/images/slide4.jpg" class="d-block w-100" style="max-height: 500px; width: 100%; object-fit: cover;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/images/slide5.jpg" class="d-block w-100" style="max-height: 500px; width: 100%; object-fit: cover;" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

<!-- Design section  -->

<section class="cards">
  <div class="cards-title">
    <h4>Explore Designs</h4>
  </div>
  <div class="card-container">
  <div class="card" style="width: 18rem;">
  <img src="assets/images/slide1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Front Hand</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="front-hand.php" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="assets/images/slide1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Back Hand</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="back-hand.php" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="assets/images/slide1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Leg</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="leg.php" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="assets/images/slide1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Bridal Designs</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="bridal.php" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  </div>

  <div class="more">
    <a href="#">View more</a>
  </div>

</section>

<!-- footer section  -->

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3>Your Mehendi Design</h3>
        <p>Unleashing the beauty of traditions</p>
      </div>
      <div class="col-md-6">
        <div class="social-icons text-md-end">
        <ul class="social-links">
          <li><a href=" http://wa.me/+918197458962"><i class="fab fa-whatsapp"></i></a></li>
          <li><a href="https://www.instagram.com/_.sh_eh_za_di._/"><i class="fab fa-instagram"></i></a></li>
          <li><a href="http://github.com/munazzabegam"><i class="fab fa-github"></i></a></li>
          <li><a href="http://www.linkedin.com/in/munazza-begam"><i class="fab fa-linkedin-square"></i></a></li>
        </ul>
        </div>
      </div>
    </div>
    <hr class="mt-4 mb-4 border-light">
    <div class="row">
      <div class="col-md-6">
        <p>&copy; 2023 Your Mehendi Design. All rights reserved.</p>
      </div>
      <div class="col-md-6">
        <div class="footer-links float-md-end">
          <a href="#" class="text-white">Privacy Policy</a>
          <span class="mx-2">|</span>
          <a href="#" class="text-white">Terms of Service</a>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
