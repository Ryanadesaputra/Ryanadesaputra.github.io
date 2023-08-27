<?php 
require 'functions.php';
$rdc = query("SELECT * FROM gros");

if(isset($_POST["cari"])) {
  $rdc = cari($_POST["keyword"]);
}

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Viga&display=swap" rel="stylesheet">

    <!-- My Css -->
    <link rel="stylesheet" href="style.css">

    <title>Coverage RDC Indonesia</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container">
      <a class="navbar-brand" href="#">Regional Distribusi Center</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">Features</a>
          <a class="nav-item nav-link" href="#">About</a>
          <a class="nav-item btn tombol" href="#">Join Us</a>
        </div>
      </div> -->
      </div>
    </nav>
    <!-- Akhir Navbar -->
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Get work done Faster and better with us</h1>
      </div>
       <div class="row ">
         <div class="col text-center judul">
          <h1>COVERAGE RDC INDONESIA</h1>
          </div>
        </div>
    </div>
    <!-- Akhir Jumbotron -->
     

    <div class="container d-flex justify-content-center">
      <div class="col-10 shadow p-3 info-panel">
        <form action="" method="post">
          <input type="text" class="form-control shadow-none kolom" placeholder="Cari Kota/Kabupaten..." name="keyword" autofocus autocomplete="off" id="keyword">
          <!-- <button type="submit" name="cari" id="tombol-cari">Cari</button> -->
          <button class="btn btn-outline-success" type="submit" name="cari" id="tombol-cari">Search</button>
        </form>
        <div id="conta">
          <ul class="nav mt-3" style="max-height: 300px; overflow-y: scroll;">
            <!-- Data -->
            <div class="container">
 <?php 
foreach ($rdc as $row):
 ?>  
              
              <div class="row border border-secondary">

                <div class="col">
                  <?= $row["kota"]; ?>
                </div>
                <div class="col">
                  <?= $row["rdc"]; ?>
                </div>
                <div class="col">

                  <a href="<?= $row["wat"]; ?>">
                    <img src="waicon.png" class="heartbeat">
                  </a>
                </div>
              </div>
<?php 
endforeach;
 ?>
            </div>

            <!-- Data -->
          </ul>
        </div>

      </div>
    </div>
    <!-- footer -->
    <div class="row footer">
      <div class="col text-center">
        <p>2023 All Right Reserved by Suryan.</p>
      </div>
    </div>
    <!-- footer -->

    <script src="js/script.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
  