<?php

include('config.php');
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="utf-8">
          <title>GO-RAKSHAK</title>
          <meta content="width=device-width, initial-scale=1.0" name="viewport">
          <meta content="" name="keywords">
          <meta content="" name="description">

          <!-- Favicon -->
          <link href="img/favicon.ico" rel="icon">

          <!-- Google Web Fonts -->
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link
            href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap"
            rel="stylesheet">

          <!-- Icon Font Stylesheet -->
          <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

          <!-- Libraries Stylesheet -->
          <link href="lib/animate/animate.min.css" rel="stylesheet">
          <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
          <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

          <!-- Customized Bootstrap Stylesheet -->
          <link href="css/bootstrap.min.css" rel="stylesheet">


          <!-- Template Stylesheet -->
          <link href="css/style.css" rel="stylesheet">


          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>



  <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
          <a href="index.php" class="navbar-brand d-flex align-items-center">
            <img src="img/GO-RAKSHAK.png" alt="Bootstrap" width="290" height="50">
          </a>
          <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
              <a href="index.php" class="nav-item nav-link">Home</a>
              <a href="service.php" class="nav-item nav-link active">Services</a>
              <a href="about.php" class="nav-item nav-link">About</a>
              <a href="product.php" class="nav-item nav-link">Products</a>
              <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu bg-light m-0">
                  <a href="gallery.php" class="dropdown-item ">Gallery</a>
                  <a href="team.php" class="dropdown-item">Our Team</a>
                  <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                </div>
              </div>
              <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <div class="border-start ps-4 d-none d-lg-block">
              <?php
              if (isset($_SESSION["username"])) {

                ?>
                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                      <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo ($_SESSION["username"]); ?>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="profile.PHP">profile</a></li>
                        <li><a class="dropdown-item" href="LOGOUT.PHP">LOGOUT</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>

                <?php
              } else {
                ?>

                <a href="login.php">
                  <button type="button" class="btn btn-outline-dark">Sign-in </button>
                </a>
                <a href="signup.php">
                  <button type="button" class="btn btn-outline-dark">Sign-up </button>
                </a>
                <?php
              }
              ?>
            </div>
          </div>
        </nav>
        <!-- Navbar End -->


  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
      <h1 class="display-3 text-white mb-4 animated slideInDown">AI Cow Breed Recognition</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb justify-content-center mb-0">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Services</a></li>
          <li class="breadcrumb-item " aria-current="page">AI COW BREED RECOGNIZER</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- Page Header End -->
  <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <p class="section-title bg-white text-center text-primary px-3">AI SERVICES</p>
    </div>

  <!-- artificial insemination Start --> 
  <div class="container d-flex justify-content-center align-items-center min-vh-90 mt-5">
    <div class="card shadow p-4 rounded-4 w-100" style="max-width: 600px;">
      <h1 class="text-center mb-4 display-5 fw-bold text-primary">Cow Breed Recognition</h1>
      
      <div class="mb-4">
        <label for="imageInput" class="form-label fs-4">Upload an Image</label>
        <input type="file" class="form-control form-control-lg" id="imageInput" accept="image/*" />
      </div>

      <div class="d-grid mb-4">
        <button class="btn btn-primary btn-lg fw-semibold" id="recognizeBtn">Recognize Breed</button>
      </div>
      <h3 class="text-center mb-4 display-8 fw-bold text-primary" id="result"></h3>
    </div>
  </div>

  <!-- artificial insemination End -->


  <!-- Footer Start -->
  <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-3 col-md-6">
          <h5 class="text-white mb-4">Our Office</h5>
          <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>DYP SALOKHENAGAR</p>
          <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>1234567890</p>
          <p class="mb-2"><i class="fa fa-envelope me-3"></i>gorakshak302@example.com</p>

        </div>
        <div class="col-lg-3 col-md-6">
          <h5 class="text-white mb-4">Quick Links</h5>
          <a class="btn btn-link" href="">About Us</a>
          <a class="btn btn-link" href="">Contact Us</a>
          <a class="btn btn-link" href="">Our Services</a>
          <a class="btn btn-link" href="">Terms & Condition</a>
          <a class="btn btn-link" href="">Support</a>
        </div>
        <div class="col-lg-3 col-md-6">
          <h5 class="text-white mb-4">Business Hours</h5>
          <p class="mb-1">Monday - Friday</p>
          <h6 class="text-light">09:00 am - 07:00 pm</h6>
          <p class="mb-1">Saturday</p>
          <h6 class="text-light">09:00 am - 12:00 pm</h6>
          <p class="mb-1">Sunday</p>
          <h6 class="text-light">Closed</h6>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer End -->


  <!-- Copyright Start -->
  <div class="container-fluid bg-secondary text-body copyright py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
          &copy; <a class="fw-semi-bold" href="#">GO-RAKSHAK</a>, All Right Reserved.
        </div>
        <div class="col-md-6 text-center text-md-end">
          Designed By <a class="fw-semi-bold" href="https://htmlcodex.com">HACK-A-FARM</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Copyright End -->

  <!-- Back to Top
  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a> -->

  <!-- chatbot -->
  <script>
    (function () { if (!window.chatbase || window.chatbase("getState") !== "initialized") { window.chatbase = (...arguments) => { if (!window.chatbase.q) { window.chatbase.q = [] } window.chatbase.q.push(arguments) }; window.chatbase = new Proxy(window.chatbase, { get(target, prop) { if (prop === "q") { return target.q } return (...args) => target(prop, ...args) } }) } const onLoad = function () { const script = document.createElement("script"); script.src = "https://www.chatbase.co/embed.min.js"; script.id = "4mYUDOgL_tZbd6vw55IzH"; script.domain = "www.chatbase.co"; document.body.appendChild(script) }; if (document.readyState === "complete") { onLoad() } else { window.addEventListener("load", onLoad) } })();
  </script>


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/parallax/parallax.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>


  <!-- Template Javascript -->
  <script src="script.js"></script>


</body>
</html>