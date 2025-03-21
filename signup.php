<?php

    if(isset($_POST['save'])){
        include "config.php";

        $uname = mysqli_real_escape_string($conn,$_POST['uname']);
        $uemail =mysqli_real_escape_string($conn, $_POST['uemail']);
        $upassword =mysqli_real_escape_string($conn, $_POST['upassword']);

        $sql = "SELECT username FROM user WHERE username = '{$uname}'";
        $result = mysqli_query($conn, $sql) or die("QUERY FAILED");
        

        if(mysqli_num_rows($result) > 0){
          echo "<p style='color:red;text-align:center;margin:10px 0;'>username aldready exist</p>";
        }else{
         $sql1 = "INSERT INTO user (username, useremail, userpassword) 
         VALUES ('{$uname}', '{$uemail}', '{$upassword}')";
          if (mysqli_query($conn,$sql1)) {
           echo '<script type="text/javascript">';
                    echo 'alert("SIGNUP SUCCESSFUL NOW LOG IN WITH YOUR DETAILS");';
                    echo '</script>';
                    echo "<script>window.location.href = 'index.php';</script>";                    }
        }
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
    
    <meta charset="utf-8">
    <title>go RAKSHAK</title>
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
    <link href="css/stylesignup.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div> -->
    <!-- Spinner End -->





    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
            <img src="img/GO-RAKSHAK.png" alt="Bootstrap" width="290" height="50">
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link ">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Services</a>
                <a href="product.html" class="nav-item nav-link">Products</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="gallery.html" class="dropdown-item">Gallery</a>
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <div class="border-start ps-4 d-none d-lg-block">
            <?php
                if (isset($_SESSION["username"])) {

                ?>                  
                     <a href="" class="nav-item nav-link active" ><?php echo ($_SESSION["username"]); ?></a>
                 
                    
                <?php 
					} else{
						?>
							
							<a href="login.php" >
                    <button type="button" class="btn btn-outline-dark">Sign-in </button> 
                </a>
                <a href="signup.php" >
                    <button type="button"  class="btn btn-outline-dark active">Sign-up </button>  
                </a>

					<?php
					 }
                ?>
            </div>
        </div>
    </nav>
 <!-- Navbar End -->
   <div class="nnav ">
   <div class="container">
    <div class="title animated slideInDown">Registration</div>
    <div class="content">
      <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" autocomplete="off">
        <div class="user-details">
          <div class="input-box ">
            <span class="details animated slideInDown">username</span>
            <input name="uname" type="text" placeholder="Enter your username" required>
          </div>
         
          <div class="input-box">
            <span class="details animated slideInDown">Email</span>
            <input name="uemail" type="text" placeholder="Enter your email" required>
          </div>
          
          <div class="input-box">
            <span class="details animated slideInDown">Password</span>
            <input name="upassword" type="text" placeholder="Enter your password" required>
          </div>
          
        </div>
       
        <div class="button animated slideInDown">
          <input type="submit" name="save" value="Register">
        </div>
        <div class="signup-link animated slideInDown">
               ARE YOU MEMBER? <a href="login.php">LOGIN NOW</a>
            </div>
      </form>
    </div>
    </div>
   </div>
       <!-- Scripts -->

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js">
  </script>
   </body>
</html>    