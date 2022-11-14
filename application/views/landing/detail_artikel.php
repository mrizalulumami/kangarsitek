<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KangArchitect</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=base_url('assets/impact/assets')?>/img/favicon.png" rel="icon">
  <link href="<?=base_url('assets/impact/assets')?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url('assets/impact/assets')?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url('assets/impact/assets')?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=base_url('assets/impact/assets')?>/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?=base_url('assets/impact/assets')?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?=base_url('assets/impact/assets')?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url('assets/impact/assets')?>/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact - v1.0.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
        <!-- <img src="<?=base_url('assets/impact/assets')?>/img/logo.png" alt=""> -->
        <h1>KangArchitect<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?=base_url('landing')?>">Home</a></li>
          <li><a href="<?=base_url('landing')?>#about">About </a></li>
          <li><a href="<?=base_url('landing')?>#portfolio">Paket Desain</a></li>
          <li><a href="<?=base_url('landing')?>#team">Team</a></li>
          <li><a href="<?=base_url('landing')?>#recent-post">Artikel</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#contact">Login</a></li>
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
              <h2>Artikel</h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

        <?php if(isset($ar_data)){
            foreach($ar_data as $adt){?>
          <div class="col-lg-12">

            <article class="blog-details">

              <div class="post-img">
                <img src="<?=base_url().$adt['gambar']?>" alt="" width="100%" class="img-fluid">
              </div>

              <h2 class="title"><?=$adt['judul']?></h2>

              <div class="meta-top">
              </div><!-- End meta top -->

              <div class="content">
                <p>
                    <?=$adt['deskripsi']?>
                  
                </p>
              </div><!-- End post content -->
            </article><!-- End blog post -->
          </div>
          <?php }}?>
          
        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>KangArchitect</span>
          </a>
          <p>Sistem informasi jasa arsitek di NTB, memudahkan masyarakat NTB untuk menemukan arsitek yang profesionla pada bidangnya. sehingga tidak perlu bingung dalam mencari arsitek.</p>
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
            <li><a href="<?=base_url('landing')?>#about">About </a></li>
            <li><a href="<?=base_url('landing')?>#portfolio">Paket Desain</a></li>
            <li><a href="<?=base_url('landing')?>#team">Team</a></li>
            <li><a href="<?=base_url('landing')?>#recent-post">Artikel</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Pelayanan Kami</h4>
          <ul>
            <li><a href="#">Desain Rumah</a></li>
            <li><a href="#">Desain Villa</a></li>
            <li><a href="#">Jasa Arsitek</a></li>
            <li><a href="#">Artikel</a></li>
            <li><a href="#">Informasi Arsitek</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Kontak</h4>
          <p>
            Adam Yusuf Makmur<br>
            Lombok timur, NTB<br>
            KangArchitect<br><br>
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> putriaini553@gmail.com<br>
          </p>

        </div>

      </div>
    </div>


  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?=base_url('assets/impact/assets')?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url('assets/impact/assets')?>/vendor/aos/aos.js"></script>
  <script src="<?=base_url('assets/impact/assets')?>/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?=base_url('assets/impact/assets')?>/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?=base_url('assets/impact/assets')?>/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?=base_url('assets/impact/assets')?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=base_url('assets/impact/assets')?>/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url('assets/impact/assets')?>/js/main.js"></script>

</body>

</html>