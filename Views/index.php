<?php 
  include_once("../DB/connect.php");
  if(isset($_GET["id"])){
    $id = $_GET["id"]; 
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iPortfolio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.7.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">
      <?php
        $sql = "SELECT id, firstName, lastName, dateOfBirth, website, image, phone, city, degree, email, details FROM biodb";
        $result = mysqli_query($conn, $sql);
        if (mysqli_query($conn, $sql)) {
            // echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
      ?>
      <?php
        if (mysqli_num_rows($result) > 0) {
            // output data of each row    
        while($row = mysqli_fetch_assoc($result)) {
      ?>
      <div class="profile">
        <img src="../photos/<?php echo $row["image"];?>" alt="<?php echo $row["image"];?>" title="<?php echo $row["image"];?>" class="img-fluid rounded-circle"/>
        <h1 class="text-light"><a href="index.php"><?php echo $row["firstName"].' '.$row["lastName"];?></a></h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <!-- <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li> -->
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!-- <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Alex Smith</h1>
      <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
    </div>
  </section> -->
   <!--  End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="../photos/<?php echo $row["image"];?>" height="100%" width="100%" alt="<?php echo $row["image"];?>" title="<?php echo $row["image"];?>"/>
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>UI/UX Designer &amp; Web Developer.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?php echo $row["dateOfBirth"];?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><?php echo $row["website"];?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?php echo $row["city"];?></span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?php echo $row["phone"];?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?php echo $row["degree"];?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span><?php echo $row["email"];?></span></li>
                </ul>
              </div>
            </div>
            <p>
              <?php echo $row["details"];?>
            </p>
          </div>
          <?php } }                                           
            else {
              echo "0 results";
              }
          ?>
        </div>
      </div>
    </section>
    <!-- End About Section -->
    
    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          
          <div class="col-lg-6" data-aos="fade-up">
            <?php
              $sql = "SELECT firstName, lastName, city, phone, website, details FROM biodb";
              $result = mysqli_query($conn, $sql);
              if (mysqli_query($conn, $sql)) {
                  // echo "New record created successfully";
              } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
            ?>
            <?php
              if (mysqli_num_rows($result) > 0) {
                  // output data of each row    
              while($row = mysqli_fetch_assoc($result)) {
            ?>
            <h3 class="resume-title">Summary</h3>
            <div class="resume-item pb-0">
              <h4><?php echo $row["firstName"].'  '.$row["lastName"];?></h4>
              <p><em><?php echo $row["details"];?></em></p>
              <ul>
                <li><?php echo $row["city"];?></li>
                <li><?php echo $row["phone"];?></li>
                <li><?php echo $row["website"];?></li>
              </ul>
              <?php } }                                           
                else {
                  echo "0 results";
                  }
              ?>
            </div>

            <?php
              $sql = "SELECT * FROM resumedb WHERE rId=6";
              $result = mysqli_query($conn, $sql);
              if (mysqli_query($conn, $sql)) {
                  // echo "New record created successfully";
              } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
            ?>
            <?php
              if (mysqli_num_rows($result) > 0) {
                  // output data of each row    
              while($row = mysqli_fetch_assoc($result)) {
            ?>
            <h3 class="resume-title"><?php echo $row["rHead"];?></h3>
            <div class="resume-item">
              <h4><?php echo $row["rTitle"];?> &amp; Graphic Design</h4>
              <h5><?php echo $row["rStartyear"].' - '.$row["rEndyears"];?></h5>
              <p><em><?php echo $row["rname"];?></em></p>
              <p><?php echo $row["rdetails"];?></p>
              <?php } }                                           
                else {
                  echo "0 results";
                  }
              ?>
            </div>
          </div>
            <?php
              $sql = "SELECT * FROM resumedb WHERE rId=7";
              $result = mysqli_query($conn, $sql);
              if (mysqli_query($conn, $sql)) {
                  // echo "New record created successfully";
              } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
            ?>
            <?php
              if (mysqli_num_rows($result) > 0) {
                  // output data of each row    
              while($row = mysqli_fetch_assoc($result)) {
            ?>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title"><?php echo $row["rHead"];?></h3>
            <div class="resume-item">
              <h4><?php echo $row["rTitle"];?></h4>
              <h5><?php echo $row["rStartyear"].' - '.$row["rEndyears"];?></h5>
              <p><em><?php echo $row["rname"];?></em></p>
              <ul>
                <li><?php echo $row["rdetails"];?></li>
              </ul>
              <?php } }                                           
                else {
                  echo "0 results";
                  }
              ?>
              
            </div>
            
          </div>
        </div>

      </div>
    </section>
    <!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <?php
            $sql = "SELECT * FROM categorydb WHERE status = 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_query($conn, $sql)) {
                // echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
          ?>
          
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <?php
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row    
                while($row = mysqli_fetch_assoc($result)) {
              ?>
              <li data-filter=".filter-<?php echo $row['catSlug'];?>"> <?php echo $row['cName']; ?> </li>
              <?php } } 
                else {
                  echo "0 results";
                  }
              ?>
            </ul>
          </div>          
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
          <?php
            $sql = "SELECT * FROM categorydetails";
            $result = mysqli_query($conn, $sql);
            if (mysqli_query($conn, $sql)) {
                // echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
          ?>
          <?php
            if (mysqli_num_rows($result) > 0) {
                // output data of each row    
            while($row = mysqli_fetch_assoc($result)) {
          ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img  src="../photos/category/<?php echo $row["image"];?>" class="img-fluid" alt="<?php echo $row["image"];?>">
              <div class="portfolio-links">
                <a href="portfolio-details.php?id=<?php echo $row["cdId"];?>" title="More Details"><i class="bx bx-link"></i></a>
                <?php } } 
                  else {
                    echo "0 results";
                    }
                ?>
              </div>
            </div>           
          </div>
        

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <?php
            $sql = "SELECT * FROM servicedb WHERE status = 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_query($conn, $sql)) {
                // echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
          ?>
          <?php
            if (mysqli_num_rows($result) > 0) {
                // output data of each row    
            while($row = mysqli_fetch_assoc($result)) {
          ?>
          <div class="col-lg-4 col-md-6 icon-box" data-aos-delay="100">
            <div class="image"><i><img src="../photos/service/<?php echo $row["image"];?>" height="100%" width="100%" alt="<?php echo $row["image"];?>" title="<?php echo $row["image"];?>"/></i></div>
            <h4 class="title"><?php echo $row["sName"];?></h4>
            <p class="details"><?php echo $row["sdetails"];?></p>
          </div>
          <?php
            }}
          ?>
        </div>

      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <?php
              $sql = "SELECT * FROM reviewdb WHERE status = 1";
              $result = mysqli_query($conn, $sql);
              if (mysqli_query($conn, $sql)) {
                  // echo "New record created successfully";
              } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
            ?>
            <?php
              if (mysqli_num_rows($result) > 0) {
                  // output data of each row    
              while($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?php echo $row["reComment"];?>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="../photos/review/<?php echo $row["image"];?>" height="100%" width="100%" alt="<?php echo $row["image"];?>" title="<?php echo $row["image"];?>"/>
                <h3><?php echo $row["reNameBn"];?></h3>
                <h4><?php echo $row["reDesignation"];?></h4>
              </div>
            </div>
            <!-- End testimonial item -->
            <?php
              }}
            ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-in">

          <?php
            $sql = "SELECT city, email, phone  FROM biodb";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
          ?>
          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p><?php echo $row["city"];?></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><?php echo $row["email"];?></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p><?php echo $row["phone"];?></p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>iPortfolio</span></strong>
      </div>
      <div class="credits">
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer> -->
  <!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>