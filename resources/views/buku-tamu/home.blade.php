<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Biro Administasi Pimpinan Bagian Protokol</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/logo/protokol_sumbar.jpg') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style1.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eNno
  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .section-title.no-margin {
      margin: 0;
      padding: 0;
    }
    
    .section-title.no-margin h2,
    .section-title.no-margin p {
      margin: 0;
      padding: 0;
    }
    
    .info.no-margin {
      margin-top: 0;
    }
    
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Protokol Sumbar</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
      
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="{{route('admin.login')}}">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 class="mb-3">Selamat Datang di Biro Administarsi Pimpinan Bagian Protokol</h1>
          <h2>Melayani Dengan Profesional, Integritas, dan Amanah</h2>
          <div class="d-flex">
            <a href={{route('daftar_tamu')}} class="btn-get-started scrollto">Form Tamu</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Lihat Kantor Biro</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
            <img src="assets/img/gubernur.jpeg" class="img-fluid animated rounded-2" alt="" style="width: 500px;">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/logo/semua.jpg" class="img-fluid  rounded-2" alt="">
          </div>
          
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3 class="text-center">Tentang Kami</h3>
            <p class="fst-italic fw-bold fs-3">
            Visi
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i>Pembangunan Sumatera Barat pada tahap IV(empat) RPJP</li>
              <p class="fst-italic fw-bold fs-3">
                Misi
                </p>
                <ul>
                  <li><i class="bi bi-check-circle"></i>Meningkatkan tata Kualitas Sumber Daya Manusia yang Berakhlak Mulia, Sehat, Berpengetahuan, Terampil dan Berdaya Saing.
                  </li>
                  <li><i class="bi bi-check-circle"></i>Meningkatkan Tata Kehidupan Sosial Kemasyarakatan Berdasarkan Falsafah Adat Basandi Syarak-syarak Basandi Kitabullah.
                  </li>
                  <li><i class="bi bi-check-circle"></i>Meningkatkan Nilai Tambah dan Produktifitas Pertanian, Perkebunan, Peternakan dan Perikanan.</li>
                  <li><i class="bi bi-check-circle"></i>Meningkatkan Usaha Perdagangan dan Industri Kecil/Menengah serta Ekonomi Berbasis Digital.
                  </li>
                  <li><i class="bi bi-check-circle"></i>Meningkatkan Ekonomi Kreatif dan Daya Saing Kepariwisataan.
                  </li>
                  <li><i class="bi bi-check-circle"></i>Meningkatkan Pembangunan Infrastruktur yang Berkeadilan dan Berkelanjutan.
                  </li>
                  <li><i class="bi bi-check-circle"></i>Mewujudkan Tata Kelola Pemerintahan dan Pelayanan Publik yang Bersih, Akuntabel serta Berkualitas.
                  </li>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">
          <div class="row counters">
              <div class="col-lg-3 col-6 text-center">
                  <span data-purecounter-start="0" data-purecounter-end="{{ $totalPengunjung }}" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Total Pengunjung</p>
              </div>
              <div class="col-lg-3 col-6 text-center">
                  <span data-purecounter-start="0" data-purecounter-end="{{ $totalInstansi }}" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Instansi</p>
              </div>
              <div class="col-lg-3 col-6 text-center">
                  <span data-purecounter-start="0" data-purecounter-end="{{ $totalUmum }}" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Umum</p>
              </div>
              <div class="col-lg-3 col-6 text-center">
                  <span data-purecounter-start="0" data-purecounter-end="{{ $totalPelajarMahasiswa }}" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Pelajar/Mahasiswa</p>
              </div>
          </div>
      </div>
  </section>
  

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <span>PELAYANAN</span>
          <h2>PELAYANAN</h2>
          <p>Melayani dengan baik, penuh dedikasi, dan selalu siap membantu!

          </p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">SUB BAGIAN ACARA
              </a></h4>
              <p>Penyelenggaraan upacara dan acara resmi kenegaraan seperti peringatan hari kemerdekaan, pelantikan pejabat, dan kunjungan kenegaraan.
                Acara Pemerintahan: Penyelenggaraan rapat dan pertemuan resmi antara pemerintah dengan pihak lain, termasuk konferensi dan seminar</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">SUB BAGIAN TAMU</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">SUB BAGIAN HUBUNGAN KEPROTOKOLAN</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->



    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <span>Team</span>
          <h2>Team</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" alt="">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <p>
                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" alt="">
              <h4>Sarah Jhinson</h4>
              <span>Product Manager</span>
              <p>
                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" alt="">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <p>
                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title no-margin">
          <span>Kontak</span>
          <h2 class="m-0 p-0">Kontak</h2>
          <p class="m-0 p-0">Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>
    
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
          <div class="col-lg-5 d-flex flex-column align-items-center">
            <div class="info no-margin">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Jl. Jend. Sudirman No.51, Padang Pasir, Kec. Padang Bar., Kota Padang, Sumatera Barat 25129</p>
              </div>
        
              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Instagram</h4>
                <p>protokolsumbar</p>
              </div>
        
              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telepon :</h4>
                <p>(0751) 31221</p>
              </div>
              
              <div class="JadwalBuka">
                <i class="bi bi-phone"></i>
                <h4>Jadwal Buka :</h4>
                <p class="m-0">Senin - Kamis, 07.30-16.00</p>
                <p class="m-0">Jumat, 07.30-16.30</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Protokol <strong><span>Sumatera Barat</span></strong>.
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main1.js') }}"></script>

</body>

</html>