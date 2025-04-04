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


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }


        .card-container {
            display: flex;
            gap: 20px;
            margin-left: 230px;
        }

        .card {
            width: 250px;
            height: 375px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }



        .info {
            background-color: #f4f4f4;
            padding: 20px;
        }

        .contain {
            max-width: 2000px;
            margin: auto;
            background: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            color: #555;
            margin-bottom: 15px;
        }

        img {
            width: 100%;
            border-radius: 5px;
            margin-bottom: 20px;
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


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Breeding & Veteranary</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Breeding & Veteranary</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- BREEDING AND VETERANARY Start -->
    <br>


    <br>

    <!-- <div class="contain">

        <center>
            <h2>
                Breeding in Livestock</h2>
        </center>
        <center>
            <p>
            <h6>Breeding is the process of selecting and mating animals to improve milk production, disease resistance,
                and adaptability.</h6>
            <h6>The two main types of breeding are:</h6>
            <br>
            <h4> Natural Breeding</h4>

            <h6>Involves direct mating between a cow and a bull.</h6>

            <h6>Maintains traditional traits but is difficult to control genetically.</h6>
            <br>

            <h4>Artificial Breeding Methods</h4>

            <h6>Artificial Insemination (AI) – Semen from superior bulls is collected and inserted into cows to improve
                milk yield and disease resistance.</h6>

            <h6>Embryo Transfer Technology (ETT) – High-quality embryos are transplanted into surrogate cows for faster
                genetic improvement.</h6>

            <h6>Crossbreeding – Combining native and foreign breeds (e.g., Gir × Holstein Friesian) to improve milk
                production and adaptability.</h6>

            <br>
            <h4>Importance of Breeding:</h4>

            <h6>✅ Increases milk yield and meat quality</h6>

            <h6>✅ Enhances disease resistance</h6>

            <h6>✅ Improves adaptability to local conditions</h6>

            </p>
        </center>
    </div>

    <br>
    <br>
    <br>

    <div class="contain">
        <center>
            <h2>
                Veterinary Care in Livestock</h2>
        </center>
        <center>
            <p>
            <h6>Veterinary services ensure disease prevention, treatment, and overall animal welfare.</h6>
            <br>
            <h4> Preventive Veterinary Care</h4>
            <h6>Vaccination – Protects against foot-and-mouth disease (FMD), brucellosis, anthrax, etc.</h6>

            <h6>Deworming – Prevents internal parasites affecting digestion and growth.</h6>
            <h6>Regular health check-ups – Helps detect diseases early.</h6>

            <br>
            <h4>Treatment & Disease Control</h4>
            <h6>Diagnosis and treatment of common cattle diseases like mastitis, pneumonia, and tick-borne infections.
            </h6>

            <h6>Use of antibiotics, supplements, and natural remedies to maintain animal health.</h6>
            <br>
            <h4>Mobile Veterinary Services</h4>
            <h6>Many state governments and NGOs in India provide mobile veterinary clinics for rural farmers.</h6>

            <h6>The 1962 Animal Ambulance Service helps treat sick and injured animals efficiently.</h6>

            <br>
            <h4>Importance of Veterinary Care:</h4>

            <h6>✅ Ensures better milk/meat production</h6>

            <h6>✅ Prevents disease outbreaks</h6>

            <h6>✅ Reduces animal mortality rates</h6>
            </p>
        </center>
    </div> -->
    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <p class="section-title bg-white text-center text-primary px-3">GO-RAKSHAK</p>
        <h1 class="mb-5">BREEDING TYPES </h1>
    </div>
    <!-- natural breeding -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6">
                    <div class="row g-2">
                        <div class="col-6 position-relative wow fadeIn" data-wow-delay="0.7s">
                            <div class="about-experience bg-secondary rounded">
                                <h1 class="display-1 mb-0">1</h1>
                                <small class="fs-5 fw-bold">NATURAL Breeding</small>
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
                <div class="col-lg-6 wow fadeIn  " data-wow-delay="0.5s">
                    <h1 class="mb-4">NATURAL Breeding</h1>
                    <p class="section-title bg-white text-start text-primary pe-3 mt-4">How it's done</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">1. Select a healthy, fertile bull and cow.</li>
                        <li class="list-group-item">2. Detect estrus (heat) in the cow (signs: restlessness, mounting
                            others, clear mucus discharge).</li>
                        <li class="list-group-item">3. Introduce the bull to the cow during heat</li>
                    </ul>
                    <div class="row g-5 pt-5 mb-3">
                        <div class="col-sm-6">
                            <!-- <img class="img-fluid mb-4" src="img/service.png" alt=""> -->
                            <h5 class="mb-3">Accuracy Tips</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">1. Use a fertility-tested bull.</li>
                                <li class="list-group-item">2. Monitor cow’s heat carefully (heat lasts 12–18 hours)
                                </li>
                                <li class="list-group-item">3. Maintain good nutrition and deworming for both animals
                                </li>
                                <li class="list-group-item">4. Avoid inbreeding by tracking lineage</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <!-- <img class="img-fluid mb-4" src="img/product.png" alt=""> -->
                            <h5 class="mb-3">Risks</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">1. Injury during mating.</li>
                                <li class="list-group-item">2. Spread of reproductive diseases (like Brucellosis,
                                    Trichomoniasis)</li>
                            </ul>
                        </div>
                    </div>
                    <!-- <a class="btn btn-secondary rounded-pill py-3 px-5" href="service.php">Explore More</a> -->
                </div>
            </div>
        </div>
    </div>

    <!-- artificial insemination -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6">
                    <div class="row g-2">
                        <div class="col-6 position-relative wow fadeIn" data-wow-delay="0.7s">
                            <div class="about-experience bg-secondary rounded">
                                <h1 class="display-1 mb-0">2</h1>
                                <small class="fs-5 fw-bold">Artificial Insemination </small>
                            </div>
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid rounded" src="img/service-1.jpg">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid rounded" src="img/service-2.jpg">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                            <img class="img-fluid rounded" src="img/injection.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn  " data-wow-delay="0.5s">
                    <h1 class="mb-3">Artificial Insemination </h1>
                    <p class="section-title bg-white text-start text-primary pe-3 mt-4">How it's done</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">1. Estrus Detection: Cow should be in heat (best time: 12 hours
                            after first signs)..</li>
                        <li class="list-group-item">2. Shawing Semen: Thaw frozen semen at 37°C (about 1 minute).</li>
                        <li class="list-group-item">3. Insertion:
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Use an AI gun to insert semen into the uterus.</li>
                                <li class="list-group-item">Insert through the cervix carefully</li>
                            </ul>
                        </li>
                    </ul>
                    <div class="row g-5 pt-5 mb-3">
                        <div class="col-sm-6">
                            <!-- <img class="img-fluid mb-4" src="img/service.png" alt=""> -->
                            <h5 class="mb-3">Accuracy Tips</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">1. Only inseminate during standing heat.</li>
                                <li class="list-group-item">3. Keep semen properly stored in liquid nitrogen.
                                </li>
                                <li class="list-group-item">4. Inseminate within 6–12 hours after heat begins.</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <!-- <img class="img-fluid mb-4" src="img/product.png" alt=""> -->
                            <h5 class="mb-3">Risks</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">1. Wrong timing.</li>
                                <li class="list-group-item">2. Using unsterilized AI equipment can cause infections</li>
                            </ul>
                        </div>
                    </div>
                    <!-- <a class="btn btn-secondary rounded-pill py-3 px-5" href="service.php">Explore More</a> -->
                </div>
            </div>
        </div>
    </div>


    <!-- embryo transfer -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6">
                    <div class="row g-2">
                        <div class="col-6 position-relative wow fadeIn" data-wow-delay="0.7s">
                            <div class="about-experience bg-secondary rounded">
                                <h1 class="display-1 mb-0">3</h1>
                                <small class="fs-5 fw-bold">Embryo Transfer</small>
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
                <div class="col-lg-6 wow fadeIn  " data-wow-delay="0.5s">
                    <h1 class="mb-4">Embryo Transfer</h1>
                    <p class="section-title bg-white text-start text-primary pe-3 mt-4">How it's done</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">1. Synchronize heat cycles of donor and recipient cows</li>
                        <li class="list-group-item">2. Give hormones (FSH) to the donor to produce multiple eggs.</li>
                        <li class="list-group-item">3. Inseminate donor cow using AI.</li>
                        <li class="list-group-item">4. Collect embryos 7 days later using a special flush method.</li>
                        <li class="list-group-item">5. Examine embryos under a microscope and select the best ones.</li>
                        <li class="list-group-item">6. Transfer embryos into the recipient cow’s uterus.</li>
                    </ul>
                    <div class="row g-5 pt-5 mb-3">
                        <div class="col-sm-6">
                            <!-- <img class="img-fluid mb-4" src="img/service.png" alt=""> -->
                            <h5 class="mb-3">Accuracy Tips</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">1. Synchronize donor and recipient estrus cycles perfectly.</li>
                                <li class="list-group-item">2. Use only Grade 1 embryos (best quality).
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <!-- <img class="img-fluid mb-4" src="img/product.png" alt=""> -->
                            <h5 class="mb-3">Risks</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">1. Low success rates.</li>
                                <li class="list-group-item">2. Health risks,Hormone treatments can stress donor cows</li>
                            </ul>
                        </div>
                    </div>
                    <!-- <a class="btn btn-secondary rounded-pill py-3 px-5" href="service.php">Explore More</a> -->
                </div>
            </div>
        </div>
    </div>


   <!-- crossbreeding -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6">
                    <div class="row g-2">
                        <div class="col-6 position-relative wow fadeIn" data-wow-delay="0.7s">
                            <div class="about-experience bg-secondary rounded">
                                <h1 class="display-1 mb-0">4</h1>
                                <small class="fs-5 fw-bold">Crossbreeding</small>
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
                <div class="col-lg-6 wow fadeIn  " data-wow-delay="0.5s">
                    <h1 class="mb-4">Crossbreeding</h1>
                    <p class="section-title bg-white text-start text-primary pe-3 mt-4">How it's done</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">1.Choose two breeds with complementary strengths.</li>
                        <li class="list-group-item">2. Use AI or natural mating.</li>
                        <li class="list-group-item">3. Evaluate offspring for milk yield, size, disease resistance.</li>
                        <li class="list-group-item">4. Example: Jersey × Sahiwal = High-milk, heat-resistant cow.</li>
                    </ul>
                    <div class="row g-5 pt-5 mb-3">
                        <div class="col-sm-6">
                            <!-- <img class="img-fluid mb-4" src="img/service.png" alt=""> -->
                            <h5 class="mb-3">Accuracy Tips</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">1. Research genetic traits before crossbreeding.</li>
                                <li class="list-group-item">2. Keep detailed records of parent breeds.
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <!-- <img class="img-fluid mb-4" src="img/product.png" alt=""> -->
                            <h5 class="mb-3">Risks</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">1. Unpredictable results, Some traits may not pass on as expected.</li>
                                <li class="list-group-item">2. Loss of purebred qualities, Important breed characteristics may be lost.</li>
                            </ul>
                        </div>
                    </div>
                    <!-- <a class="btn btn-secondary rounded-pill py-3 px-5" href="service.php">Explore More</a> -->
                </div>
            </div>
        </div>
    </div>


    <!-- selective breeding -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6">
                    <div class="row g-2">
                        <div class="col-6 position-relative wow fadeIn" data-wow-delay="0.7s">
                            <div class="about-experience bg-secondary rounded">
                                <h1 class="display-1 mb-0">5</h1>
                                <small class="fs-5 fw-bold">Selective Breeding</small>
                                <small class="fs-5 fw-bold">(Pure Breeding) </small>
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
                <div class="col-lg-6 wow fadeIn  " data-wow-delay="0.5s">
                    <h1 class="mb-4">Selective Breeding (Pure Breeding)</h1>
                    <p class="section-title bg-white text-start text-primary pe-3 mt-4">How it's done</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">1. Choose the best bulls and cows based on milk yield, temperament, size.</li>
                        <li class="list-group-item">2. Use AI or natural breeding.</li>
                        <li class="list-group-item">3. Track generations to maintain breed purity.</li>
                    </ul>
                    <div class="row g-5 pt-5 mb-3">
                        <div class="col-sm-6">
                            <!-- <img class="img-fluid mb-4" src="img/service.png" alt=""> -->
                            <h5 class="mb-3">Accuracy Tips</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">1. Keep detailed pedigree records to avoid inbreeding.</li>
                                <li class="list-group-item">2. Test cows for genetic diseases before breeding.
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <!-- <img class="img-fluid mb-4" src="img/product.png" alt=""> -->
                            <h5 class="mb-3">Risks</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">1. Inbreeding, Breeding close relatives can cause genetic defects (weak calves, low fertility).</li>
                                <li class="list-group-item">2. Slow genetic improvement: Takes years to see big results.</li>
                            </ul>
                        </div>
                    </div>
                    <!-- <a class="btn btn-secondary rounded-pill py-3 px-5" href="service.php">Explore More</a> -->
                </div>
            </div>
        </div>
    </div>



    <!-- BREEDING AND VETERANARY End -->






    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Our Office</h5>
                    <p class="mb-2 text-white "><i class="fa fa-map-marker-alt me-3"></i>DYP SALOKHENAGAR</p>
                    <p class="mb-2 text-white"><i class="fa fa-phone-alt me-3"></i>1234567890</p>
                    <p class="mb-2 text-white"><i class="fa fa-envelope me-3"></i>gorakshak302@example.com</p>
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
                    <p class="mb-1 text-white">Monday - Friday</p>
                    <h6 class="text-light">09:00 am - 07:00 pm</h6>
                    <p class="mb-1 text-white">Saturday</p>
                    <h6 class="text-light">09:00 am - 12:00 pm</h6>
                    <p class="mb-1 text-white">Sunday</p>
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
</body>

</html>