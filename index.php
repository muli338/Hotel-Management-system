<!DOCTYPE html>
<html lang="en">
<head>
<title> Muli Jedy Hotels -Home </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <?php require('Inc/links.php'); ?>

<style>
    .custom-bg{
        background-color: #2ecf2e;
    }
    .custom-bg:hover{ 
        background-color: #279e8c;
    }

    .availability-form{
        margin-top: -50px;
        z-index: 2;
        position: relative;
    }
    
</style>
</head>
<body class="bg-light">

<?php require('inc/header.php'); ?>
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
  <div class="container availability-form">
    <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
            <h5 class="mb-4">Check Booking Availability</h5>
            <form>
                <div class="row align-items-end">
                    <div class="col-lg-3">
                    <label class="form-label" style="font-weight: 500;">Check-in</label>
                    <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-lg-3">
                    <label class="form-label" style="font-weight: 500;">Check-out</label>
                    <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-lg-3">
                    <label class="form-label" style="font-weight: 500;">Adult</label>
                    <select class="form-select shadow-none">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                     </select>
                     </div>
                     <div class="col-lg-2">
                    <label class="form-label" style="font-weight: 500;">Children</label>
                    <select class="form-select shadow-none">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                     </select>
                     </div>
                     <div class="col-lg-1">
                        <button type="submit" class="btn text-white shadow none custom-bg">Submit</button>

                     </div>
                </div>
            </form>
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
  <!--- Our Rooms-->
  <h2 class="mt-3 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS </h2>

 <div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-8 my-3">
            <div class="card border-o shadow" style="max-width: 350px; margin: auto;">
                <img src="Images/rooms.jpeg" class="card-img-top">
                <div class="card-body">
                  <h5>Simple Room Name</h5>
                  <h6 class="mb-4">Ksh2000 per Night</h6>
                  <div class="features">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        2 Rooms
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        1 Bathroom
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        1 Balcony
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        3 Sofa
                      </span>
                  </div>
                  <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        Wifi
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        Television
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        AC
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        Room heater
                      </span>
                  </div>
                  <div class="guests mb-4">
                    <h6 class="mb-1">Guests</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        5 Adults
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        4 Children
                      </span>
                  </div>
                  <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </span>
                </div>
                <div class="d-flex justify-content-evenly">
                    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                    <a href="#" class="btn btn-sm btn-outline-dark">More details</a>
                </div> 
                </div>
              </div>
        </div>
        <div class="col-lg-4 col-md-8 my-3">
            <div class="card border-o shadow" style="max-width: 350px; margin: auto;">
                <img src="Images/rooms1.jpeg" class="card-img-top">
                <div class="card-body">
                  <h5>Simple Room Name</h5>
                  <h6 class="mb-4">Ksh2000 per Night</h6>
                  <div class="features">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        2 Rooms
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        1 Bathroom
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        1 Balcony
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        3 Sofa
                      </span>
                  </div>
                  <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        Wifi
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        Television
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        AC
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        Room heater
                      </span>
                  </div>
                  <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </span>
                </div>
                <div class="d-flex justify-content-evenly">
                    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                    <a href="#" class="btn btn-sm btn-outline-dark">More details</a>
                </div> 
                </div>
              </div>
        </div>
        <div class="col-lg-4 col-md-8 my-3">
            <div class="card border-o shadow" style="max-width: 350px; margin: auto;">
                <img src="Images/rooms2.jpeg" class="card-img-top">
                <div class="card-body">
                  <h5>Simple Room Name</h5>
                  <h6 class="mb-4">Ksh2000 per Night</h6>
                  <div class="features">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        2 Rooms
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        1 Bathroom
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        1 Balcony
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        3 Sofa
                      </span>
                  </div>
                  <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        Wifi
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        Television
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        AC
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        Room heater
                      </span>
                  </div>
                  <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </span>
                </div>
                <div class="d-flex justify-content-evenly">
                    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                    <a href="#" class="btn btn-sm btn-outline-dark">More details</a>
                </div> 
                </div>
              </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sn btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>>></a>

        </div>
    </div>
  </div>
  <!--OUR FACILITIES-->
  <h2 class="mt-3 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES </h2>
  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="Images/Wifi (1).jpeg" width="80px">
            <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="Images/Wifi (2).png" width="80px">
            <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="Images/Wifi (2).jpeg" width="80px">
            <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="Images/Wifi.png" width="80px">
            <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="Images/Wifi.png" width="80px">
            <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sn btn-outline-dark rounded-0 fw-bold shadow-none">Know More>>></a>
        </div>
    </div>
  </div>
  <!--TESTMONIALS-->
  <h2 class="mt-3 pt-4 mb-4 text-center fw-bold h-font"> <h2 class="mt-3 pt-4 mb-4 text-center fw-bold h-font">TESTMONIALS</h2>
  <div class="cards-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-heading">A few words from people that chose to work with me</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">
                
                <!-- Card -->
                <div class="row">
                <div class="card">
                    <div class="bg-white p-4">
                        <p class="testimonial-text">“Loved to work with Muli he's such an awesome developer with great attention to details. He also has a great eye for design”</p>
                        <div class="details">
                            <img src="images/Dun.jpeg" width="30px">
                            <div class="text">
                                <div class="Rating">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </div>
                                <div class="testimonial-author">Mwangi Softwares</div>
                                <div class="occupation">KBC sofware Manager Manager - Nexlite</div>
                            </div> <!-- end of text -->
                        </div> <!-- end of testimonial-details -->
                    </div>
                </div>
                <div class="card">
                    <div class="bg-white p-4">
                        <p class="testimonial-text">“Loved to work with Muli he's such an awesome developer with great attention to details. He also has a great eye for design”</p>
                        <div class="details">
                            <img src="images/Mwangi.jpeg" width="30px">
                            <div class="text">
                                <div class="Rating">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </div>
                                <div class="testimonial-author">Mwangi Softwares</div>
                                <div class="occupation">KBC sofware Manager Manager - Nexlite</div>
                            </div> <!-- end of text -->
                        </div> <!-- end of testimonial-details -->
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <p class="testimonial-text">“So glad we started working with Muli. We've used many times his design and development skills for our inhouse online projects”</p>
                        <div class="details">
                            <img src="images/Murume.jpeg" width="30px">
                            <div class="text">
                                <div class="Rating">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </div>
                                <div class="testimonial-author">Murume</div>
                                <div class="occupation">Octogan manager - Shifter</div>
                            </div> <!-- end of text -->
                        </div> <!-- end of testimonial-details -->
                    </div>
                </div>

