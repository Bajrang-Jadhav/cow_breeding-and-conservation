<?php
session_start();
 include('config.php');
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
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">   

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

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
        }

        .breed-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
            display: flex;
            align-items: center;
        }

        .breed-card img {
            max-width: 250px;
            height: auto;
            border-radius: 4px;
            margin-right: 20px;
        }

        .breed-details {
            flex-grow: 1;
        }

        .breed-details h2 {
            margin-top: 0;
            color: #333;
        }

        .breed-details p {
            line-height: 1.6;
            color: #666;
        }
        .breed-details ul {
            list-style-type: disc;
            margin-left: 20px;
        }
        .video-container {
            margin-top: 20px;
            text-align: center;
        }
        .video-container video{
            max-width: 80%;
            height: auto;
        }

    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <!-- <div class="container-fluid bg-dark px-0">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-light">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 bg-secondary d-inline-flex align-items-center text-dark py-2 px-4">
                    <span class="me-2 fw-semi-bold"><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
                    <span>+012 345 6789</span>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Topbar End -->


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
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link active">Services</a>
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
                     <a href="" class="nav-item nav-link " ><?php echo ($_SESSION["username"]); ?></a>
                 
                    
                <?php 
					} else{
						?>
							
                            <a href="login.php" >
                    <button type="button" class="btn btn-outline-dark">Sign-in </button> 
                </a>
                <a href="signup.php" >
                    <button type="button"  class="btn btn-outline-dark">Sign-up </button>  
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
            <h1 class="display-3 text-white mb-4 animated slideInDown">ANIMAL SELECTION</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ANIMAL SELECTION</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- ANIMALSELECTION Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Indian Cows</p>
                <h1 class="mb-5 text-BLACK">India has a rich and diverse heritage of indigenous cattle breeds</h1>
            </div>
    <div class="container">

        <div class="breed-card">
            <img src="img/co1 (1).jpg" alt="Holstein Friesian Cow">
            <div class="breed-details">
                <h2>Holstein Friesian</h2>
                <p><strong>Origin:</strong> Netherlands</p>
                <p><strong>Characteristics:</strong> Known for high milk production, distinctive black and white markings.</p>
                <p><strong>Strengths:</strong> Excellent dairy production, adaptable to various climates.</p>
                <p><strong>Weaknesses:</strong> Lower beef quality compared to beef-specific breeds.</p>
                <p><strong>Suitability:</strong> Primarily dairy.</p>
                <div class="video-container">
                    
                </div>
            </div>
        </div>




        <div class="breed-card">
            <img src="img/co2.jpg" alt="Angus Cow">
            <div class="breed-details">
                <h2>Angus</h2>
                <p><strong>Origin:</strong> Scotland</p>
                <p><strong>Characteristics:</strong> Black or red coat, known for high-quality beef.</p>
                <p><strong>Strengths:</strong> Excellent marbling, good temperament, efficient feed conversion.</p>
                <p><strong>Weaknesses:</strong> Lower milk production compared to dairy breeds.</p>
                <p><strong>Suitability:</strong> Primarily beef.</p>
                <div class="video-container">
                   
                </div>
            </div>
        </div>


        <div class="breed-card">
            <img src="img/co3.jpg" alt="Angus Cow">
            <div class="breed-details">
                <h2>Sahiwal cows</h2>
                <p><strong>Origin:</strong> Sahiwal cows originated in the Punjab region of Pakistan and India </p>
                <p><strong>Adaptability:</strong> Sahiwal cows are well-adapted to hot climates </p>
                <p><strong> Fertility:</strong> Sahiwal cows are good mothers and have a high degree of fertility .</p>
                <p><strong>Health:</strong> Sahiwal cows are tick-resistant, heat-tolerant, and resistant to internal and external parasites </p>
                <p><strong>Milk:</strong> Sahiwal cows produce high-quality milk with a high butterfat content </p>
                <div class="video-container">
                   
                </div>
            </div>
        </div>  


        <div class="breed-card">
            <img src="img/co4.jpg" alt="Gir Cow">
            <div class="breed-details">
                <h2>Gir</h2>
                <p><strong>Origin:</strong> India</p>
                <p><strong>Characteristics:</strong> Distinctive domed forehead, known for high milk quality and heat tolerance.</p>
                <p><strong>Strengths:</strong> High milk fat content, good disease resistance, adaptable to hot climates.</p>
                <p><strong>Weaknesses:</strong> Moderate milk yield compared to some exotic dairy breeds.</p>
                <p><strong>Suitability:</strong> Dual-purpose (dairy and draught).</p>
                <div class="video-container">
                   
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
    <!-- ANIMALSELECTION End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Our Office</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>DYP SALOKHENAGAR</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>1234567890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>gorakshak302@example.com</p>
                    <!-- <div class="d-flex pt-3">
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div> -->
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
                <!-- <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-secondary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div> -->
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
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="fw-semi-bold" href="https://htmlcodex.com">HACK-A-FARM</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


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
    <script src="js/main.js"></script>
</body>

</html>