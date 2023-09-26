<!DOCTYPE html>
<html lang="en">
<head>
<title> Muli Jedy Hotels -About Us </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/common.css">
    <?php require('Inc/links.php'); ?>
    <style>
        .box{
            border-top-color: var(--teal) !important; 
        }
    </style>
</head>
<body class="bg-light">

<?php require('inc/header.php'); ?>
<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">ABOUT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
        Here are our facilities <br>
        please have a look on them
    </p>
</div>
<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-2">
            <h3 class="mb-3">Muli Jedy Hotel</h3>
            <p>
            We are located at Maragaua trading centre Near Kanyumbani    
            You are all welcomed to get served with a lot of dignity and 
                class of your standards.
            </p>
        </div>
        <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-1">
            <img src="Images/about1.jpeg" class="w-100">
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center">
                <img src="Images/about2.jpeg" width="70px">
                <h4 class="mt-3">100+ Rooms</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center">
                <img src="Images/header-backgroud.jpg" width="70px">
                <h4 class="mt-3">200+ Customers</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center">
                <img src="Images/testimonial-2.jpg" width="70px">
                <h4 class="mt-3">1000+ Reviews</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center">
                <img src="Images/testimonial-1.jpg" width="70px">
                <h4 class="mt-3">200+ Staffs</h4>
            </div>
        </div>
    </div>
</div>
<h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images/Hotel.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img src="Images/Hotel1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img src="Images/Hotel2.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<?php require('inc/footer.php'); ?>

</body>
</html>