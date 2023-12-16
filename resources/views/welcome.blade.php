<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>NutriCare</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/nutricare.png') }}" rel="icon">
    <link href="{{ asset('landing/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('landing/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('landing/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Bootslander
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="#"><span>NutriCare</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#team">Tim</a></li>
                    <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1>Ayo Bergabung Dengan <span>NutriCare</span></h1>
                        <h2>Solusi Sehat Secara Alami !</h2>
                        <div class="text-center text-lg-start">
                            <a href="#about" class="btn-get-started scrollto">Ayo Mulai</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <img src="{{ asset('assets/img/home-landing.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-5 col-lg-6 d-flex justify-content-center align-items-stretch" style="background: url('{{ asset('assets/img/about-landing.png') }}') center center no-repeat; background-size: contain; min-height: 300px;"
                        data-aos="fade-right">
                    </div>

                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
                        data-aos="fade-left">
                        <h3>Nutricare - Deteksi Bahan Masakan dan Kesehatan Tubuh</h3>
                        <p>Selamat datang di Nutricare, aplikasi inovatif yang membantu Anda menjalani gaya hidup sehat dengan mudah dan cerdas. Nutricare bukan hanya aplikasi biasa; ini adalah panduan lengkap untuk kesehatan dan gizi Anda.</p>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon"><i class="bx bxs-camera-plus"></i></div>
                            <h4 class="title"><a href="">Deteksi Bahan Masakan</a></h4>
                            <p class="description">Nutricare memanfaatkan kecerdasan buatan untuk mendeteksi bahan masakan yang ada di rumah Anda. Cukup ambil gambar, dan aplikasi kami akan memberikan informasi detail tentang bahan tersebut serta menyajikan resep sehat yang dapat Anda coba.</p>
                        </div>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-list-ul" ></i></div>
                            <h4 class="title"><a href="">Resep Sehat</a></h4>
                            <p class="description">Dapatkan akses ke berbagai resep sehat yang disesuaikan dengan bahan masakan yang Anda miliki. Nutricare memastikan Anda memiliki opsi makanan lezat dan bergizi untuk memenuhi kebutuhan gizi harian Anda.</p>
                        </div>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-body"></i></div>
                            <h4 class="title"><a href="">Deteksi Kesehatan Tubuh</a></h4>
                            <p class="description">Selain deteksi bahan masakan, Nutricare juga memungkinkan Anda memonitor kesehatan tubuh Anda. Identifikasi potensi masalah seperti obesitas atau kekurangan berat badan dengan cepat dan dapatkan saran kesehatan yang sesuai.</p>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Details Section ======= -->
        <section id="details" class="details">
            <div class="container">
                <div class="row content">
                    <div class="col-md-4" data-aos="fade-right">
                        <img src="{{ asset('landing/assets/img/details-1.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8 pt-4" data-aos="fade-up">
                        <h3>Bergabunglah sebagai Ahli Gizi di Aplikasi Kami!</h3>
                        <p class="fst-italic">
                            Dapatkan pengalaman unik sebagai ahli gizi dalam aplikasi kami yang inovatif, membantu pengguna untuk
                            mencapai gaya hidup sehat.
                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i> Sajikan saran gizi yang personal untuk membantu pengguna mencapai
                                tujuan kesehatan mereka.</li>
                            <li><i class="bi bi-check"></i> Berkontribusi dalam memberikan informasi gizi yang akurat dan
                                terpercaya.</li>
                            <li><i class="bi bi-check"></i> Bergabunglah dengan komunitas ahli gizi terbaik yang berfokus pada
                                kesehatan dan gizi.</li>
                            <li><i class="bi bi-check"></i> Bantu pengguna memahami pentingnya pola makan seimbang dan gaya
                                hidup sehat.</li>
                        </ul>
                        <p>
                            Segera bergabunglah dengan kami dan mari berkolaborasi dalam membawa perubahan positif dalam
                            kesehatan masyarakat. Kami percaya peran Anda sebagai ahli gizi dapat membuat dampak besar!
                        </p>
                        <div class="text-center text-lg-start">
                            <a href="{{ route('login') }}" target="_blank" class="btn-get-started scrollto">Ayo Gabung Bersama Kami !</a>
                        </div>
                    </div>
                </div>

                <div class="row content">
                    <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                        <img src="{{ asset('landing/assets/img/details-2.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                        <h3>Manfaat dan Tujuan Nutricare</h3>
                        <p class="fst-italic">
                            Nutricare hadir untuk meningkatkan kualitas hidup Anda melalui pendekatan holistik terhadap kesehatan
                            dan gizi.
                        </p>
                        <p>
                            Kami memahami bahwa kesehatan adalah kekayaan sejati, dan Nutricare dirancang untuk membantu Anda
                            mencapai tujuan kesehatan Anda dengan cara yang efektif dan terarah. Berikut adalah beberapa manfaat
                            utama Nutricare:
                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i> Deteksi Bahan Masakan: Temukan resep sehat berdasarkan bahan
                                masakan yang Anda miliki di rumah.</li>
                            <li><i class="bi bi-check"></i> Deteksi Kesehatan Tubuh: Pantau kesehatan tubuh Anda.</li>
                            <li><i class="bi bi-check"></i> Resep Sehat: Dapatkan akses ke resep-resep lezat dan bergizi
                                yang sesuai dengan kebutuhan gizi Anda.</li>
                            <li><i class="bi bi-check"></i> Konsultasi dengan Ahli Gizi: Terhubung dengan ahli gizi untuk
                                saran personal dan panduan kesehatan.</li>
                        </ul>
                        <p>
                            Dengan Nutricare, kami berkomitmen untuk memberdayakan Anda dalam perjalanan menuju gaya hidup
                            sehat dan pilihan makanan yang cerdas. Mari bersama-sama mencapai kesehatan optimal!
                        </p>
                    </div>
                </div>
                
            </div>
        </section>

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Tim</h2>
                    <p>Tim Hebat Kami</p>
                </div>

                <div class="row" data-aos="fade-left">

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="{{ asset('assets/img/adi.jpg') }}" style="max-height: 300px" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Muhammad Adi Nugroho</h4>
                                <span>Machine Learning</span>
                                <div class="social">
                                    <a href="https://www.linkedin.com/in/adiinugroho" target="_blank"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="pic"><img src="{{ asset('assets/img/maruf-image.jpg') }}" style="max-height: 300px" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Ma'Ruf</h4>
                                <span>Mobile Developer</span>
                                <div class="social">
                                    <a href="https://www.linkedin.com/in/ma-ruf-b0a47b269/" target="_blank"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="300">
                            <div class="pic"><img src="{{ asset('assets/img/ependi.jpg') }}"  style="max-height: 300px" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Mochamad Efendi</h4>
                                <span>Mobile Developer</span>
                                <div class="social">
                                    <a href="https://www.linkedin.com/in/mochamad-efendi-0000000110101010111/" target="_blank"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="400">
                            <div class="pic"><img src="{{ asset('assets/img/sultan.png') }}" style="max-height: 300px" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Sultan Pakih</h4>
                                <span>Cloud Computing</span>
                                <div class="social">
                                    <a href="https://www.linkedin.com/in/sltn-fk099/" target="_blank"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row mt-4 justify-content-center" data-aos="fade-left">

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="pic"><img src="{{ asset('assets/img/nusa.jpg') }}" style="max-height: 300px" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Kodrat Nusantara</h4>
                                <span>Machine Learning</span>
                                <div class="social">
                                    <a href="https://www.linkedin.com/in/kodrat-nusantara-453835234/" target="_blank"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="300">
                            <div class="pic"><img src="{{ asset('assets/img/ramdani.jpg') }}"  style="max-height: 300px" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Ramdani Syaputra</h4>
                                <span>Cloud Computing</span>
                                <div class="social">
                                    <a href="https://www.linkedin.com/in/ramdani-syaputra/" target="_blank"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="400">
                            <div class="pic"><img src="{{ asset('assets/img/fakhruddin.png') }}"  style="max-height: 300px" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Fakhruddin Arrozi</h4>
                                <span>Machine Learning</span>
                                <div class="social">
                                    <a href="https://www.linkedin.com/in/fakhruddin-arrozi-1780b4285/" target="_blank"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container">
        
                <div class="section-title" data-aos="fade-up">
                    <h2>Pertanyaan yang Sering Diajukan (FAQ)</h2>
                    <p>Pertanyaan yang Sering Diajukan</p>
                </div>
        
                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-1">Apa saja yang bisa dideteksi oleh Nutricare? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Nutricare dapat mendeteksi bahan masakan di rumah Anda dan memberikan resep sehat
                                    berdasarkan bahan tersebut. Selain itu, aplikasi ini juga dapat mendeteksi kondisi
                                    kesehatan tubuh seperti obesitas atau kekurangan berat badan.
                                </p>
                            </div>
                        </li>
        
                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-2" class="collapsed">Bagaimana cara mendapatkan resep sehat di
                                Nutricare? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Setelah Nutricare mendeteksi bahan masakan di rumah Anda, aplikasi akan memberikan
                                    resep sehat yang sesuai dengan bahan tersebut. Anda dapat dengan mudah mengakses
                                    resep-resep tersebut untuk mendukung gaya hidup sehat Anda.
                                </p>
                            </div>
                        </li>
        
                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-3" class="collapsed">Apakah Nutricare menyediakan konsultasi
                                dengan ahli gizi? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Ya, Nutricare memiliki fitur konsultasi dengan ahli gizi. Anda dapat terhubung
                                    langsung dengan ahli gizi untuk mendapatkan saran personal dan panduan kesehatan
                                    yang sesuai dengan kebutuhan Anda.
                                </p>
                            </div>
                        </li>
        
                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-4" class="collapsed">Bagaimana Nutricare mendeteksi kondisi
                                kesehatan tubuh? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Nutricare menggunakan teknologi deteksi untuk mengidentifikasi potensi masalah
                                    kesehatan tubuh seperti obesitas atau kekurangan berat badan. Informasi ini dapat
                                    membantu Anda memantau kesehatan tubuh Anda secara lebih baik.
                                </p>
                            </div>
                        </li>
        
                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-5" class="collapsed">Bagaimana cara bergabung dengan aplikasi
                                Nutricare? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Untuk bergabung dengan aplikasi Nutricare, Anda dapat melakukan pendaftaran di
                                    aplikasi kami. Dengan bergabung, Anda akan mendapatkan akses ke fitur-fitur eksklusif
                                    dan dapat berinteraksi dengan pengguna lain yang memiliki minat serupa.
                                </p>
                            </div>
                        </li>
        
                    </ul>
                </div>
        
            </div>
        </section><!-- End F.A.Q Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>NutriCare</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
                Designed by <a href="https://bootstrapmade.com/" target="_blank">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('landing/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('landing/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landing/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('landing/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('landing/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('landing/assets/js/main.js') }}"></script>

</body>

</html>
