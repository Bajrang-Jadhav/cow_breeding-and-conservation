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

    <!-- bootstrap -->


    <style>
        .team {

            margin: 50;
            padding: 20px;
            display: flex;
            justify-content: center;

            font-family: sans-serif;
        }

        .card-container {
            display: flex;
            gap: 20px;
        }

        .card {
            width: 200px;
            height: 300px;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;

        }
    </style>





</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->



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
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="service.php" class="nav-item nav-link ">Services</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="product.php" class="nav-item nav-link">Products</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="gallery.php" class="dropdown-item">Gallery</a>
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
                                <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
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


    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8 text-start">
                                    <p class="fs-4 text-white">Welcome to cow conservation</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Organic Farming Begins
                                        with Indigenous Cows!</h1>
                                    <a href="service.php"
                                        class="btn btn-secondary rounded-pill py-3 px-5 animated slideInRight">Explore
                                        More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-8 text-end">
                                    <p class="fs-4 text-white">Welcome to cow conservation</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Recognize Cow </h1>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Breed with the</h1>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Help of AI!</h1>
                                    <a href="artificial.php"
                                        class="btn btn-secondary rounded-pill py-3 px-5 animated slideInLeft">Explore
                                        More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-8 text-end">
                                    <p class="fs-4 text-white">Welcome to cow conservation</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Various Types of Cow
                                        Breeding!</h1>
                                    <a href="breedvet.php"
                                        class="btn btn-secondary rounded-pill py-3 px-5 animated slideInLeft">Explore
                                        More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <script>
                document.getElementById('submitButton').addEventListener('click', function () {
                    const imageInput = document.getElementById('imageInput');
                    const promptInput = document.getElementById('promptInput').value;
                    const responseDiv = document.getElementById('responseDiv');
                    const file = imageInput.files[0];

                    if (file) {
                        const formData = new FormData();
                        formData.append('image', file);
                        formData.append('prompt', promptInput);

                        fetch('/upload', {
                            method: 'POST',
                            body: formData
                        })
                            .then(response => response.json())
                            .then(data => {
                                responseDiv.textContent = data.response || data.error;
                            })
                            .catch(error => {
                                responseDiv.textContent = 'An error occurred.';
                            });
                    } else {
                        responseDiv.textContent = 'Please select an image.';
                    }
                });
            </script>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <!-- <body style="background: url('img/background.jpg') no-repeat center center fixed; background-size: cover;"></body> -->
            <div class="row g-5 align-items-end">
                <div class="col-lg-6">
                    <div class="row g-2">
                        <div class="col-6 position-relative wow fadeIn" data-wow-delay="0.7s">
                            <div class="about-experience bg-secondary rounded">
                                <h1 class="display-1 mb-0">25</h1>
                                <small class="fs-5 fw-bold">Years Experience</small>
                            </div>
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid rounded" src="img/service-1.jpg">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid rounded" src="img/service-2.jpg">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                            <img class="img-fluid rounded" src="img/service-3.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="section-title bg-white text-start text-primary pe-3">About Us</p>
                    <h1 class="mb-4 text-black">Know About Our Hack-a-Farm</h1>
                    <p class="mb-4 text-black"> Conservation efforts must involve local communities and farmers, as they
                        are the primary custodians of these breeds.
                        Balancing productivity with conservation is essential. Genetic improvement programs should aim
                        to enhance desirable traits without compromising breed integrity.
                        The cultural and religious importance of cows, especially in India, adds a unique dimension to
                        conservation efforts.</p>
                    <div class="row g-5 pt-2 mb-5">
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="img/service.png" alt="">
                            <h5 class="mb-3 text-black">Dedicated Services</h5>
                            <h6 class="mb-3 text-black">Cow Care and Goshalas , Veterinary Services , Farm to consumer
                                services</h6>
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="img/product.png" alt="">
                            <h5 class="mb-3 text-black">Organic Products</h5>
                            <h6 class="mb-3 text-black">Clita erat ipsum et lorem et sit, sed stet lorem sit clita</h6>
                        </div>
                    </div>
                    <a class="btn btn-secondary rounded-pill py-3 px-5" href="service.php">Explore More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title bg-white text-start text-primary pe-3">Why Us!</p>
                    <h1 class="mb-4 text-black">Few Reasons Why People Choosing Us!</h1>
                    <p class="mb-4 text-black"> Cow breeding focuses on improving genetic traits for higher milk yield,
                        disease resistance, and adaptability. It includes selective breeding, artificial insemination,
                        and embryo transfer techniques.</p>
                    <p class="mb-4 text-black"><i class="fa fa-check text-primary me-3 text-black"></i>We provide
                        practical guidance that farmers, breeders, and conservationists can implement in their daily
                        operations.</p>
                    <p class="mb-4 text-black"><i class="fa fa-check text-primary me-3 text-black"></i>We offer detailed
                        information on a wide range of cow breeds, including their characteristics, management, and
                        conservation status.</p>
                    <p class="mb-4 text-black"><i class="fa fa-check text-primary me-3 text-black"></i>Users can stay
                        informed about the latest developments in cow breeding and conservation.</p>
                    <a class="btn btn-secondary rounded-pill py-3 px-5 mt-3" href="about.php">Explore More</a>
                </div>
                <div class="col-lg-6">
                    <div class="rounded overflow-hidden">
                        <div class="row g-0">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="text-center bg-primary py-5 px-4">
                                    <img class="img-fluid mb-4" src="img/experience.png" alt="">
                                    <h1 class="display-6 text-white" data-toggle="counter-up">25</h1>
                                    <span class="fs-5 fw-semi-bold text-secondary">Years Experience</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="text-center bg-secondary py-5 px-4">
                                    <img class="img-fluid mb-4" src="img/award.png" alt="">
                                    <h1 class="display-6" data-toggle="counter-up">183</h1>
                                    <span class="fs-5 fw-semi-bold text-primary">Award Winning</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="text-center bg-secondary py-5 px-4">
                                    <img class="img-fluid mb-4" src="img/animal.png" alt="">
                                    <h1 class="display-6" data-toggle="counter-up">2619</h1>
                                    <span class="fs-5 fw-semi-bold text-primary">Total Animals</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <div class="text-center bg-primary py-5 px-4">
                                    <img class="img-fluid mb-4" src="img/client.png" alt="">
                                    <h1 class="display-6 text-white" data-toggle="counter-up">51940</h1>
                                    <span class="fs-5 fw-semi-bold text-secondary">Happy Clients</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Banner Start -->
    <div class="container-fluid banner my-5 py-5" data-parallax="scroll" data-image-src="img/banner.jpg">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-4">
                            <img class="img-fluid rounded" src="img/banner-1.jpg" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h2 class="text-white mb-3">Specialized Indigenous Breeds</h2>
                            <p class="text-white mb-4">Focus on breeds known for A2 milk, or those with specific
                                adaptations.Develop a certified breeding program, guaranteeing the purity and genetic
                                lineage of the animals. This adds value and builds trust.</p>
                            <a class="btn btn-secondary rounded-pill py-2 px-4" href="">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-4">
                            <img class="img-fluid rounded" src="img/banner-2.jpg" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h2 class="text-white mb-3">"Cow Leasing" or Shared Ownership</h2>
                            <p class="text-white mb-4">For those who want access to high-quality indigenous cows but
                                don't want full ownership, offer leasing or shared ownership models. This can be
                                attractive to small-scale farmers or hobbyists.</p>
                            <a class="btn btn-secondary rounded-pill py-2 px-4" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3  ">Our Services</p>
                <h1 class="mb-5">Services That We Offer For Entrepreneurs</h1>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="img/service-1.jpg" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="img/service-1.jpg" alt="">
                            </div>
                            <h5 class="mb-3">Best Animal Selection</h4>
                                <p class="mb-4">Select animals that are free from diseases and exhibit good reproductive
                                    performance
                                    <br>
                                    Evaluate the animal's physical structure for soundness and functionality.
                                    <br>
                                    Indigenous breeds often exhibit greater resilience to local conditions, while exotic
                                    breeds may offer higher production potential..
                                </p>
                                <a class="btn btn-square rounded-circle" href="animalselection.php"><i
                                        class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="img/service-2.jpg" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="img/service-2.jpg" alt="">
                            </div>
                            <h5 class="mb-3">Breeding & Veterinary</h5>
                            <p class="mb-4">Preserving indigenous cow breeds is essential for maintaining genetic
                                diversity and adaptability to local environments.  
                                <br>
                                Conservation efforts involve establishing breeding programs, maintaining breed
                                registries, and promoting the use of native breeds.
                            </p>
                            <a class="btn btn-square rounded-circle" href="breedvet.php"><i
                                    class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="img/cows2.jpg" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="img/cows2.jpg" alt="">
                            </div>
                            <h5 class="mb-3">Artificial Insemination (AI)</h5>
                            <p class="mb-4">Semen from a high-quality bull is collected and injected into a cow’s
                                reproductive tract.
                                Reduces disease transmission and allows selective breeding.
                                Helps in improving milk yield and genetic traits.</p>
                            <a class="btn btn-square rounded-circle" href=""><i
                                    class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Gallery Start -->
    <div class="container-xxl py-5 px-0">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Gallery</p>
                <h1 class="mb-5">Explore our Hack-a-Farm Gallery</h1>
            </div>
            <div class="row g-0">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-0">
                        <div class="col-12">
                            <a class="d-block" href="img/gallery-5.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/gallery-5.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="d-block" href="img/gallery-1.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/gallery-1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row g-0">
                        <div class="col-12">
                            <a class="d-block" href="img/gallery-2.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/gallery-2.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="d-block" href="img/gallery-6.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/gallery-6.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-0">
                        <div class="col-12">
                            <a class="d-block" href="img/gallery-7.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/gallery-7.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="d-block" href="img/gallery-3.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/gallery-3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="row g-0">
                        <div class="col-12">
                            <a class="d-block" href="img/gallery-4.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/gallery-4.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="d-block" href="img/gallery-8.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/gallery-8.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery End -->


        <!-- Product Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <p class="section-title bg-white text-center text-primary px-3">Our Products</p>
                    <h1 class="mb-5">Marketplace & Value-Added Products </h1>
                </div>
                <div class="row gx-4">

                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="product-item">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/a2-milk.webp" alt="">
                                <div class="product-overlay">

                                </div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5" href="">A2 Milk</a>
                                <span class="text-primary me-1">Pure and healthy A2 milk from our cows. </span>
                                <br>
                                <br>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="product-item">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/dairy1.jpg" alt="">
                                <div class="product-overlay">

                                </div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5" href="">Dairy Products</a>
                                <span class="text-primary me-1">Develop cheeses using milk from specific breeds. </span>
                                <br>
                                <br>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="product-item">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/organic_fer.jpg" alt="">
                                <div class="product-overlay">

                                </div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5" href="">Organic Fertilizer</a>
                                <span class="text-primary me-1">Natural fertilizer made from cow dung.</span>
                                <br>
                                <br>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="product-item">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/cow-dung-products.jpg" alt="">
                                <div class="product-overlay">

                                </div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5" href="">Cow Dung Products</a>
                                <span class="text-primary me-1">Various products made from cow dung.</span>
                                <br>
                                <br>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product End -->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <p class="section-title bg-white text-center text-primary px-3">Our Team</p>
                    <h1 class="mb-5">Experienced Team Members</h1>
                </div>
                
            <div class="team">   
               <div class="card-container">
                    <div class="card"><img src="img/bajrang 1.jpg" alt="Card 1"></div>
                    <div class="card"><img src="img/nandini 1.jpg" alt="Card 2"></div>
                    <div class="card"><img src="img/shruti.jpg" alt="Card 3"></div>
                    <div class="card"><img src="img/sumedh 1.jpg" alt="Card 4"></div>
                </div>
            </div>
  </div>                </div>
            </div>
        </div>  
    </div>

    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Testimonial</p>
                <h1 class="mb-5">What People Say About Our Hack-a-Fram</h1>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-img">
                        <img class="img-fluid animated pulse infinite" src="img/people4.jpg" alt="">
                        <img class="img-fluid animated pulse infinite" src="img/people5.jpg" alt="">
                        <img class="img-fluid animated pulse infinite" src="img/people6.jpg" alt="">
                        <img class="img-fluid animated pulse infinite" src="img/people7.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item">
                            <img class="img-fluid mb-3" src="img/people4.jpg" alt="">
                            <p class="fs-5">Farmers are increasingly receptive to technologies that improve
                                efficiency and animal welfare.
                                Tools like AI-powered monitoring systems (for calving, health, etc.) are seen as
                                valuable time-savers..</p>
                            <h5>Arvind Shaha</h5>
                            <span class="text-primary">Engineer</span>
                        </div>
                        <div class="testimonial-item">
                            <img class="img-fluid mb-3" src="img/people5.jpg" alt="">
                            <p class="fs-5"> Emphasis on Animal Welfare:
                                Consumers and farmers alike are placing greater importance on ethical treatment of
                                animals.
                                Technologies that reduce stress and improve animal health are highly regarded..</p>
                            <h5>Vinod Mehta</h5>
                            <span class="text-primary">Douctor</span>
                        </div>
                        <div class="testimonial-item">
                            <img class="img-fluid mb-3" src="img/people6.jpg" alt="">
                            <p class="fs-5">There's a growing awareness of the environmental impact of agriculture.
                                Practices that promote sustainable cow breeding and reduce waste are gaining
                                popularity..</p>
                            <h5>Neha varma</h5>
                            <span class="text-primary">Scientist</span>
                        </div>
                        <div class="testimonial-item">
                            <img class="img-fluid mb-3" src="img/people7.jpg" alt="">
                            <p class="fs-5"> There are also concerns about maintaining the genetic diversity of
                                indigenous breeds in the face of widespread crossbreeding.People are happy with the
                                ability to get alerts on their smart phones.</p>
                            <h5>Rani Varma</h5>
                            <span class="text-primary">Professor</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


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
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


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

    <script src="js/main.js"></script>
    <script src="js/main.js"></script>
</body>

</html>