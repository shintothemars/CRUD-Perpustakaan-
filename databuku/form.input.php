<?php
    include("../config.php");
    if(!empty($_GET["id"])){

        $id=$_GET["id"];
        $q=$db->prepare("select*from databuku where id_buku=?");
        $q->execute ([$id]);

        if ($q->rowCount ()>0){
            $r=$q->fetch();
            $id_buku=$r["id_buku"];
            $judul=$r["judul"];
            $penulis=$r["penulis"];
            $penerbit=$r["penerbit"];
            $tglterit=$r["tglterbit"];
            $sinopsis=$r["sinopsis"];

            $button="ubah";

        }else{
            $_SESSION["notif"]="Maaf, Data tidak ditemukan";
            header("Location: index.php");
            die();
        }

    }else{
        $id_buku="";
        $judul="";
        $penulis="";
        $penerbit="";
        $tglterbit="";
        $sinopsis="";
        $button="simpan";

    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Data Buku Perpustakaan Damai</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/navbar-fixed/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">Perpustakaan Damai </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline mt-2 mt-md-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<main role="main" class="container">
  <div class="jumbotron">
    <h1>Input Data Buku</h1>
    <br>

    <form method="POST" action="form.action.php">
      <input type="hidden" name="databuku" value="<?php echo $databuku;?>">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Judul" name="judul" required value="<?php echo $judul; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Penulis</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Penulis" name="penulis" required value="<?php echo $penulis; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">penerbit</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Penerbit" name="penerbit" required value="<?php echo $penerbit; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Terbit</label>
    <div class="col-sm-10">
      <input type="date" name="tglterbit" required class="form-control" placeholder="Tanggal Terbit" value="<?php echo $tglterbit; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Sinopsis</label>
    <div class="col-sm-10">
      <input type="text" name="sinopsis" required class="form-control" placeholder="Sinopsis" value="<?php echo $sinopsis; ?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="<?php echo $button; ?>">Simpan Data</button>
    </div>
  </div>
</form>




  </div>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>
