<?php
include '../auth/koneksi.php';

include 'header.php';

$tugas = mysqli_query($koneksi, "select * from list");
$jmlTugas = mysqli_num_rows($tugas);

$belum = mysqli_query($koneksi, "select * from list where keterangan = 'belum selesai'");
$jmlBelum = mysqli_num_rows($belum);

$sudah = mysqli_query($koneksi, "select * from list where keterangan = 'sudah selesai'");
$jmlSudah = mysqli_num_rows($sudah);

?>

<style>
  .carousel-item img {
  object-fit: cover;
  height: 350px; /* Atur sesuai kebutuhan */
  max-height: 550px; /* Batas maksimum */
}

.carousel-item img {
  object-fit: cover;
  width: 100%;
  height: 250px; /* Default height */
}

@media (min-width: 768px) {
  .carousel-item img {
    height: 400px; /* Untuk layar menengah */
  }
}

@media (min-width: 1200px) {
  .carousel-item img {
    height: 500px; /* Untuk layar besar */
  }
}

.custom-carousel .carousel-item img {
  object-fit: cover;
  height: 450px; /* Tinggi standar */
}

</style>

<!-- Caruosel Slide -->
<div id="carouselExample" class="carousel slide custom-carousel" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../assets/slide1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../assets/slide2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../assets/slide3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- End Caruosel Slide -->
<!-- Selamat Datang -->

<h3 class="text-center mt-4" style="font-size: 21px;">Kami telah menunggu begitu lama untuk memilikimu di antara kami.<br> 
Akhirnya, waktunya telah tiba. Kami dengan senang hati menyambutmu <?php echo $_SESSION['username']; ?> &#10084;&#129303;</h3>
<!-- POS -->
<div class="container text-center mt-4">
  <div class="row">
    <div class="col">
      <div class="card text-bg-success mb-3" style="max-width: 18rem; border: 2px solid black;">
  <div class="card-body">
    <h5 class="card-title">Total Tugas</h5>
    <hr>
    <p class="card-text" style="font-size: 20px; font-weight:bolder;"><?php echo $jmlTugas; ?></p>
  </div>
</div>
    </div>
    <div class="col">
      <div class="card text-bg-warning mb-3" style="max-width: 18rem; border: 2px solid black;">
  <div class="card-body">
    <h5 class="card-title">Belum selesai</h5>
    <hr>
    <p class="card-text" style="font-size: 20px; font-weight:bolder;" ><?php echo $jmlBelum; ?></p>
  </div>
</div>
    </div>
    <div class="col">
      <div class="card text-bg-danger  mb-3" style="max-width: 18rem; border: 2px solid black;">
  <div class="card-body">
    <h5 class="card-title">Sudah Selesai</h5>
    <hr>
    <p class="card-text" style="font-size: 20px; font-weight:bolder;"><?php echo $jmlSudah; ?></p>
  </div>
</div>
    </div>
  </div>
</div>
<!-- End POS -->

<!-- Card Tujuan -->
<div class="container mt-5">
<div class="d-flex justify-content-start">
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <a href="../assets//gambar1.png" target="_blank" rel="noopener noreferrer">>
      <img src="../assets//gambar1.png" class="img-fluid rounded-start" alt="Gambar Beban Di Kepala">
      </a>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Membantu mengurangi beban di kepala</h5>
        <p class="card-text">To do list dapat membantu seseorang untuk mengurangi beban yang bertumpuk di kepala.</p>
        <p class="card-text"><small class="text-body-secondary">To do list dapat dibuat harian, mingguan, atau bulanan, dan dapat dibuat untuk pribadi atau tim.</small></p>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<!-- Card Tujuan 2 -->
<div class="container mt-3">
<div class="d-flex justify-content-center">
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <a href="../assets/gambar2.png" target="_blank" rel="noopener noreferrer">
      <img src="../assets/gambar2.png" class="img-fluid rounded-start" alt="Gambar Mengatur Waktu">
      </a>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Membantu mengatur waktu</h5>
        <p class="card-text">To do list dapat membantu seseorang untuk mengatur waktu dan meluangkan waktu untuk kegiatan yang disukai.</p>
        <p class="card-text"><small class="text-body-secondary">To do list dapat dibuat harian, mingguan, atau bulanan, dan dapat dibuat untuk pribadi atau tim.</small></p>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- End Card Tujuan -->

 <!-- Card Tujuan 3 -->
<div class="container mt-3">
<div class="d-flex justify-content-end">
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <a href="../assets/gambar3.png" target="_blank" rel="noopener noreferrer">
      <img src="../assets/gambar3.png" class="img-fluid rounded-start" alt="Gambar Kegiatan">
      </a>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Membantu menghindari kegiatan mendadak</h5>
        <p class="card-text">To do list dapat membantu seseorang untuk menghindari kegiatan mendadak atau mengerjakan tugas pada menit-menit akhir.</p>
        <p class="card-text"><small class="text-body-secondary">To do list dapat dibuat harian, mingguan, atau bulanan, dan dapat dibuat untuk pribadi atau tim.</small></p>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- End Card Tujuan -->

<!-- Banner -->
<div class="container-fluid text-center mt-3 mb-4">
  <a href="../assets/banner.png" target="_blank" rel="noopener noreferrer">
<img src="../assets/banner.png" class="img-fluid img-thumbnail" alt="..." style="width: 75%;">
</a>
<figcaption class="figure-caption text-center">Banner To Do List</figcaption>
</div>
<!-- End Banner -->

<!-- Poster -->
<div class="container-fluid text-center mt-3 mb-4">
<a href="../assets/poster.jpg" target="_blank" rel="noopener noreferrer"><img src="../assets/poster.jpg" class="rounded start img-thumbnail mx-4" alt="..." style="width: 30%; height:30%;"></a>
<a href="../assets/poster3.jpg" target="_blank" rel="noopener noreferrer"><img src="../assets/poster3.jpg" class="rounded end img-thumbnail mx-4" alt="..." style="width: 30%; height:30%;"></a>
<figcaption class="figure-caption text-center mt-2">Poster To Do List</figcaption>
</div>
<!-- End Poster -->

<!-- Quote -->
 <div class="container mb-4">
 <div class="card">
  <div class="card-header">
    Quote
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>“Suka banget sama daftar “yang harus dilakukan” di Senin pagi , bikin saya semangat untuk minggu depan.”</p>
      <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Patricia Bright</cite></footer>
    </blockquote>
  </div>
</div>
 </div>
<!-- End Quote -->

<!-- Footer -->

<div class="card text-center">
  <div class="card-footer text-body-secondary p-4" style="background-color: #074799; border:1px solid black; ">
  <p style="color: white; font-size:20px; font-weight:bold;">&#10084;Made In Kelompok 2</p>
  </div>
</div>

<!-- End Footer -->
<?php include 'footer.php'; ?>