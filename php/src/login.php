<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="sidebar/css/styles.css" rel="stylesheet" />

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Detail Skema Sertifikasi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Tempo - v4.5.0
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>
  input[type=text],
  select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=submit].form {
    width: 100%;
    background-color: #e43c5c;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover.form {
    background-color: #ba2340;
  }

  div.form {
    margin-top: 80px;
    margin-left: 20px;
    margin-right: 20px;
    margin-bottom: 20px;
  }

  textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    border-radius: 4px;
    border: 1px solid #ccc;
    font-size: 16px;
    resize: none;
  }
</style>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">LSP TD</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="index.html#about">Profil</a></li>
          <li class="dropdown"><a href="index.html#services"><span>Sertifikasi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="index.html#services">Skema Sertifikasi</a></li>
              <li><a href="index.html#team">Asesor Kompetensi</a></li>
              <li><a href="index.html#cta">Pendaftaran Sertifikasi</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="index.html#portfolio"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="index.html#portfolio">Artikel</a></li>
              <li><a href="index.html#faq">FAQ</a></li>
              <li><a href="index.html#contact">Kontak</a></li>
            </ul>
          </li>
          <li><a href="login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <style>

.containerlogin {
    position: static;
    margin-top: 80px;
    margin-bottom: 80px;
    margin-left: 20px;
    margin-right: 120px;
    left: 50%;
    top: 50%;
    padding: 20px 25px;
    width: 300px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(255, 255, 255, .3);
    border-radius: 25px;
}

.containerlogin h3 {
    text-align: left;
    color: #000;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom: 4px solid white;
    text-align: center;
}

.containerlogin label {
    text-align: left;
    color: #000;
}

.containerlogin form input {
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 2px solid #dcdcdc;
    background-color: transparent;
    border-radius: 4px;
    color: #000;
    font-size: 20px;
}

.containerlogin form button {
    width: 100%;
    padding: 5px 0;
    border: none;
    background-color: darkcyan;
    font-size: 18px;
    color: #fff;
    border-radius: 4px;
}
  </style>

  <div class="containerlogin" style="width:fit-content;">
          <h3>Lembaga Sertifikasi Profesi Teknologi Digital</h3>
          <h3>Login</h3>
            <form method="post" action="cek-login.php">
                <label>Username</label><br>
                <input type="text" name="user"><br>
                <label>Password</label><br>
                <input type="password" name="pass"><br>
                <button type="submit"  name="submit">Login</button>				
            </form>
        </div>     

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>LSP TD</h3>
            <p>
              Jakarta <br> Pulogebang Indah Blok J11 No 34<br> Jakarta Timur <br><br>
              <strong>Telepon:</strong> , 021-22859837 <br>
              <strong>Email:</strong> lsptd@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Profil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Sertifikasi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Informasi</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Skema Sertifikasi</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Junior Web Developer</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Junior Graphic Designer</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Junior Network Administrator</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Junior Mobile Programmer</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Bergabunglah dengan Buletin Kami</h4>
            <p>Masukkan email anda untuk menerima info dari kami</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>LSP TD</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">AnnastasyaIvoryBootstrap</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>