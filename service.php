<?php
session_start();
include('config.php');

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if (isset($_POST['book1'])) {
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

        $sql1 = "INSERT INTO doctor (namee, phone, email, petname, breed, datee, timee, problem) 
                 VALUES ('{$name}', '{$phone}', '{$email}', '{$petname}', '{$breed}', '{$datee}', '{$timee}', '{$problem}')";

        // Check if the query was successful
        if (mysqli_query($conn, $sql1)) {
            echo '<script>
                    alert("APPOINTMENT BOOKED SUCCESSFULLY");
                    window.location.href = "service.php";
                  </script>';
        } else {
            // Debugging: Display error if query fails
            echo '<script>
                    alert("Error: ' . mysqli_error($conn) . '");
                  </script>';
        }
    } else {
        echo '<script>
                alert("PLEASE LOG IN FIRST");
                window.location.href = "service.php";
              </script>';
    }

    //Load Composer's autoloader (created by composer, not included with PHPMailer)
require 'PHPmailer/Exception.php';
require 'PHPmailer/PHPMailer.php';
require 'PHPmailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'bajujadhav17@gmail.com';                     //SMTP username
    $mail->Password   = 'nihu kmtc plme dghn';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('bajujadhav17@gmail.com', 'Go-Rakshak');
    $mail->addAddress($email, 'website');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'From Go-Rakshak';
    // $mail->Body    = " <br> sender name - $name <br> sender email - $email <br> sender phone - $phone <br> senders petname - $petname 
    // <br> senders breed - $breed <br> appoinment time - $datee / $timee <br> senders problem - $problem";

    $mail->Body    = " <html>
    <head>
        <title>New Mail Enquiry</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; }
            .container { max-width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; }
            h2 { color: #333; }
            table { width: 100%; border-collapse: collapse; margin-top: 20px; }
            th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
            th { background-color: #f2f2f2; }
            .footer { margin-top: 20px; font-size: 0.9em; color: #777; }
        </style>
    </head>
    <body>
        <div class='container'>
            <h2>New Appointment from $email</h2>
            <table>
                <tr>
                    <th>Appointment Details</th>
                </tr>
                <tr>
                    <td>
                        <p><strong>Name:</strong> $name</p>
                        <p><strong>Phone:</strong> $phone</p>
                    </td>
                    <td>
                        <p><strong>Date:</strong> $datee</p>
                        <p><strong>Time:</strong> $timee</p>
                    </td>
                </tr>
                <tr>
                    <th colspan='2'><p><strong>problem</strong> $problem</p></th>
                    
                </tr>
                <tr>
                    <th colspan='2'>Consultation Details</th>
                </tr>
            </table>
            <div class='footer'>
                <p>This email was sent from your website Appointment form.</p>
            </div>
        </div>
    </body>
    </html>";
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "<div class='success'>Message has been sent! </div> ";
} catch (Exception $e) {
    echo "<div class='alert'>Message could not be sent. Mailer Error: {$mail->ErrorInfo} </div>";
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
                <h1 class="mb-5 text-black">Healthcare and Monitoring </h1>
            </div>



            <div class="row row-cols-2">
                <div class="col pt-5 pb-5  wow fadeInUp" data-wow-delay="0.1s">
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



                <div class="col pt-5 pb-5 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="img/service-2.jpg" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="img/service-2.jpg" alt="">
                            </div>
                            <h5 class="mb-3"> AI Cow Breed Recognization</h5>
                            <p class="mb-4">It refers to the recognition of cow's breed by the help of image.
                                 Our AI recognizes the colour and the marks on the body of cow and 
                                 responses it.
                            </p>
                            <a class="btn btn-square rounded-circle" href="artificial.php"><i
                                    class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col pt-5  wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="img/service-3.jpg" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="img/service-3.jpg" alt="">
                            </div>
                            <h5 class="mb-3">Environmental Benefits</h5>
                            <p class="mb-4">"Environmental Benefits" refers to the positive effects that cows have on nature and the environment, especially when raised in traditional, eco-friendly ways.</p>
                            <a class="btn btn-square rounded-circle" href="types.php"><i
                                    class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col pt-5 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="img/cows2.jpg" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="img/service-1.jpg" alt="">
                            </div>
                            <h5 class="mb-3">Breeding</h5>
                            <p class="mb-4">The breeding of cows refers to the process of reproducing and raising cattle to improve or maintain certain desirable traits, such as High milk production, Good meat quality, Disease resistance</p>
                            <a class="btn btn-square rounded-circle" href="breedvet.php"><i
                                    class="bi bi-chevron-double-right"></i></a>
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
            <form method="POST" action="service.php">
                <!-- Owner Details -->
                <div class="mb-3 text-blsck">
                    <label for="ownerPhone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" name="phone" placeholder="Enter your phone number"
                        required>
                </div>

                <div class="mb-3 text-blsck">
                    <label for="ownerEmail" class="form-label">Email Address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your email">
                </div>

                <!-- Pet Details -->
                <div class="mb-3 text-blsck">
                    <label for="COW NAME" class="form-label">COW Name</label>
                    <input type="text" class="form-control" name="petname" placeholder="Enter COW name" required>
                </div>

                <div class="mb-3 text-blsck">
                    <label for="COW BREED" class="form-label">COW BREED</label>
                    <select class="form-select" name="breed" required>
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
                    <input type="date" class="form-control" name="datee" required>
                </div>

                <div class="mb-3 text-blsck">
                    <label for="appointmentTime" class="form-label">Preferred Time</label>
                    <input type="time" class="form-control" name="timee" required>
                </div>

                <div class="mb-3 text-blsck">
                    <label for="reason" class="form-label">DISEASE</label>
                    <input class="form-control" name="problem" rows="3"
                        placeholder="Disease" required></input>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" name="book1" class="btn btn-primary">Book Appointment</button>
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

                </div>
            </div>
        </div>
    </div>
    <!-- <-- Copyright End --> 

                <!-- Back to Top -->
                <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>                 

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