<?php
include '../auth/koneksi.php';
include 'header.php';

?>

<style>
   body{
            background-image:url('../assets/bg.png');
            background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
        }

  #muzafar{
    border:5px solid yellow;
  }
  #muzafar:hover{
    border:5px solid red;
    transition:350ms;
  }

  #ditha{
    border:5px solid yellow;
  }
  #ditha:hover{
    border:5px solid red;
    transition:350ms;
  }

  #hana{
    border:5px solid yellow;
  }
  #hana:hover{
    border:5px solid red;
    transition:350ms;
  }
</style>

<div class="container text-center mt-4">
<div class="card text-center">
  <div class="card-body">
  <h1>Kelompok 2</h1>
 <p class="mb-2">Membuat Website To Do List Sederhana</p>
</div>
<div class="container marketing mt-5">

<!-- Three columns of text below the carousel -->
<div class="row text-center">
  <div class="col-lg-4">
    <a href="../assets/pp_muzafar.png" target="_blank" rel="noopener noreferrer">
  <img src="../assets/pp_muzafar.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140" id="muzafar">
  </a>
    <h2 class="fw-normal mb-3">Muzafar</h2>

    <div class="grid gap-0 column-gap-3 text-start">
  <div class="p-2 g-col-6">Nim : 241351074</div>
  <div class="p-2 g-col-6">Prodi : Teknik Informatika Pagi B</div>
  <div class="p-2 g-col-6">Kontak : 62895618674000</div>
  <div class="p-2 g-col-6"><a href="../detail/muzafar.php" class="btn btn-secondary btn-sm"><i class="bi bi-card-list"></i> Detail</a></div>
</div>

  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <a href="../assets/pp_ditha.jpg" target="_blank" rel="noopener noreferrer">
  <img src="../assets/pp_ditha.jpg" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140" id="ditha">
  </a>
    <h2 class="fw-normal mb-3">Ditha</h2>
    
    <div class="grid gap-0 column-gap-3 text-center">
  <div class="p-2 g-col-6">Nim : 241351080</div>
  <div class="p-2 g-col-6">Prodi : Teknik Informatika Pagi B</div>
  <div class="p-2 g-col-6">Kontak : 6285864137097</div>
  <div class="p-2 g-col-6 text-start"><a href="../detail/ditha.php" class="btn btn-secondary btn-sm"><i class="bi bi-card-list"></i> Detail</a></div>
</div>

  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <a href="../assets/pp_hana.jpg" target="_blank" rel="noopener noreferrer">
  <img src="../assets/pp_hana.jpg" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140" id="hana">
  </a>

    <h2 class="fw-normal mb-3">Hana</h2>
    <div class="grid gap-0 column-gap-3 text-center">
  <div class="p-2 g-col-6">Nim : 241351077</div>
  <div class="p-2 g-col-6">Prodi : Teknik Informatika Pagi B</div>
  <div class="p-2 g-col-6">Kontak : 62831191443545</div>
  <div class="p-2 g-col-6 text-start"><a href="../detail/hana.php" class="btn btn-secondary btn-sm"><i class="bi bi-card-list"></i> Detail</a></div>
</div>
  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->

  </div>
  <div class="card-footer text-body-secondary">
  &#10084; Kelompok 2
  </div>
</div>
</div>

<br>
<br>
<br>
 

<!-- START THE FEATURETTES -->

<!-- Footer -->
<footer class="bg-dark text-white pt-4 pb-2">
    <div class="container">
        <div class="row">
            <!-- Contact Information -->
            <div class="col-md-4 mb-3">
                <h5>Maps</h5>
                <ul class="list-unstyled">
                    <li><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.1010780534966!2d107.45379117604064!3d-6.5088883636360935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690e5b4d76c349%3A0x8c171e80ac57eb8e!2sSekolah%20Tinggi%20Teknologi%20Wastukancana%20Purwakarta!5e0!3m2!1sid!2sid!4v1734782970430!5m2!1sid!2sid" width="300" height="240" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></li>
                </ul>
            </div>

            <!-- Social Media -->
            <div class="col-md-4 mb-3">
                <h5>Sosial Media</h5>
                <ul class="list-unstyled d-flex">
                    <li class="mr-3 m-3"><a href="#" class="text-white"><i class="bi bi-facebook"></i></a></li>
                    <li class="mr-3 m-3"><a href="#" class="text-white"><i class="bi bi-twitter"></i></a></li>
                    <li class="mr-3 m-3"><a href="https://www.instagram.com/indika.ndkp/profilecard/?igsh=Z3Vuc2I5OTE0YzBp" class="text-white"><i class="bi bi-instagram"></i></a></li>
                    <li class="mr-3 m-3"><a href="#" class="text-white"><i class="bi bi-tiktok"></i></i></a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div class="col-md-4 mb-3">
                <h5>Berikan Masukan</h5>
                <form>
                    <div class="input-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                        <button class="btn btn-primary" type="submit">Kirim</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="row pt-3">
            <div class="col text-center">
                <p>&copy;Kelompok 2 2024</p>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
 
<?php include 'footer.php'; ?>