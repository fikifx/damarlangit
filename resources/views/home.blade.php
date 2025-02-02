<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Beranda - Damarlangit</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo-site.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Gp
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Updated: Jun 06 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body class="index-page">
    </head>

    <body>
        <header id="header" class="header d-flex align-items-center fixed-top shadow-none" style="background: none">
            <div
                class="container-fluid container-xl container-custom position-relative d-flex align-items-center justify-content-between">

                <a href="/" class="logo d-flex align-items-center me-auto me-lg-0">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img src="assets/img/logo.png" alt="#" style="margin-left: 35px;">
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero" class="active">Beranda</a></li>
                        <li><a href="/tentangkami" target="_blank">Tentang Kami</a></li>
                        <li><a href="#services">Cover Patner</a></li>
                        <li><a href="#team">Katalog</a></li>
                        <li><a href="/hubungikami" target="_blank">Hubungi Kami</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

                <a class="btn-getstarted" href="/admin" target="_blank" style="margin-right: 35px;">Login</a>

            </div>
        </header>



        <main class="main">

            <!-- Hero Section -->
            <section id="hero" class="hero section">

                <img src="assets/img/aw1.png" alt="" data-aos="fade-in">

                <div class="container">

                    <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-xl-6 col-lg-8">
                            <p>Publisher Musik Indonesia</p>
                            <h2>Daftarkan Karyamu<span> Dapatkan Royalti</span></h2>
                        </div>
                    </div>

                    <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box">
                                <h1><a href=""><span data-purecounter-start="0" data-purecounter-end="{{ $jumlahKatalog }}"
                                            data-purecounter-duration="3" class="purecounter"></span></a></h1>
                                <h3><a href="">Katalog</a></h3>
                            </div>
                        </div>

                        <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box">
                                <h1><a href=""><span data-purecounter-start="0" data-purecounter-end="{{ $jumlahUser }}"
                                            data-purecounter-duration="3" class="purecounter"></span></a></h1>
                                <h3><a href="">Member</a></h3>
                            </div>
                        </div>

                        <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box">
                                <h1><a href=""><span data-purecounter-start="0" data-purecounter-end="{{ $jumlahPeriode }}"
                                            data-purecounter-duration="3" class="purecounter"></span></a></h1>
                                <h3><a href="">Periode</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- /Hero Section -->

            <!-- About Section -->
            <section id="about" class="about section">

                <div class="container py-5" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4">
                        <div class="col-lg-6 order-1 order-lg-2 d-flex justify-content-center">
                            <img src="assets/img/pana.png" width="75%" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 order-2 order-lg-1 content">
                            <h3 class="mb-4">Tentang Damar Langit</h3>
                            <p>
                                Damarlangit adalah publisher musik yang bergerak di ranah lisensi dan pengelolaan
                                royalti terkait penggunaan hak cipta musik
                            </p>
                            <p>
                                Tugas kami adalah memastikan para pencipta lagu atau komposer menerima hak ekonomi yang
                                seharusnya diterima dari karya cipta mereka
                            </p>
                            <p>
                                Damarlangit mengkoleksikan penghasilan dari penggunaan musik para pencipta lagu atau
                                komposer terutama dalam video yang diunggah di youtube, facebook, spotify maupun
                                platform musik digital lainnya untuk dibayarkan kepada pemegang hak cipta sesuai dengan
                                kesepatan yang telah disepakati dan tertuang dalam kontrak ekslusif.
                            </p>
                            <button class="elegant-button mt-4" type="submit">Lihat Selengkapnya</button>
                        </div>
                    </div>

                </div>

            </section><!-- /About Section -->

            <!-- About Section -->
            <section id="about" class="about section">

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4">
                        <div class="col-lg-6 order-2 order-lg-2 content">
                            <h3 class="mb-4">Kenal Lebih Dekat Dengan Cover Partner</h3>
                            <p>
                                Damarlangit adalah publisher musik yang bergerak di ranah lisensi dan pengelolaan
                                royalti terkait penggunaan hak cipta musik
                            </p>
                            <p>
                                Tugas kami adalah memastikan para pencipta lagu atau komposer menerima hak ekonomi yang
                                seharusnya diterima dari karya cipta mereka
                            </p>
                            <p>
                                Damarlangit mengkoleksikan penghasilan dari penggunaan musik para pencipta lagu atau
                                komposer terutama dalam video yang diunggah di youtube, facebook, spotify maupun
                                platform musik digital lainnya untuk dibayarkan kepada pemegang hak cipta sesuai dengan
                                kesepatan yang telah disepakati dan tertuang dalam kontrak ekslusif.
                            </p>
                            <button class="elegant-button mt-4" type="submit">Lihat Selengkapnya</button>

                        </div>
                        <div class="col-lg-6 order-1 order-lg-1">
                            <img src="assets/img/cuate.jpg" class="img-fluid" width="75%" alt="">
                        </div>
                    </div>

                </div>

            </section><!-- /About Section -->

            <!-- Clients Section -->
            <section id="clients" class="clients section">

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="swiper">
                        <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 100
                }
              }
            }
          </script>
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide"><img src="assets/img/clients/tiktok.png" class="img-fluid"
                                    alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/spotify.png" class="img-fluid"
                                    alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/Instagram.png" class="img-fluid"
                                    alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/youtube.png" class="img-fluid"
                                    alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/faceebok.png" class="img-fluid"
                                    alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/SnackVideo.png" class="img-fluid"
                                    alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/Wesing.png" class="img-fluid"
                                    alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/HiSing.png" class="img-fluid"
                                    alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/Hago.png" class="img-fluid"
                                    alt=""></div>
                        </div>
                    </div>

                </div>

            </section><!-- /Clients Section -->

            <!-- Services Section -->
            <section id="services" class="services section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Mengapa Harus</h2>
                    <p>Damar Langit</p>
                </div><!-- End Section Title -->

                <div class="container mb-5">

                    <div class="row gy-4">

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item position-relative">
                                <div class="icon">
                                    <i class="bi bi-eye"></i>
                                </div>
                                <a href="service-details.html" class="stretched-link">
                                    <h3>Transparasi Royalti</h3>
                                </a>
                                <p>Damar Langit menjamin pengelolaan royalti yang transparan, dengan sistem pelaporan
                                    yang jelas dan akurat. Para pencipta lagu dapat dengan mudah memantau pendapatan
                                    mereka dari berbagai platform.</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-item position-relative">
                                <div class="icon">
                                    <i class="bi bi-c-circle"></i>
                                </div>
                                <a href="service-details.html" class="stretched-link">
                                    <h3>Efektivitas Hakcipta</h3>
                                </a>
                                <p>Damar Langit memberikan layanan pengelolaan hak cipta yang komprehensif, memastikan
                                    setiap karya yang diciptakan terlindungi secara hukum dan para pencipta lagu
                                    mendapatkan hak mereka sepenuhnya.</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="service-item position-relative">
                                <div class="icon">
                                    <i class="bi bi-person-check"></i>
                                </div>
                                <a href="service-details.html" class="stretched-link">
                                    <h3>Kemitraan Strategis</h3>
                                </a>
                                <p>Damar Langit menjalin kemitraan strategis dengan berbagai pihak di industri musik,
                                    termasuk label rekaman, penyedia layanan streaming, dan media, yang membantu dalam
                                    memaksimalkan distribusi dan promosi karya.</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="service-item position-relative">
                                <div class="icon">
                                    <i class="bi bi-arrow-up-square"></i>
                                </div>
                                <a href="service-details.html" class="stretched-link">
                                    <h3>Dukungan Kreativitas</h3>
                                </a>
                                <p>Damar Langit tidak hanya berfokus pada pengelolaan royalti, tetapi juga menyediakan
                                    dukungan untuk pengembangan karier para pencipta lagu, termasuk promosi, kolaborasi,
                                    dan berbagai kesempatan lainnya untuk meningkatkan eksposur karya.</p>
                                <a href="service-details.html" class="stretched-link"></a>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="service-item position-relative">
                                <div class="icon">
                                    <i class="bi bi-clipboard2-check"></i>
                                </div>
                                <a href="service-details.html" class="stretched-link">
                                    <h3>Profesional Berpengalaman</h3>
                                </a>
                                <p>Didukung oleh tim profesional berpengalaman, Damar Langit memahami kebutuhan pencipta
                                    lagu dan memberikan layanan terbaik untuk memastikan karya mereka diakui dan
                                    dihargai.</p>
                                <a href="service-details.html" class="stretched-link"></a>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                            <div class="service-item position-relative">
                                <div class="icon">
                                    <i class="bi bi-shadows"></i>
                                </div>
                                <a href="service-details.html" class="stretched-link">
                                    <h3>Distribusi Luas</h3>
                                </a>
                                <p>Dengan jaringan distribusi yang mencakup berbagai platform musik digital lokal dan
                                    internasional, karya para pencipta lagu bisa diakses oleh pendengar di seluruh
                                    dunia, meningkatkan peluang untuk mendapatkan royalti yang lebih besar.</p>
                                <a href="service-details.html" class="stretched-link"></a>
                            </div>
                        </div><!-- End Service Item -->

                    </div>

                </div>

            </section><!-- /Services Section -->

            <!-- Testimonials Section -->
            <section id="testimonials" class="testimonials section">

                <img src="assets/img/aw2.png" class="testimonials-bg" alt="">

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="swiper">
                        <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Demy Yoker</h3>
                                    <h4>komposer</h4>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Sebagai seorang komposer, saya sangat mengapresiasi Damarlangit karena
                                            memberikan transparansi royalti yang jujur, pengelolaan hak cipta yang
                                            efektif, serta dukungan penuh untuk kreativitas dengan tim yang profesional
                                            dan berpengalaman.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Ipa Hadi Sasono</h3>
                                    <h4>Komposer</h4>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Saya sangat menikmati berkarya di Damarlangit. Mereka memiliki sistem yang
                                            sangat terstruktur terkait royalti dan pengelolaan hak cipta. Yang lebih
                                            menarik lagi, mereka memberikan dukungan yang luar biasa untuk saya, dengan
                                            tim yang sangat berpengalaman dan ramah.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Koming</h3>
                                    <h4>komposer</h4>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Saya sangat suka bekerja dengan Damarlangit. Mereka punya sistem yang
                                            jelas dan dukungan yang luar biasa buat para pencipta musik. Tim mereka juga
                                            sangat berpengalaman dan selalu siap membantu.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>

            </section><!-- /Testimonials Section -->

            <!-- Team Section -->
            <section id="team" class="team section">

                <!-- Section Title -->
                <div class="container section-title py-5" data-aos="fade-up">
                    <h2>Member</h2>
                    <p>Member Kami</p>
                </div><!-- End Section Title -->

                <div class="container">

                    <div class="row gy-4">

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="team-member">
                                <div class="member-img">
                                    <img src="assets/img/team/wahyu.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="member-info">
                                    <h4>Wahyu F Giri</h4>
                                    <span>Tulungagung</span>
                                </div>
                            </div>
                        </div><!-- End Team Member -->

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="team-member">
                                <div class="member-img">
                                    <img src="assets/img/team/demy.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="member-info">
                                    <h4>Demy Yoker</h4>
                                    <span>Banyuwangi</span>
                                </div>
                            </div>
                        </div><!-- End Team Member -->

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="team-member">
                                <div class="member-img">
                                    <img src="assets/img/team/arifcitenx.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="member-info">
                                    <h4>Arif Citenx</h4>
                                    <span>Banyuwangi</span>
                                </div>
                            </div>
                        </div><!-- End Team Member -->

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="team-member">
                                <div class="member-img">
                                    <img src="assets/img/team/james.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="member-info">
                                    <h4>James AP</h4>
                                    <span>Banyuwangi</span>
                                </div>
                            </div>
                        </div><!-- End Team Member -->
                    </div>
                    <div class="d-grid justify-content-center mt-5">
                        <button class="elegant-button">Selengkapnya</button>
                    </div>

                </div>

            </section><!-- /Team Section -->

            <!-- Stats Section -->
            <section id="stats" class="stats section">

                <div class="container mb-5" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4 align-items-center justify-content-between">

                        <div class="col-lg-5 d-flex justify-content-end">
                            <img src="assets/img/stats-img.jpg" width="70%" alt="" class="img-fluid">
                        </div>

                        <div class="col-lg-6">

                            <h2 class="fw-bold fs-3 mb-3">Pelayanan Kami</h2>
                            <p class="fs-5">
                                Damarlangit adalah penerbit musik yang mendukung karya musisi dengan berbagai layanan
                                profesional
                            </p>

                            <div class="row gy-6">

                                <div class="col-lg-6">
                                    <div class="stats-item d-flex">
                                        <div>
                                            <p class="fs-6"><strong>Pengelolaan Hak Cipta</strong> <span>Registrasi
                                                    dan perlindungan hak cipta</span></p>
                                        </div>
                                    </div>
                                </div><!-- End Stats Item -->

                                <div class="col-lg-6">
                                    <div class="stats-item d-flex">
                                        <div>
                                            <p class="fs-6"><strong>Distribusi Musik</strong> <span>Distribusi
                                                    digital ke platform global (Spotify, YouTube, Dll)</span></p>
                                        </div>
                                    </div>
                                </div><!-- End Stats Item -->

                                <div class="col-lg-6">
                                    <div class="stats-item d-flex">
                                        <div>
                                            <p class="fs-6"><strong>Manajemen Royalti</strong> <span>Pelacakan Dan
                                                    Pengumpulan Royalti</span></p>
                                        </div>
                                    </div>
                                </div><!-- End Stats Item -->

                                <div class="col-lg-6">
                                    <div class="stats-item d-flex">
                                        <div>
                                            <p class="fs-6"><strong>Pemasaran Dan Promosi</strong> <span>Kampanye
                                                    promosi digital dan media sosial</span></p>
                                        </div>
                                    </div>
                                </div><!-- End Stats Item -->

                            </div>

                        </div>

                    </div>

                </div>

            </section><!-- /Stats Section -->

            <!-- Call To Action Section -->
            <section id="call-to-action" class="call-to-action section">

                <img src="assets/img/aw2.png" alt="">

                <div class="container">
                    <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                        <div class="col-xl-10">
                            <div class="text-center">
                                <h3>Daftarkan karya Anda & dapatkan royalti</h3>
                                <p>Bergabunglah dengan kami sekarang dan lindungi hak cipta karya Anda. Dengan
                                    mendaftar, Anda tidak hanya memastikan karya Anda aman tetapi juga mulai
                                    menghasilkan royalti dari kreativitas Anda. Jangan lewatkan kesempatan untuk
                                    mendapatkan keuntungan dari setiap karya yang Anda buat!</p>
                                <a class="cta-btn" href="#">Bergabung Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>

            </section><!-- /Call To Action Section -->

        </main>

        <footer id="footer" class="footer">

            <div class="footer-top">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-md-6 footer-about">
                            <a href="/" class="logo d-flex align-items-center">
                                <span class="sitename"><img src="assets/img/logo.png" alt=""></span>
                            </a>
                            <div class="footer-contact pt-3">
                                <p>Bening Residence C7, Genteng - Banyuwangi,</p>
                                <p>Jawa Timur, Indonesia 68465</p>
                                <p class="mt-3"><strong>Phone:</strong> <span>(0333) 3388888</span></p>
                                <p><strong>Email:</strong> <span>info@damarlangit.co.id</span></p>
                                <p><strong>Senin - Sabtu:</strong> <span>08:00 - 16:00</span></p>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-3 footer-links">
                            <h4>Link Cepat</h4>
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <a href="#"> Beranda</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#"> Tentang Kami</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#"> Cover Partner</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#"> Member</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#"> Hubungi Kami</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-2 col-md-3 footer-links">
                            <h4>Layanan Kami</h4>
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <a href="#"> Publisher Musik</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#"> Pengelola Hak Cipta</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-12 footer-newsletter">
                            <h4>Berita Kami</h4>
                            <p>Damar langit Kini tersedia di mobile, kelola dan pantau karya Anda kapan saja, di mana
                                saja!</p>
                            <img src="assets/img/googleplay.png" width="35%" alt=""
                                style="border-radius: 4px; border: solid rgb(158, 158, 158) 1px;">
                        </div>

                    </div>
                </div>
            </div>

            <div class="copyright">
                <div class="container text-center">
                    <p>© <span>Copyright</span> <strong class="px-1 sitename">Damar Langit</strong> <span>All Rights
                            Reserved</span></p>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you've purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                        Powered by <a href="https://semestaweb.id/">Semesta Multitekno</a>
                    </div>
                </div>
            </div>

        </footer>

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
        <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

        <!-- Main JS File -->
        <script src="{{ asset('assets/js/main.js') }}"></script>

    </body>

</html>
