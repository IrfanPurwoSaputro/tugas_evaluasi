<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tugas Evaluasi Minggu 4</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <!-- Brand -->
    <a class="navbar-brand ml-3" href="index.html">
        <img src="gambar/New_Balance_logo.png" alt="logo" style="width:100px;">
    </a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
        <ul class="navbar-nav my-auto mb-5 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link text-dark active mx-4" aria-current="page" href="index.html">Pria</a>
            </li>
            <li class="nav-item">
                <a id="flip" class="nav-link text-dark mx-4" href="#">Wanita</a>
            </li>
            <li class="nav-item">
                <a id="flip2" class="nav-link text-dark mx-4" href="#">Anak</a>
            </li>
            <li class="nav-item">
                <a id="flip3" class="nav-link text-dark mx-4" href="#">Sale</a>
            </li>
        </ul>
    </div>
</nav>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="gambar/img_2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="gambar/img_1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="gambar/img_3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<div class="container mt-lg-5">
    <div class="row">
        <?php
        foreach ($produk as $data ) {
        echo "<div class='col-sm-4'>";
            echo "<div class='card'>";
                echo "<img src='gambar/$data[gambar_produk]' width='100%'>";
                echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>$data[nama_produk]</h5>";
                    echo "<p class='card-text'>$data[deskripsi_produk]</p>";
                   echo "<a href='#' class='btn btn-dark btn-block'>Buy Now</a>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
        }
        ?> 
    </div>
</div>
<footer class="bg-dark text-center text-white mt-3">
    <div class="text-center p-3">
      Made by Irfan Purwo Saputro
    </div>
  </footer>
</body>
</html>