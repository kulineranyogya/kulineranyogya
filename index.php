<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- AOS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="custom.css">

  <title>Kulineran Yogya</title>

  <!-- faviconn -->
  <link rel="icon" href="img/favicon/favicon.ico">
</head>

<body>
  <!-- Navbar -->
  <div class="container">
    <nav class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
      <a href="" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="img/Logo Hitam.svg" alt="" height="50" />
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li class="nav-item active"><a href="index.php" class="nav-link px-2">Home</a></li>
        <li class="nav-item"><a href="kuliner.php" class="nav-link px-2">Kuliner</a></li>
        <li class="nav-item"><a href="about.php" class="nav-link px-2">About</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <a class="btn btn-outline-primary me-2" href="login.php" role="button">Login</a>
        <button type="button" class="btn btn-primary">Sign-up</button>
      </div>
    </nav>
  </div>
  <!-- AKhir Navbar -->

  <!-- Body -->
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="borderimg col-10 col-sm-8 col-lg-6" data-aos="fade-left" data-aos-duration="1000">
        <img src="img/header.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="500" loading="lazy">
      </div>
      <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
        <h1 class="display-5 fw-bold lh-sm mb-3">Jelajahi kuliner khas <span class="text-oren">Yogyakarta</span>
          dengan biaya Rp0</h1>
        <p class="lead">Jelajahi ragam kuliner khas yogyakarta
          dan temukan tempat makan terbaik
          untuk menikmatinya</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a class="btn btn-primary btn-lg px-4 me-md-2 mt-3" href="kuliner.php">Jelajah</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="fixed-bottom text-center p-2 fs-6" style="background-color: #fc3c04; color: #fff;">
      © 2021 Copyright Kulineran Yogya
    </div>
  </footer>
  <!-- Akhir Footer -->

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

  <!-- AOS -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>