<!---Reach us-->

<h2 class="mt-3 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
      <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127642.6716623594!2d36.784107939062494!3d-1.2730657548525992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f3fc955678a67%3A0x2c30e07746ac972a!2sTRM%20-%20Thika%20Road%20Mall!5e0!3m2!1sen!2ske!4v1693641402874!5m2!1sen!2ske" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4">
        <h5>Call Us</h5>
        <a href="tel: 0757467057" class="d-inline block mb-2 text-decoration-none text-dark">
         <i class="bi bi-telephone-fill"></i> 0757467057
        </a>
        <br>
        <a href="tel: 0757467057" class="d-inline block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i> 0757467057
         </a>
         <br>
      </div>
      <div class="bg-white p-4 rounded mb-4">
        <h5>Follow Us</h5>
        <a href="#" class="d-inline block mb-3">
         <span class="badge bg-light text-dark fs-6 p-2"> 
          <i class="bi bi-twitter me-1"></i>Twitter 
        </span>
        </a>
        <br>
        <a href="#" class="d-inline block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2"> 
           <i class="bi bi-facebook me-1"></i>Facebook
         </span>
         </a>
         <br>
         <a href="#" class="d-inline block mb-3">
           <span class="badge bg-light text-dark fs-6 p-2"> 
            <i class="bi bi-instagram me-1"></i>Instagram
          </span>
          </a>
      </div>
    </div>
  </div>
</div>
<?php require('inc/footer.php'); ?>

<script src="https://ajax.com.googleapis.com/ajax/libs/jquery/5.0.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>