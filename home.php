<?php
require_once "koneksi.php";
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
}
?>
<!doctype html>
<html Lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laundry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNeoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <marquee behavior="alternate" direction="right" width="100%">
Diskon 35% idul Adha
    </marquee>
    <h1 class="display-6 mt-4">Selamat Datang Di Laundry Tanjung</h1>
    <p class="lead"></p>
  </div>
</div>
  <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="nn.jpg" class="d-block w-100" height="450"   alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Bantal</h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="handuk.png" class="d-block w-100"  height="450" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Handuk</h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="bantal.png" class="d-block w-100"  height="490" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Kaos</h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="vv.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Nasi Goreng</h5>
        <p></p>
</div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
 
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>