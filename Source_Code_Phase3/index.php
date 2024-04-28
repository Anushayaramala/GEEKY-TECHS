<?php
include_once "hms/include/config.php";
if (isset($_POST["submit"])) {
    $name = $_POST["fullname"];
    $email = $_POST["emailid"];
    $mobileno = $_POST["mobileno"];
    $dscrption = $_POST["description"];
    $query = mysqli_query(
        $con,
        "insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')",
    );
    echo "<script>alert('Your information succesfully submitted');</script>";
    echo "<script>window.location.href ='index.php'</script>";
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hospital Management System</title>
    <meta name="description" content=" Our Hospital Management System (HMS) is a comprehensive software solution designed to streamline and optimize the operations of healthcare facilities. With our HMS software, hospitals and clinics can efficiently manage patient records, appointments, billing, and administrative tasks, resulting in improved efficiency, accuracy, and patient care.">
    <meta name="keywords" content="hospital management system, HMS, healthcare software, hospital software, appointment scheduling, patient management, medical records management">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>


    <body>

    <!-- ################# Header Starts Here#######################--->
    
 <header id="menu-jk">
    
        <div id="nav-head">
            
            <nav class="header-nav navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <span  style="color: #2e62c8;font-weight:bold; font-size:42px; margin-top: 1% !important;">HMS</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div id="menu" class="collapse nav-item navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="#hero">Home</a></li>
                <li class="nav-item"><a href="#about_us">About Us</a></li>
                <li class="nav-item"><a href="#logins">Logins</a></li>
                <li class="nav-item"><a href="#services">Services</a></li>
                <li class="nav-item"><a href="#gallery">Gallery</a></li>
                <li class="nav-item"><a href="#contact">Contact Us</a></li>
                
            </ul>
        </div>
    </div>
</nav>
        </div>
    </header>
   

     <!-- ################# Slider Starts Here#######################--->
<section id="hero" class="d-flex align-items-center">
<div class="container">
  <div class="row">
    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
      <h1 class="mt-1">Your Health Hub</h1>
      <h2 class="mt-2 tag-light"> Streamlining Healthcare Operations: Introducing Our Hospital Management System </h2>
      <div><a class=" mt-3 btn rounded btn-success" href="hms/user-login.php">Book Appointment</a></div>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img">
      <img src="assets/images/4997671.png" class="img-fluid" alt="health hub">
    </div>
  </div>
</div>

</section><!-- End Hero -->
  
            
<section id="about_us" class="d-flex about-us align-items-center">
    <div class="container"> <!-- Assuming there's a container to wrap the content -->
        <div class="row">
            <div class="col-12 ">
                <div class="center no-margin">
                    <div class="abut-yoiu">
                        <h2>About Health Hub</h2>
                        <p>Hospital Management System - HMS</p>
                        <br><br>
                        <?php
                        $ret = mysqli_query(
                            $con,
                            "SELECT * FROM tblpage WHERE PageType='aboutus'",
                        );
                        while ($row = mysqli_fetch_array($ret)) { ?>
                            <p class="center"><?php echo $row[
                                "PageDescription"
                            ]; ?>.</p>
                        <?php }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    
  <!--  ************************* Logins ************************** -->
    
    
     <section id="logins" class="our-blog container-fluid">
        <div class="container">
        <div class="inner-title">

                <h2>Logins</h2>
                <p>Simple, Significant & Secured</p>
            </div>
            <div class="col-sm-12 blog-cont">
                <div class="row no-margin">
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img class="rounded" src="assets/images/blu.png" alt="health hub">
                                    
                            <div class="blog-single-det">
                                <h6>Patient Portal</h6>
                                <a href="hms/user-login.php" target="_blank">
                                    <button class="btn btn-success btn-block btn-md">Login</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                        <img class="rounded" src="assets/images/blu.png" alt="">

                            <div class="blog-single-det">
                                <h6>Doctors Portal</h6>
                                <a href="hms/doctor" target="_blank">
                                    <button class="btn btn-success btn-block btn-md">Login</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                        <img class="rounded" src="assets/images/blu.png" alt="health hub">

                            <div class="blog-single-det">
                                <h6>Admin Portal</h6>
                    
                                <a href="hms/admin" target="_blank">
                                    <button class="btn btn-success btn-block btn-md">Login</button>
                                </a>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            
        </div>
    </section>  







    <!-- ################# Our Departments Starts Here#######################--->


    <section id="services" class="key-features department">
        <div class="container">
            <div class="inner-title">

                <h2>Our Consultations Available</h2>
                <p>Take a look at some of our services</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-heartbeat"></i>
                        <h5>Cardiology</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-ribbon"></i>
                        <h5>Orthopaedic</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                       <i class="fab fa-monero"></i>
                        <h5>Neurologist</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-capsules"></i>
                        <h5>Pharma Pipeline</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-prescription-bottle-alt"></i>
                        <h5>Pharma Team</h5>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="far fa-thumbs-up"></i>
                        <h5>Appointments</h5>

                    </div>
                </div>
            </div>
        </div>

    </section>
    
    
  
    

    
            <!--  ************************* Gallery Starts Here ************************** -->
        <div id="gallery" class="gallery">    
           <div class="container">
              <div class="inner-title">

                <h2>Our Team</h2>
                <p>View our doctors from each department</p>
            </div>
              <div class="row">
                

        <div class="gallery-filter d-none d-sm-block">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">Dental</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">Cardiology</button>
            <button class="btn btn-default filter-button" data-filter="spray"> Neurology</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Laboratroy</button>
        </div>
        <br/>



            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets/images/gallery/gallery_01.jpg" class="rounded img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="assets/images/gallery/gallery_02.jpg" class="rounded img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets/images/gallery/gallery_03.jpg" class="rounded img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="assets/images/gallery/gallery_04.jpg" class="rounded img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/gallery/gallery_05.jpg" class="rounded img-responsive">
            </div>

          

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/gallery/gallery_06.jpg" class="rounded img-responsive">
            </div>

        </div>
    </div>
       
       
       </div>
        <!-- ######## Gallery End ####### -->
        <section id="contact" class="contact">
      <div class="container">

        <div class="section-title center">
          <h2>Contact</h2>
          <p>View through the map and make the perfect consultation</p>
        </div>
<br>
        <div>
        <iframe title="Downtown Conference Center on Google Maps" style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div>
        <br>
   
                  
 

</div>

</div>


</div>
</div>
      
</div>
    </section><!-- End Contact Section -->

    
 
    
    
    
    <br>
    
    <!-- ################# Footer Starts Here#######################--->


    <footer class="footer">
        <div class="container">
            <div class="row">
       
                <div class="col-md-6 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="#about">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="#services">Services</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="#logins">Logins</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="#gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="#contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 map-img">
                    <h2>Location</h2>
                    <address class="md-margin-bottom-40">

<?php
$ret = mysqli_query($con, "select * from tblpage where PageType='contactus' ");
while ($row = mysqli_fetch_array($ret)) { ?>


                        <?php echo $row["PageDescription"]; ?> <br>
                        Phone: <?php echo $row["MobileNumber"]; ?> <br>
                        Email: <a style="color:#fff;" href="mailto:<?php echo $row[
                            "Email"
                        ]; ?>" class=""><?php echo $row["Email"]; ?></a><br>
                        Timing: <?php echo $row["OpenningTime"]; ?>
                    </address>

        <?php }
?>





                </div>
            </div>
        </div>
        

    </footer>
    <div class="copy">
            <div class="container center">
         Health Hub
                
     
            </div>

        </div>
    
    </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>

<script src="assets/js/script.js"></script>



</html>