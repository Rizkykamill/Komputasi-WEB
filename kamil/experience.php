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

  <title>Portfolio Kamil</title>

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
    <!-- header section starts -->
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
              <ul class="navbar-nav">
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
    </header>
    <!-- end header section -->
  </div>

  <section class="service_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                <?php echo titleExperience(1) ?>
            </h2>
            <img src="images/plug.png" alt="">
        </div>

        <div class="service_container d-flex flex-wrap justify-content-between">
            <div class="box">
                <div class="img-box">
                    <img src="images/33.jpg" class="img1" alt="">
                </div>
                <div class="detail-box d-flex flex-column">
                 <br><br>
                    <h5>
                        <?php echo quoteExperience(1) ?>
                    </h5>
                    <p>
                        <?php echo descriptionExperience(1) ?>
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="images/22.jpg" class="img1" alt="">
                </div>
                <div class="detail-box d-flex flex-column">
                    <h5>
                        <?php echo titleExperience(2) ?>
                    </h5>
                    <p>
                        <?php echo quoteExperience(2) ?>
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="images/11.jpg" class="img1" alt="">
                </div>
                <div class="detail-box d-flex flex-column">
                    <h5>
                        <?php echo titleExperience(3) ?>
                    </h5>
                    <p>
                        <?php echo quoteExperience(3) ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

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

  <style>
      .img1 {
          width: 300px !important; /* Ukuran gambar */
          height: auto !important;
      }
      .detail-box {
          padding: 20px; /* Atur padding di dalam detail box */
          text-align: center; /* Rata tengah teks */
      }
      .service_container {
          margin-top: 20px; /* Atur jarak atas */
      }
      .box {
          flex: 0 0 30%; /* Mengatur lebar kotak menjadi 30% untuk tiga kolom */
          margin-bottom: 20px; /* Atur jarak bawah antara kotak */
      }
  </style>

</body>

</html>
