<?php
error_reporting(0);
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <title>Tulis Aken | Bot Nulis</title>
    <link rel="shortcut icon" href="./img/favicon.png">
  </head>
  <style>

  .fg{
    font-family: 'Inconsolata', monospace;
  }

  </style>
  <body>

    <!--- Ini Navbar -->

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-warning ">
  <div class="container-fluid">
    <a class="navbar-brand" href=""><h3><b style="font-family: sans-serif;">Tulis Aken</b></h3></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto fg">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home"><b>Home</b></a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#tulis"><b>Tulis</b></a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#contact"><b>Contact</b></a>
        </li>

      </ul>
    </div>
  </div>
</nav>
<!--- Ini Akhir Navbar -->


<!-- Ini Konten Awal -->
<section id="home" style="padding-top: 5rem;">

  <div class="row mt-5">

  <div class="col-md-1"></div>

    <div class="col-md-4 mt-1" style="padding-top: 5rem;">
      <div class="shadow p-3 mb-5 bg-body rounded">
  <h1 class="text-center fg">Tulis Aken</h1>
  <p><h5 class="text-center fg">Tulis Aken Adalah Tool'S Bot Nulis Online Otomatis Yang Dapat Di Gunakan Ketika Anda Sedang Malas Menulis Secara Ofiline, Yang Terinspirasi Dari Bot <a href="https://github.com/hisyamardiansyah/Tulisno" class="link-sos pl-3" style="text-decoration: none; font-weight: bold;">Tulisno</a></h5></p>
  <div class="d-grid gap-2 col-6 mx-auto">
  <a class="btn btn-warning text-white text-center" aria-current="page"  href="#tulis" type="submit"><b>Ayo Nulis</b></a>
</div>
</div>
    </div>

      <div class="col-md-1"></div>


  <div class="col-md-5 mt-1" style="padding-top: 5rem;">
        <img src="./img/pict.svg" class="d-block w-100" alt="Pict" width="450px" height="400px">
</div>


 </div>

</section>
<!-- Ini Akhir Konten Awal -->



<!-- Ini Konten Bot -->
<section id="tulis" style="padding-top: 5rem;">
  <h2 class="text-center mt-5 fg">Ayo Nulis</h2>

  <div class="row mt-5">

<div class="col-md-7">
 <div class="d-grid gap-2 col-7 mx-auto">
   <div class="shadow-lg p-3 mb-5 bg-body rounded">
  <div class="card">
    <div class="card-body">
  <form method="post">
      <div class="form-floating">
        <p style="padding-left: 10px; font-family: sans-serif;"><b>Tulis Text:</b></p>
  <textarea class="form-control" placeholder="Tulis Text Di Sini..." id="floatingTextarea" name="text" required></textarea>
  <div class="d-grid gap-2 col-7 mx-auto">
  <button class="btn btn-warning text-white text-center mt-4" type="submit"><b>Kirim</b></button>
</div>
</div>
</form>

<?php
  if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['text'])) :
    $text = htmlspecialchars($_POST['text']);
    $isi = "http://salism3.pythonanywhere.com/write?text=";
    $tulisan = urlencode($text);
    $data = file_get_contents($isi.$tulisan);
    $hasil = json_decode($data);
?>
    </div>
  </div>

</div>

</div>
</div>



<div class="col-md-4">
  <?php

   if($hasil){


   ?>
<div class="d-flex justify-content-start">
   <div class="shadow-lg p-3 mb-5 bg-body rounded">
  <div class="card">
    <div class="card-body pt-5">

      <label><b>Result:</b></label>

            <img src="<?= $hasil->images[0] ?>" alt="result" class="img-fluid mt-2">

      <div class="d-grid gap-2 col-8 mx-auto">
      <a class="btn btn-warning text-white text-center mt-4" href="<?= $hasil->images[0] ?>" target="_blank" download type="button"><b>Download</b></a>
    </div>

    <?php }else{
      echo "<div class='alert alert-danger' role='alert'>";
      echo    "<p class='text-center mt-2'>Gagal Membuat Tulisan !</p>";
      echo "</div>";

    } ?>

    </div>
  </div>
</div>
</div>

</div>


<?php endif; ?>


<div class="col-md-1"></div>

</div>



</section>
<!-- Ini Akhir Konten Bot -->





<!-- Ini Contact -->
<section id="contact" class="jumbotron jumbotron-fluid" style="background-color: #ffff; padding-top: 5rem;">
<h2 class="text-center mt-5 fg">Contact</h2>

  <div class="row mt-5">


    <div class="col-md-2"></div>

    <div class="col-md-8">
     <div class="d-grid gap-2 col-10 mx-auto">
<div class="shadow p-3 mb-5 bg-body rounded">
      <div class="card">
        <div class="card-body">

<div class="row">
  <form action="" method="POST">

        <center>

           <div class="col-md-6">
                <input type="email" class="form-control mt-5" id="exampleFormControlInput1" placeholder="Email Address" name="_replyto" required>
            </div>

            <div class="col-md-6">
               <textarea class="form-control mt-5" id="exampleFormControlTextarea1"  placeholder="Your Message" rows="3" name="message" required></textarea><br>
            </div>

          </center>


</div>



 <div class="d-grid gap-2 col-7 mx-auto">
 <button class="btn btn-warning text-white text-center mt-4" type="submit"><b>Kirim</b></button>
</div>

  </form>

</div>
</div>
</div>
</div>
</div>



</div>

</section>
<!-- Ini Akhir Contact -->



<!-- Ini Footer-->
<footer class="footer mt-auto py-3 bg-warning">
  <div class="container">
    <p class="text-center text-white fg mt-3">Made With <i class="bi bi-heart-fill text-danger"></i>&nbsp;By&nbsp; <b><a href="https://github.com/Faiznurullah" class="link-sos pl-3" style="text-decoration: none;">Faiz Nurullah</a></b></p>
  </div>
</footer>
<!-- Ini Akhir Footer-->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  </body>
</html>
