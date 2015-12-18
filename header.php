<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="FaberNainggolan">
    <title>Data Rumah Sakit</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-hal-login.css" rel="stylesheet">
  </head>
 
  <body>
    <!-- Static navbar -->
    <nav class="navbar navbar-inverse navbar-static-top" >
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php" style="font-size:22px; padding-right:50px;">Sistem Informasi Rumah Sakit</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="dataDokter.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dokter<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="">Lihat Dokter</a></li>
                <li><a href="?aksi=tambahData">Tambah Dokter</a></li>
              </ul>
            </li>            
          </ul>
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="dataPasien.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pasien<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="dataPasien.php">Lihat Pasien</a></li>
                <li><a href="dataPasien.php?aksi=tambahData">Tambah Pasien</a></li>
              </ul>
            </li>            
          </ul>
        </div>
        
      </div>
    </nav>
    </body>
    </html>





   
