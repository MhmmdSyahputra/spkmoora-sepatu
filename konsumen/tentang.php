<?php

session_start();
//JIKA TIDAK DITEMUKAN $_SESSION['status'] (USER/ADMIN TIDAK MELIWATI TAHAP LOGIN) MAKA LEMBAR ADMIN/USER KEHALAMAN LOGIN 
if (!isset($_SESSION['status'])) {
  header("Location: ../index.php?pesan=logindahulu");
  exit;
}

require '../functions.php';

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <style>
    body {
      background-color: #f0f0f0;
    }

    .container {
      min-height: calc(100vh - 211px - -60px);
    }


    .col-md-12 {
      padding: 8px;
    }

    .copyright {
      text-align: center;
      color: white;

    }

    a font {
      color: whitesmoke;
    }

    .navbar-nav a:hover {
      color: darkblue;
    }

    .visi {
      width: 500px;
      height: 150px;
      margin-top: -100px;
      border: 1px solid grey;
      float: left;
      position: absolute;
    }

    .misi {
      width: 500px;
      height: 150px;
      border: 1px solid grey;
      position: absolute;
      margin-left: 605px;
      margin-top: -100px;
    }

    @media (max-width: 1000px) {
      .visi {
        width: 90%;
        margin-top: -250px;
      }

      .misi {
        width: 90%;
        margin-left: 0;
        margin-top: -50px;
      }

      .telp {
        margin-right: 350px;
        margin-bottom: 10px;

      }

      .alamat {
        margin-right: 350px;
        margin-bottom: 10px;
      }


      .email {
        margin-right: 350px;
        margin-bottom: 10px;
      }


    }
  </style>

  <title>Tentang Kami</title>
</head>

<body bgcolor="f0f0f0">
  <nav class="navbar navbar-expand-lg navbar-dark  bg-primary">
    <a class="navbar-brand" href="#"><img src="../img/gmd.png" width="50"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav" style="margin: 10px;">
        <a class="nav-link active" href="index.php">
          <font size="4"><b>Home</b> </font><span class="sr-only">(current)</span>
        </a>
        <a class="nav-link" href="data_sepatu_sport.php">
          <font size="4"><b>Data Sepatu Sport</b></font>
        </a>
        <a class="nav-link" href="laporan.php">
          <font size="4"><b>Laporan</b></font>
        </a>
        <a class="nav-link" href="tentang.php">
          <font size="4"><b>Tentang</b></font>
        </a>
        <!-- membuat tobol logout menjadi lebih ke kanan dan bisa menyesuaikan di mobile juga. 1&nbsp = 1x spasi -->
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="log nav-link" href="../logout.php">
          <font size="4"><b>Logout</b></font>
          <img src="../img/logout.png" width="30">
        </a>
      </div>
    </div>
  </nav>

  <br>
  <div class="container bg-light shadow p-3 mb-5">

    <div class="alert alert-info">
      <center><b>TENTANG KAMI</b></center>
    </div>
    <center>Toko Gajah Mada Fun Shop merupakan Toko Sepatu dan perlengkapan olahraga yang ada di kota Medan. Toko Gajah Mada Fun Shop berdiri pada tahun 1979. Seiring berjalannya waktu Toko Gajah Mada Fun Shop telah banyak melayani pembelian perlengkapaan olahraga khususnya sepatu sport.</center>

    <br><br><br>

    <center>
      <h5><b>VISI MISI</b></H4>
    </center>
    <hr>

    <center><img src="../img/visi-misi.png" width="300" style="position: fixed;margin-left: 0%;position: relative; opacity: 60%;"></center>

    <center>

      <div class="visi shadow">
        <h5><b>Visi</b></h5>
        <font>Menjadi Toko Sport yang menyediakan perlengkapan olahraga, kostum dan peralatan Olahraga yang
          terlengkap di Sumatera dan tersebar di seluruh penjuru nusantara.</font>
      </div>

      <div class="misi shadow">
        <h5><b>Misi</b></h5>
        <font>Menjadi Toko Sport yang menyediakan perlengkapan, kostum dan peralatan olahraga yang berkualitas dan layanan terbaik.</font>
      </div>

      <br><br><br>

    </center>

    <br><br>

    <center>
      <h6><b>KONTAK KAMI</b></H4>
    </center>
    <hr>
    <br>

    <img class="telp" src="../img/phone.png" width="30" style="float: left">
    <font class="telp2">0812 - 6034 - 0809</font>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img class="alamat" src="../img/pin.png" width="30">
    <font class="alamat2">JL. Palangkaraya No. 19/21 Medan</font>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img class="email" src="../img/email.png" width="30">
    <font class="email2">gajahmada.fshop@gmail.com</font>
  </div>

  <div class="col-md-12 bg-primary">
    <div class="copyright">
      <h5>Andika Prayoga 2021</h5>
    </div>
  </div>


  <!-- 
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
   -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>

</html>