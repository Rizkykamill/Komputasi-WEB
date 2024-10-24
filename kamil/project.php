<?php
// Panggil koneksi dan function
include 'koneksi.php';
include 'function.php';
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Electrochip</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="#">
            <img src="images/logo.png" alt="">
            <span>
              Kamil
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> About me</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="experience.php"> Experience </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="project.php"> Project </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <style>
  .img-box img {
    width: 100%; /* Gambar akan memenuhi lebar kotak */
    height: auto; /* Memastikan rasio aspek tetap */
    max-width: 500px; /* Atur ukuran maksimum gambar, sesuaikan dengan keinginan */
  }

  .detail-box {
    text-align: center; /* Memusatkan teks di bawah gambar */
    margin-top: 15px; /* Memberi jarak antara gambar dan teks */
  }

  .box {
    margin: 15px; /* Jarak antar kotak */
  }
</style>



    </header>
    <!-- end header section -->
  </div>




  <!-- blog section -->

  <section class="blog_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>
        <?php echo titleProject(1) ?>
      </h2>
      <img src="images/plug.png" alt="">
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="box">
          <div class="img-box">
            <img src="images/ui.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
             <?php echo titleProject( 2)?>
            </h5>
            <p>
            <?php echo quoteProject( 2)?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="box">
          <div class="img-box">
            <img src="images/web.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
            <?php echo titleProject( 3)?>
            </h5>
            <p>
            <?php echo quoteProject( id: 3)?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- end blog section -->






  

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-9 mx-auto">
          <p>
            &copy; 2019 All Rights Reserved By
            <a href="https://html.design/">Free Html Templates</a>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>

</body>

</html>