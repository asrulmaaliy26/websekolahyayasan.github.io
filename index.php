<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMK Telkom Purwokerto</title>
  

  <?php include 'snippets/styles.php' ?>
  <style>
    .carousel-item {
      transition: transform 1.5s ease, opacity 1.5s ease;
    }
    .stat-card {
      text-align: center;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
      background-color: #fff;
    }

    .stat-card:hover {
      transform: translateY(-10px);
    }

    .stat-icon {
      font-size: 50px;
      margin-bottom: 10px;
      color: #4CAF50;
    }

    .stat-number {
      font-size: 32px;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .stat-description {
      font-size: 16px;
      color: #666;
    }
  </style>

</head>

<body>

  <!-- NAVBAR -->
  <?php include 'snippets/navbar.php' ?>
  <!-- AKHIR NAVBAR -->

  <div class="beranda" id="home"></div>

   <div id="carouselExampleIndicators" class="carousel slide container-fluid mt-40 pt-5" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner container">
      <div class="carousel-item active">
        <img class="animate__animated animate__fadeInDown" style="width: 100%;" src="assets/img/jumb1.png" alt="...">
      </div>
      <div class="carousel-item">
        <img class="animate__animated animate__fadeInDown" style="width: 100%;" src="assets/img/jumb2.png" alt="...">
      </div>
      <div class="carousel-item">
        <img class="animate__animated animate__fadeInDown" style="width: 100%;" src="assets/img/jumb3.png" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- akhir jumb -->


  <!-- sec 1 -->
  <section>
    <div class="container-fluid">
      <div class="container pb-5 i1 animate__animated animate__fadeInUpBig animate__delay-2s" id="jumb">
        <div class="row pt-5 text-center">
          <div style="width: 30%" class="container">
            <div class="col-sm-12">
              <img class="animate__animated animate__fadeInUpBig animate__delay-4s" style="width: 30%;" src="assets/img/ts.png" alt="">
            </div>
          </div>
          <h2 class="animate__animated animate__fadeInUpBig animate__delay-4s">Always The Best<br><br></h2>
          <h5 class="animate__animated animate__fadeInUpBig animate__delay-4s">Mau Kuliah Mudah, Kerja Tidak Susah</h5>
        </div>
      </div>
    </div>
  </section>
  <!-- akhir sec 1 -->

  <div class="container-fluid py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 mb-4">
          <div class="stat-card p-4">
            <div class="stat-icon">
              <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <div class="stat-number">271</div>
            <div class="stat-description">Pendidik & Tenaga Kependidikan</div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="stat-card p-4">
            <div class="stat-icon">
              <i class="fas fa-user-graduate"></i>
            </div>
            <div class="stat-number">13132</div>
            <div class="stat-description">Peserta Didik</div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="stat-card p-4">
            <div class="stat-icon">
              <i class="fas fa-graduation-cap"></i>
            </div>
            <div class="stat-number">12580</div>
            <div class="stat-description">Alumni</div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="stat-card p-4">
            <div class="stat-icon">
              <i class="fas fa-clipboard-list"></i>
            </div>
            <div class="stat-number">15983</div>
            <div class="stat-description">Pendaftar Calon Peserta Didik</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- sec 2 -->
  <div class="container-fluid i2">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 pt-3">
          <iframe style="padding: 20px;" width="100%" height="315" src="https://www.youtube.com/embed/_H1cekMgH2Q" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-sm-6 pt-3">
          <h3>Video Profil</h3>
          <H4> SMK Telkom Purwokerto</H4>
          <p>
            Video profil ini akan memperkenalkan kepada kalian hal-hal berkaitan SMK Telkom Purwokerto yang merupakan sekolah berbasis Teknologi dan Informatika di Kab. Bandung.

            mari kita tonton video profilnya!
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir sec 2 -->

  <!-- info -->
  <div class="container-fluid pt-5 pb-5 i3">
    <div class="container pt-5">
      <div class="row">
        <h4 class="text-center mb-5">Info Terbaru</h4>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="assets/img/index/i1.jpg" alt="Card image cap">
            <div class="card-body text-center">
              <a href="https://www.instagram.com/p/CLaf36uHFAp/?utm_source=ig_web_copy_link"> <button style="background-color: #9B1E01; border:none; width: 200px;" type="button" class="btn btn-danger justify-content-center mt-4 mb-4">Lihat Postingan</button></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="assets/img/index/i2.jpg" alt="Card image cap">
            <div class="card-body text-center">
              <a href="https://www.instagram.com/p/CLaf36uHFAp/?utm_source=ig_web_copy_link"> <button style="background-color: #9B1E01; border:none; width: 200px;" type="button" class="btn btn-danger justify-content-center mt-4 mb-4">Lihat Postingan</button></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="assets/img/index/i3.jpg" alt="Card image cap">
            <div class="card-body text-center">
              <a href="https://www.instagram.com/p/CLkqXs1nkpJ/?utm_source=ig_web_copy_link"> <button style="background-color: #9B1E01; border:none; width: 200px;" type="button" class="btn btn-danger justify-content-center mt-4 mb-4">Lihat Postingan</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir info -->

  <!-- info -->
  <!-- carousel -->
  <div class="container-fluid pt-5">
    <div style="width: 70%;" class="container mb-5 pb-5">
      <h4 class="text-center mb-5">Acara Terdekat</h4>
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></li>
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img style="border-radius: 8px" src="assets/img/index/a1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="font-size: 40px;  color: #8a3636;">UTSBK-Ganjil-1</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img style="border-radius: 8px" src="assets/img/index/a2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="font-size: 40px;  color: #8a3636; ">Proses Seleksi Guru Baru</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img style="border-radius: 8px" src="assets/img/index/a3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="font-size: 40px;  color: #8a3636;">Network Design</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img style="border-radius: 8px" src="assets/img/index/a4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="font-size: 40px;  color: #8a3636;">Akabara 27</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img style="border-radius: 8px" src="assets/img/index/a5.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="font-size: 40px; color: #8a3636;">Annual Management Meeting</h5>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
    </div>
  </div>
  <!-- carousel -->
  <!-- akhir info -->

  <!-- igracias -->
  <section>
    <div class="container-fluid pt-5 pb-4 i5">
      <div class="container pb-5">
        <div class="row">
          <div class="col-sm-6 text-center pt-2">
            <img style="width: 50%;" src="assets/img/index/logo_gp.png" alt="">
          </div>
          <div class="col-sm-6 text-center pt-3 pb-2">
            <img style="width: 50%;" src="assets/img/index/logo_igracias.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- akhir igracias -->

  <!-- sec-3 -->
  <section>
    <div class="container-fluid i6 pt-5 pb-4 i6">
      <div class="row text-center">
        <div class="col-sm-2"><img src="assets/img/logo_ts 1.png" alt=""></div>
        <div class="col-sm-2"><img src="assets/img/logo_itt 1.png" alt=""></div>
        <div class="col-sm-2"><img src="assets/img/logo_telu 1.png" alt=""></div>
        <div class="col-sm-2"><img style="margin-top: -8%;" src="assets/img/tekom_pcc 1.png" alt=""></div>
        <div class="col-sm-2"><img style="margin-top: -5%;" src="assets/img/logo_btp 1.png" alt=""></div>
        <div class="col-sm-2"><img style="margin-top: -5%;" src="assets/img/logo_tm 1.png" alt=""></div>
      </div>
  </section>
  <!-- akhir sec- -->

  <?php include 'snippets/footer.php' ?>

  <?php include 'snippets/scripts.php' ?>

</body>

</html>
