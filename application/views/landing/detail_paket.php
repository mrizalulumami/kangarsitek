<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KangArchitect</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=base_url('assets/impact/assets/')?>/img/arsitek.png" rel="icon">
  <link href="<?=base_url('assets/impact/assets/')?>/img/arsitek.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url('assets/impact/assets/')?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url('assets/impact/assets/')?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=base_url('assets/impact/assets/')?>/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?=base_url('assets/impact/assets/')?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?=base_url('assets/impact/assets/')?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url('assets/impact/assets/')?>/css/main.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">putriaini553@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="<?=base_url('landing')?>" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="<?=base_url('assets/impact/assets/')?>/img/logo.png" alt=""> -->
        <h1>KangArchitect<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?=base_url('landing')?>">Home</a></li>
          <li><a href="<?=base_url('landing')?>#about">About </a></li>
          <li><a href="<?=base_url('landing')?>#portfolio">Paket Desain</a></li>
          <li><a href="<?=base_url('landing')?>#team">Team</a></li>
          <li><a href="<?=base_url('landing')?>#recent-post">Artikel</a></li>
          <!-- <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Paket Desain</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="blog.html">Artikel</a></li> -->
          <li><a href="#contact">Contact</a></li>
          <li><a href="blog.html">Login</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Detail Desain Rumah</h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">
            <?php
            if (isset($p_slider)){
                foreach ($p_slider as $ps){ ?>
                  <div class="swiper-slide">
                    <img src="<?=base_url()?><?=$ps['gambar']?>" width="50px" height="500px" alt="">
                  </div>
                  <?php }} ?>
            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>

        <div class="row justify-content-between gy-4 mt-4">
            <?php
            if (isset($p_data)){
                foreach ($p_data as $dp){ ?>
          <div class="col-lg-8">
            <div class="portfolio-description">
              <h2><?=$dp['judul']?></h2>
              <p>
              <?=$dp['deskripsi']?>
              </p>
            </div>
          </div>
          <?php }} ?>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>KangArchitect</span>
          </a>
          <p>Sistem informasi jasa arsitek di NTB, memudahkan masyarakat NTB untuk menemukan arsitek yang profesionla pada bidangnya. sehingga tidak perlu bingung dalam mencari arsitek.

          </p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Tautan</h4>
          <ul>
          <li><a href="<?=base_url('landing')?>">Home</a></li>
          <li><a ref="<?=base_url('landing')?>#about">About </a></li>
          <li><a ref="<?=base_url('landing')?>#portfolio">Paket Desain</a></li>
          <li><a ref="<?=base_url('landing')?>#team">Team</a></li>
          <li><a ref="<?=base_url('landing')?>#recent-post">Artikel</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Pelayanan Kami</h4>
          <ul>
            <li><a href="#">Desain Rumah</a></li>
            <li><a href="#">Desain Villa</a></li>
            <li><a href="#">Kasa Arsitek</a></li>
            <li><a href="#">Artikel</a></li>
            <li><a href="#">Informasi arsitek</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            Adam Street <br>
            Lombok timur, NTB<br>
           KangArchitect <br><br>
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> putriaini553@gmail.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Impact</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?=base_url('assets/impact/assets/')?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url('assets/impact/assets/')?>/vendor/aos/aos.js"></script>
  <script src="<?=base_url('assets/impact/assets/')?>/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?=base_url('assets/impact/assets/')?>/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?=base_url('assets/impact/assets/')?>/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?=base_url('assets/impact/assets/')?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=base_url('assets/impact/assets/')?>/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url('assets/impact/assets/')?>/js/main.js"></script>

</body>

</html>