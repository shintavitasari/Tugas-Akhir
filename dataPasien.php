<?php require_once 'clientDataPasien.php' ?>
<!DOCTYPE html>

<html>
  <head>
  <meta charset="utf-8">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-hal-login.css" rel="stylesheet">
  </head>
  <body>
    <?php include 'header.php';?>
    <?php if($aksi=="" || $aksi=="dataPasien"){ ?>
      <div class="container">
      <div class="panel panel-default">
      <div style="text-align:center">
        <h1><label class="label label-success">Data Pasien Terdaftar</label></h1>
      </div>
      <center><a href="?aksi=tambahData" class="btn btn-primary"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data Pasien</a></center>
      <div class="panel-body">
      <div class="table-responsive">
          <table  class="table table-striped table-bordered table-condensed" id="example" class="tablesorter">
            <thead> 
              <tr class="info">
                <th>Kode Pasien</th>
                <th>Nama</th>
                <th>Alamat</th> 
                <th>Kota</th>
                <th>Telepon</th>

            </tr>
            <?php foreach ($data as $key => $value) { ?>
            <tr> 
              <td><?php echo $value->kodePasien;?></td>
              <td><?php echo $value->namaPasien;?></td>
              <td><?php echo $value->alamatPasien;?></td>
              <td><?php echo $value->kotaPasien;?></td>
              <td><?php echo $value->telpPasien;?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      </div>
      </div>
      </div>
      <br>
      
    <?php }else if($aksi=="tambahData"){ ?>
            <div class="container">
            <div class="panel panel-default">
            <div style="text-align:center" class="panel-heading"><b>Tambah Pasien</b></div>
            <div class="panel-body">

            <form class="form-horizontal" action="?aksi=tambahDataPasien" method="POST">
                <div class="form-group">
                  <label class="control-label col-sm-2">Kode Pasien :</label>
                  <div class="col-sm-5">
                    <input name="kodePasien" type="text" placeholder="Kode Pasien" autofocus required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Nama :</label>
                  <div class="col-sm-5">
                    <input name="namaPasien" type="text" placeholder="Nama" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Alamat :</label>
                  <div class="col-sm-5">
                    <input name="alamatPasien" type="text" placeholder="Alamat" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Kota :</label>
                  <div class="col-sm-5">
                    <input name="kotaPasien" type="text" placeholder="Kota" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Telepon :</label>
                  <div class="col-sm-5">
                    <input name="telpPasien" type="text" placeholder="Telepon" required>
                  </div>
                </div>
                <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-success btn-md">
                    <input type="reset" value="Ulangi" class="btn btn-primary">
                  </div>
                </div>
                <a href="dataPasien.php">Kembali</a>
            </form>
            </div>
    <?php }else if($aksi=="tambahDataPasien"){
              if($hasil==1){
                echo "<script>alert('Tambah data berhasil !')</script>";
                header("Refresh: 0; URL='dataPasien.php'");
              }else{ 
                echo "<script>alert('Tambah data gagal ! Kode Pasien sudah ada !')</script>";
                echo "<script>history.go(-1);</script>"; 
              }
          }else if($aksi=="ubahData"){ 
            foreach ($dataByKodeP as $key => $value) { ?>
            <div class="container">
            <div class="panel panel-default">
            <div style="text-align:center" class="panel-heading"><b>Ubah Data Pasien</b></div>
            <div class="panel-body">
            <form class="form-horizontal" action="?aksi=ubahDataPasien" method="POST">
                <input name="kodePAwal" type="hidden" placeholder="Kode Pasien" value="<?php echo $value->kodePasien ;?>" required>  
                <div class="form-group">
                  <label class="control-label col-sm-2">Kode Pasien :</label>
                  <div class="col-sm-5">
                    <input name="kodePasien" type="text" placeholder="Kode Pasien" value="<?php echo $value->kodePasien ;?>" autofocus required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Nama :</label>
                  <div class="col-sm-5">
                    <input name="namaPasien" type="text" placeholder="Nama" value="<?php echo $value->namaPasien ;?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Alamat :</label>
                  <div class="col-sm-5">
                    <input name="alamatPasien" type="text" placeholder="Alamat" value="<?php echo $value->alamatPasien ;?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Kota :</label>
                  <div class="col-sm-5">
                    <input name="kotaPasien" type="text" placeholder="Kota" value="<?php echo $value->kotaPasien ;?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Telepon :</label>
                  <div class="col-sm-5">
                    <input name="telpPasien" type="text" placeholder="Telepon" value="<?php echo $value->telpPasien ;?>"required>
                  </div>
                </div>
                
                <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success btn-md"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
                  </div>
                </div>
                <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-10">
                    <a href="dataPasien.php" class="btn btn-primary">Kembali</a>
                  </div>
                </div>
              </form>
          <?php
            }
          }else if($aksi=="ubahDataPasien "){
              if($hasil==1){
                echo "<script>alert('Ubah data berhasil !')</script>";
                header("Refresh: 0; URL='dataPasien.php'");
              }else{ 
                echo "<script>alert('Ubah data gagal !')</script>";
                echo "<script>history.go(-1);</script>"; 
              }
          }
        ?>
  </body>
</html>
