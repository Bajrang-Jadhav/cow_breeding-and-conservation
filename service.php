
<?php
session_start();
include('config.php');
$status = 0;
if (isset($_SESSION["username"])) {
    $sql111 = "SELECT * FROM user WHERE username = '{$_SESSION['username']}'";
    $result = mysqli_query($conn, $sql111) or die('query failed');
    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $status = $row['bookedd'];
        }
    }
}

if (isset($_POST['book1'])) {
    echo "sssssssssssssss";
    if (isset($_SESSION["username"])) {



        $name = mysqli_real_escape_string($conn, $_SESSION["username"]);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $petname = mysqli_real_escape_string($conn, $_POST['petname']);
        $breed = mysqli_real_escape_string($conn, $_POST['breed']);
        $datee = mysqli_real_escape_string($conn, $_POST['datee']);
        $timee = mysqli_real_escape_string($conn, $_POST['timee']);
        $problem = mysqli_real_escape_string($conn, $_POST['problem']);
        $booked = 1;


        $sql1 = "INSERT INTO doctor (name, phone, email, petname, breed, datee,timee,problem,booked) 
         VALUES ('{$name}', '{$phone}', '{$email}', '{$petname}', '{$breed}', '{$datee}','{$timee}','{$problem}','{$booked}')";


        // Check if the query was successful
        if (mysqli_query($conn, $sql1)) {
            echo '<script>
                    alert("APPOINTMENT BOOKED SUCCESSFULLY");
                    window.location.href = "service.php";
                  </script>';
        }

    } else {
        // Delay redirection to show the alert
        echo '<script>
                alert("PLEASE LOG IN FIRST");
                window.location.href = "service.php";
              </script>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
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
                    <span>1234567890</span>
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
                <a class="btn btn-warning mb-3" href="logout.php">LOG OUT</a>

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
                    <a href="" class="nav-item nav-link "><?php echo ($_SESSION["username"]); ?></a>


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
            <h1 class="display-3 text-white mb-4 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <!-- <body style="background: url('img/background.jpg') no-repeat center center fixed; background-size: cover;"></body> -->
                <p class="section-title bg-white text-center text-primary px-3">Our Services</p>
                <h1 class="mb-5 text-white">Healthcare and Monitoring </h1>
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
                                <p class="mb-4"> Genetic Traits & Breed Selection Physical Characteristics
                                    Body Structure: Strong legs, wide chest, and good body condition score (BCS) (Ideal:
                                    4-6 on a 9-point scale).
                                    Health & Disease Resistance. Fertility & Reproductive Performance

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
                            <p class="mb-4">Breeding is a key factor in dairy farming as it determines milk yield,
                                fertility, and overall cattle health.
                                Veterinary Care:
                                1. Regular Health Checkups
                                2.Routine examinations help detect diseases early and prevent outbreaks.
                                3. Vaccination & Disease Prevention
                                4. Common Cattle Diseases & Treatment
                            </p>
                            <a class="btn btn-square rounded-circle" href="breedvet.php"><i
                                    class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="img/service-3.jpg" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="img/service-3.jpg" alt="">
                            </div>
                            <h5 class="mb-3">Types of Cow Breeding</h5>
                            <p class="mb-4">Natural Breeding: Cows mate naturally with a bull to conceive.
                                Artificial Insemination (AI): A controlled method where high-quality bull semen is
                                artificially introduced into the cow's reproductive system to improve genetic traits.
                            </p>
                            <a class="btn btn-square rounded-circle" href="types.php"><i
                                    class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="img/cows1.jpg" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="img/cows1.jpg" alt="">
                            </div>
                            <h5 class="mb-3">Best Cow Breeds for Breeding
                            </h5>
                            <p class="mb-4">Dairy Breeds (High milk production)

                                Holstein Friesian (Highest milk yield)
                                Jersey (High-fat content in milk)
                                Sahiwal (Heat-resistant and good milk producer)
                                Gir (Hardy and disease-resistant)</p>
                            <a class="btn btn-square rounded-circle" href=""><i
                                    class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.3s">
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
                            <a class="btn btn-square rounded-circle" href="artificial.php"><i
                                    class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="img/cows3.jpg" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="img/cows3.jpg" alt="">
                            </div>
                            <h5 class="mb-3">Factors for Successful Breeding</h5>
                            <p class="mb-4">Heat Detection,
                                Proper Nutrition,
                                Disease Control,
                                Genetic Selection
                            </p>
                            <a class="btn btn-square rounded-circle" href=""><i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    
     <!--Features End -->
     <body>
        <div class="container mt-5">
            <h2 class="text-center mb-4 text-black">🐾 COW Doctor Appointment 🐾</h2>
            <form>
                <!-- Owner Details -->
                <div class="mb-3 text-blsck">
                    <label for="ownerName" class="form-label">Owner's Name</label>
                    <input type="text" class="form-control" id="ownerName" placeholder="Enter your name" required>
                </div>
    
                <div class="mb-3 text-blsck">
                    <label for="ownerPhone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="ownerPhone" placeholder="Enter your phone number" required>
                </div>
    
                <div class="mb-3 text-blsck">
                    <label for="ownerEmail" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="ownerEmail" placeholder="Enter your email">
                </div>
    
                <!-- Pet Details -->
                <div class="mb-3 text-blsck">
                    <label for="COW NAME" class="form-label">COW Name</label>
                    <input type="text" class="form-control" id="petName" placeholder="Enter COW name" required>
                </div>
    
                <div class="mb-3 text-blsck">
                    <label for="COW BREED" class="form-label">COW BREED</label>
                    <select class="form-select" id="petType" required>
                        <option value="" selected disabled>Select BREED</option>
                        <option value="Holstein Friesian">Holstein Friesian</option>
                        <option value="Angus">Angus</option>
                        <option value="Sahiwal">Sahiwal</option>
                        <option value="Gir">Gir</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
    
                <div class="mb-3 text-blsck">
                    <label for="appointmentDate" class="form-label">Preferred Appointment Date</label>
                    <input type="date" class="form-control" id="appointmentDate" required>
                </div>
    
                <div class="mb-3 text-blsck">
                    <label for="appointmentTime" class="form-label">Preferred Time</label>
                    <input type="time" class="form-control" id="appointmentTime" required>
                </div>
    
                <div class="mb-3 text-blsck">
                    <label for="reason" class="form-label">Reason for Visit</label>
                    <textarea class="form-control" id="reason" rows="3" placeholder="Describe the problem or service required" required></textarea>
                </div>
    
                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Book Appointment</button>
                </div>
            </form>
        </div>
     


        <!-- Footer Start -->
        <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Our Office</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>DYP SALOKHENAGAR</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>1234567890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>gorakshak302@example.com</p>

                        <div class="d-flex pt-3">
                            <!-- <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a> -->
                        </div>
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
                    <div class="col-lg-3 col-md-6">

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

                        <!--- Designed By <a class="fw-semi-bold" href="https://htmlcodex.com">HACK-A-FARM</a>
                </div>
            </div>
        </div>
    </div>
    <-- Copyright End -->

                        <!-- chatbot -->
                        <script>
                            (function () { if (!window.chatbase || window.chatbase("getState") !== "initialized") { window.chatbase = (...arguments) => { if (!window.chatbase.q) { window.chatbase.q = [] } window.chatbase.q.push(arguments) }; window.chatbase = new Proxy(window.chatbase, { get(target, prop) { if (prop === "q") { return target.q } return (...args) => target(prop, ...args) } }) } const onLoad = function () { const script = document.createElement("script"); script.src = "https://www.chatbase.co/embed.min.js"; script.id = "4mYUDOgL_tZbd6vw55IzH"; script.domain = "www.chatbase.co"; document.body.appendChild(script) }; if (document.readyState === "complete") { onLoad() } else { window.addEventListener("load", onLoad) } })();
                        </script>


                        <!-- Back to Top -->
                        <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a> -->


                        <!-- JavaScript Libraries -->
                        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                        <script
                            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
                        <script src="lib/wow/wow.min.js"></script>
                        <script src="lib/easing/easing.min.js"></script>
                        <script src="lib/waypoints/waypoints.min.js"></script>
                        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
                        <script src="lib/counterup/counterup.min.js"></script>
                        <script src="lib/parallax/parallax.min.js"></script>
                        <script src="lib/lightbox/js/lightbox.min.js"></script>

                        <!-- Template Javascript -->+
                        <script src="js/main.js"></script>
    </body>

</html>