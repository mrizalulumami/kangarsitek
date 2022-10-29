<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>KangArchitect</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('assets/impact/assets') ?>/img/arsitek.png" rel="icon">
    <link href="<?= base_url('assets/impact/assets') ?>/img/arsitek.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/impact/assets') ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/impact/assets') ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets/impact/assets') ?>/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('assets/impact/assets') ?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/impact/assets') ?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/impact/assets') ?>/css/main.css" rel="stylesheet">

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
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:contact@example.com">putriaini553@gmail.com</a></i>
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
            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="<?= base_url('assets/impact/assets') ?>/img/logo.png" alt=""> -->
                <h1>KangArchitect<span>.</span></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#portfolio">Paket desain</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="blog.html">Artikel</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#contact">Logout</a></li>
                </ul>
            </nav><!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div
                    class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Welcome to <span>KangArchitect</span></h2>
                    <p>KangArchitect hadir untuk temukan desain rumah terbaik untukmu. Dengan banyak pilihan arsitek
                        yang kamu inginkan dan tentunya profesional pada bidangnya.</p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="<?= base_url('assets/impact/assets') ?>/img/hero-img.svg" class="img-fluid" alt=""
                        data-aos="zoom-out" data-aos-delay="100">
                </div>
            </div>
        </div>

        <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-easel"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Paket Desain</a></h4>
                        </div>
                    </div>
                    <!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-gem"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Arsitek</a></h4>
                        </div>
                    </div>
                    <!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-geo-alt"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Artikel</a></h4>
                        </div>
                    </div>
                    <!--End Icon Box -->
                    <!--End Icon Box -->

                </div>
            </div>
        </div>

        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>About Us</h2>
                    <p>KangArchitect merupakan website sistem informasi pelayanan jasa Arsitek yang ada di NTB</p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <h3>Temukan Desain rumah terbaik mu disini !</h3>
                        <img src="<?= base_url('assets/impact/assets') ?>/img/about.jpg"
                            class="img-fluid rounded-4 mb-4" alt="">
                        <p> KANG ARCHITECT, jasa arsitek desain rumah tropis & villa mewah, konsultan jasa desain rumah
                            . Layanan arsitek desain rumah dari kami memberi solusi dari berbagai tantangan yang ada
                            dalam mempersiapkan rencana pembangunan yang sesuai standar desain arsitek rumah.</p>
                        <p>Portfolio jasa desain arsitek desain rumah vila , ratusan portfolio karya desain arsitek
                            telah terkonfirmasi terbangun dengan baik sesuai acuan gambar, sebagai produk jasa arsitek
                            kita, gambar teknis kerja ( gambar arsitek & struktur ), kami berpengalaman lebih 10 tahun
                            bekerja dalam tim & tetap memberi koordinasi pada tahap pelaksanaan pembangunan hunian
                            eksklusif Anda .</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">
                                Jasa desain arsitek rumah & vila mewah, layanan online konsultasi & perencanaan desain
                                hunian modern dengan wilayah seluruh NTB,
                                dimanapun Anda berada, rencana persiapan desain untuk pembangunan hunian Anda tetap
                                berjalan, proses komunikasi jasa arsitek rumah & pengajuan usulan desain
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Jasa Desain Arsitek & Struktur Rumah vila -
                                    Seluruh NTB</li>
                                <li><i class="bi bi-check-circle-fill"></i> Jasa Desain Interior & Pelaksanaan ( Design
                                    & Build ) - Seluruh NTB</li>
                                <li><i class="bi bi-check-circle-fill"></i> Jasa Partner Pelaksanaan Pembangunan - NTB
                                </li>
                            </ul>
                            <p>
                                Harga jasa arsitek rumah dihitung berdasar luas perkiraan bangunan, luasan dapat
                                diperkirakan dari info kebutuhan ruangan utama & kami akan menginformasikan luasan ideal
                                bangunan rumahnya saat pembicaraan awal,
                                standar kelengkapan gambar sesuai yang kami informasikan pada keterangan selanjutnya &
                                Ex-clude perhitungan RAB.
                            </p>

                            <div class="position-relative mt-4">
                                <img src="<?= base_url('assets/impact/assets') ?>/img/about3.jpg"
                                    class="img-fluid rounded-4" alt="">
                                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Our Services Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Testimoni</h2>
                    <p>dbawah ini merupakan testimoni dari pelanggan setia KangArchitect</p>
                </div>

                <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">
                                        <img src="<?= base_url('assets/impact/assets') ?>/img/testimonials/testimonials-1.jpg"
                                            class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Saul Goodman</h3>
                                            <h4>Ceo &amp; Founder</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Website KangArsitect merupakan tempat pertama saya untuk memesan jasa pelayanan
                                        arsitek di Ntb. Arsitek nya ssangat ramah dan tentunya memuaskan sekali.
                                        memberikan kenyamanan bagi saya.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">
                                        <img src="<?= base_url('assets/impact/assets') ?>/img/testimonials/testimonials-2.jpg"
                                            class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Sara Wilsson</h3>
                                            <h4>Ibu rumah tangga</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        saya benar-benar bingung mencari Arsitek di Ntb, karena jarang arsitek yang saya
                                        ketahui. akhirnya ada website KangArchitect yang membantu mendesain rumah impian
                                        saya. terimakasih for All team.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">
                                        <img src="<?= base_url('assets/impact/assets') ?>/img/testimonials/testimonials-3.jpg"
                                            class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Jena Karlis</h3>
                                            <h4>Guru</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Bersyukur jika ada website KangArchitect ini, karena membantu arsitek yang ada
                                        di NTB semakin berkembang dan diketahui banyak orang terkhusus di NTB.
                                        terimakasih telah menyediakan website KangArchitect ini.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">
                                        <img src="<?= base_url('assets/impact/assets') ?>/img/testimonials/testimonials-4.jpg"
                                            class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Matt Brandon</h3>
                                            <h4>Freelancer</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Desain rumah impian saya sesuai dengan harapan dan harga nya pun terjangkau
                                        sehingga tidak takut untuk memesan jasa arsitek. den detail informasi yang saya
                                        dapat sangat lengkap. bagus banget website KangArchitect ini.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">
                                        <img src="<?= base_url('assets/impact/assets') ?>/img/testimonials/testimonials-5.jpg"
                                            class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>John Larson</h3>
                                            <h4>Entrepreneur</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Buat masyarakat lombok kalau mau cari jasa arsitek di NTB, wajib cari di website
                                        KangArchitect karena sangat memuasan. kualiats no 1 disini. dan arsitek nya
                                        sangat humble. Alhamdulillah saya sangat puas dengan hasilnya.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Paket Desain</h2>
                    <p>Paket Desain pada website KangArchitect ini memiliki beberapa pilihan yang bisa jadi refrensi.
                    </p>
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                    <div>
                        <ul class="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Paket VIP</li>
                            <li data-filter=".filter-product">Paket Medium</li>
                            <li data-filter=".filter-branding">Paket Standar</li>
                            <li data-filter=".filter-books">Paket keluarga</li>
                        </ul><!-- End Portfolio Filters -->
                    </div>

                    <div class="row gy-4 portfolio-container">

                        <?php
                        if (isset($p_data)) {
                            foreach ($p_data as $pd) { ?>

                        <div class="col-xl-4 col-md-6 portfolio-item <?= $pd['jenis'] ?>">
                            <div class="portfolio-wrap">
                                <a href="<?= base_url() . $pd['gambar'] ?>" data-gallery="portfolio-gallery-app"
                                    class="glightbox"><img src="<?= base_url() . $pd['gambar'] ?>" class="img-fluid"
                                        alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="portfolio-details.html" title="More Details"><?= $pd['judul'] ?></a>
                                    </h4>
                                    <p style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                                        <?= $pd['deskripsi'] ?></p>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->
                        <?php }
                        } ?>

                    </div><!-- End Portfolio Container -->

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Team</h2>
                    <p>Pilihan Arsitek yang akan membantumu membangun desain rumah impian mu !</p>
                </div>

                <div class="row gy-4">

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <img src="<?= base_url('assets/impact/assets') ?>/img/team/team-1.jpg" class="img-fluid"
                                alt="">
                            <h4>Walter White</h4>
                            <span>Arsitek</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <img src="<?= base_url('assets/impact/assets') ?>/img/team/team-2.jpg" class="img-fluid"
                                alt="">
                            <h4>Sarah Jhinson</h4>
                            <span>Arsitek</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <img src="<?= base_url('assets/impact/assets') ?>/img/team/team-3.jpg" class="img-fluid"
                                alt="">
                            <h4>William Anderson</h4>
                            <span>Arsitek</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <img src="<?= base_url('assets/impact/assets') ?>/img/team/team-4.jpg" class="img-fluid"
                                alt="">
                            <h4>Amanda Jepson</h4>
                            <span>Arsitek</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>
        </section><!-- End Our Team Section -->
        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-posts" class="recent-posts sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Artikel arsitek</h2>
                    <p>Yuk tambah wawasan mu disini tentang dunia arsitek ! </p>
                </div>

                <div class="row gy-4">

                    <div class="col-xl-4 col-md-6">
                        <article>

                            <div class="post-img">
                                <img src="<?= base_url('assets/impact/assets') ?>/img/blog/blog-1.jpg" alt=""
                                    class="img-fluid">
                            </div>

                            <p class="post-category">Edukasi</p>

                            <h2 class="title">
                                <a href="blog-details.html">3 Tips Menghadirkan Kenyamanan di Rumah Mewah Anda!</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <img src="<?= base_url('assets/impact/assets') ?>/img/blog/blog-author.jpg" alt=""
                                    class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">Raehan</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Jan 1, 2022</time>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-md-6">
                        <article>

                            <div class="post-img">
                                <img src="<?= base_url('assets/impact/assets') ?>/img/blog/blog-2.jpg" alt=""
                                    class="img-fluid">
                            </div>

                            <p class="post-category">Edukasi</p>

                            <h2 class="title">
                                <a href="blog-details2.html">Tips memilih bahan bangunan yang berkualitas </a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <img src="<?= base_url('assets/impact/assets') ?>/img/blog/blog-author-2.jpg" alt=""
                                    class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">Allisa Mayer</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Jun 5, 2022</time>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-md-6">
                        <article>

                            <div class="post-img">
                                <img src="<?= base_url('assets/impact/assets') ?>/img/blog/blog-3.jpg" alt=""
                                    class="img-fluid">
                            </div>

                            <p class="post-category">Edukasi</p>

                            <h2 class="title">
                                <a href="blog-details3.html">Inspirasi Warna Cat Dinding yang Cocok untuk Ruang dengan
                                    Cahaya Alami yang Melimpah</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <img src="<?= base_url('assets/impact/assets') ?>/img/blog/blog-author-3.jpg" alt=""
                                    class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">Mark Dower</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Jun 22, 2022</time>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div><!-- End post list item -->

                </div><!-- End recent posts list -->

            </div>
        </section><!-- End Recent Blog Posts Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Contact</h2>
                    <p>Jika ada yang ditanyakan tentang Arsitek langsung kirim pesanmu sekarang !</p>
                </div>

                <div class="row gx-lg-0 gy-4">

                    <div class="col-lg-4">

                        <div class="info-container d-flex flex-column align-items-center justify-content-center">
                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4>Location:</h4>
                                    <p>Lombok timur, NTB</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>Email:</h4>
                                    <p>putriaini553@gmail.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>Call:</h4>
                                    <p>+1 5589 55488 55</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-clock flex-shrink-0"></i>
                                <div>
                                    <h4>Open Hours:</h4>
                                    <p>Mon-Sat: 11AM - 23PM</p>
                                </div>
                            </div><!-- End Info Item -->
                        </div>

                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="7" placeholder="Message"
                                    required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span>KangArchitect</span>
                    </a>
                    <p>Sistem informasi jasa arsitek di NTB, memudahkan masyarakat NTB untuk menemukan arsitek yang
                        profesionla pada bidangnya. sehingga tidak perlu bingung dalam mencari arsitek. </p>
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
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Paket Desain</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Artikel</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Pelayanan Kami</h4>
                    <ul>
                        <li><a href="#">Desaign Rumah</a></li>
                        <li><a href="#">Desain Villa</a></li>
                        <li><a href="#">Jasa Arsitek</a></li>
                        <li><a href="#">Artikel</a></li>
                        <li><a href="#">Informasi Arsitek</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>
                        Adam Yusuf Makmur<br>
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
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
            </div>
        </div>

    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets/impact/assets') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/impact/assets') ?>/vendor/aos/aos.js"></script>
    <script src="<?= base_url('assets/impact/assets') ?>/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url('assets/impact/assets') ?>/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url('assets/impact/assets') ?>/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url('assets/impact/assets') ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('assets/impact/assets') ?>/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets/impact/assets') ?>/js/main.js"></script>

</body>

</html>