<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Join Us - BINUS Research</title>
  <link href="../bootstrap-5.3.5-dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="../build/css/style.css" />
  <style>
    body {
      background-color: #f8f9fa;
    }
    .form-card {
      max-width: 500px;
      margin: auto;
      padding: 30px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>
<?php include 'navbar.html'; ?>
<header>
  <div id="mainCarousel" class="carousel slide container mt-5" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
      
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="row align-items-center">
          <div class="col-md-7">
        <h1 class="display-4">Join Our Community</h1>
            <p class="lead">Connect with students and faculty from around the world. Oxford offers a vibrant and inclusive environment for learning and growth.</p>
            <!-- Join Now Button -->
            <a href="login.php" class="btn btn-success btn-lg mt-3">Join Now</a>    
        </div>
          <div class="col-md-5 text-center">
            <img src="../build/img/img-main.png" alt="Woman holding books" class="img-fluid">
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="row align-items-center">
          <div class="col-md-7">
        <h1 class="display-4">Join Our Community</h1>
            <p class="lead">Connect with students and faculty from around the world. Oxford offers a vibrant and inclusive environment for learning and growth.</p>
            <!-- Join Now Button -->
            <a href="login.php" class="btn btn-success btn-lg mt-3">Join Now</a>    
        </div>
          <div class="col-md-5 text-center">
            <img src="../build/img/img2-main.png" alt="Oxford campus" class="img-fluid">
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="row align-items-center">
          <div class="col-md-7">
            <h1 class="display-4">Join Our Community</h1>
            <p class="lead">Connect with students and faculty from around the world. Oxford offers a vibrant and inclusive environment for learning and growth.</p>
            <!-- Join Now Button -->
            <a href="login.php" class="btn btn-success btn-lg mt-3">Join Now</a>
          </div>
          <div class="col-md-5 text-center">
            <img src="../build/img/img3-main.png" alt="Oxford community" class="img-fluid">
          </div>
        </div>
      </div>

    </div>

    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</header>

<?php include 'footer.html'; ?>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script src="../bootstrap-5.3.5-dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
