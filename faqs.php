<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMK Telkom Purwokerto</title>


  <?php include 'snippets/styles.php' ?>
</head>

<body>

  <!-- NAVBAR -->

  <?php include 'snippets/navbar.php' ?>
  <!-- AKHIR NAVBAR -->

  <section>
    <img style="margin-top: 60px;" width="100%" src="assets/img/header/faqs.png" alt="">
  </section>

  <!-- faq -->
  <div class="container-fluid pt-5">
    <div class="container pt-5">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">All</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="ppdb-tab" data-bs-toggle="tab" data-bs-target="#ppdb" type="button" role="tab" aria-controls="ppdb" aria-selected="false">PPDB</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div style="text-decoration: none;" class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
          <a href="ppdb.html">
            <p class="pt-5">(+) Bagaimana Cara Mendaftar di SMK Telkom Secara Online?</p>
          </a>
          <a href="jurusan.html">
            <p class="pt-3">(+) Jurusan Apa Saja yang Ada di SMK Telkom Purwokerto?</p>
          </a>
          <a href="helpdesk.html">
            <p class="pt-3">(+) Dimana Lokasi SMK Telkom Purwokerto?</p>
          </a>
        </div>
        <div class="tab-pane fade" id="ppdb" role="tabpanel" aria-labelledby="ppdb-tab">
          <a href="ppdb.html">
            <p class="pt-5">(+) Bagaimana Cara Mendaftar di SMK Telkom Secara Online?</p>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir faq -->


  <!-- sec 2 -->
  <div class="container-fluid faq2 pt-5 pb-5">
    <div class="container">
      <div class="row">
        <h1>Tidak Menemukan Jawaban Yang Anda Cari?</h1>
        <a href="#tanya" class="text-center pt-5 pb-5"><button type="button" class="btn btn-warning">Kirim Pertanyaan</button></a>
      </div>
    </div>
  </div>
  <!-- akhir sec 2 -->

  <!-- faq3 -->
  <div style="background-color: white;" id="tanya" class="container-fluid faq2 pt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <img style="width: 100%;" src="assets/img/illus/faq.png" alt="">
        </div>
        <div class="col-md-7 pl-3">
          <form>
            <div class="form-group2">
              <label for="nama">Nama</label>
              <input style="background-color: rgb(241,241,241);" type="text" class="form-control" id="nama">
            </div>
            <div class="form-group2">
              <label for="email">Email</label>
              <input style="background-color: rgb(241,241,241);" type="text" class="form-control" id="email">
            </div>
            <div class="form-group2">
              <label for="perihal">Perihal</label>
              <input style="background-color: rgb(241,241,241);" type="text" class="form-control" id="perihal">
            </div>
            <div class="form-group2">
              <label for="pesan">Pesan</label>
              <textarea style="background-color: rgb(241,241,241);" name="pesan" class="form-control" id="pesan"></textarea>
            </div>
            <div class="form-group pt-2">
              <button style="background-color: #9B1E01; border:none;" type="button" class="btn btn-danger justify-content-center">Kirim Pesan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir faq3 -->


  <?php include 'snippets/footer.php' ?>
 
  <?php include 'snippets/scripts.php' ?>
</body>

</html>