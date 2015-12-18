<?php require_once 'clientDataDokter.php' ?>
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
    <?php if($aksi=="" || $aksi=="dataDokter"){ ?>
      <div class="container">
      <div class="panel panel-default">
      <div style="text-align:center">
        <h1><label class="label label-success">Data Dokter Terdaftar</label></h1>
      </div>
      <center><a href="?aksi=tambahData" class="btn btn-primary"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data Dokter</a></center>
      <div class="panel-body">
      <div class="table-responsive">
          <table  class="table table-striped table-bordered table-condensed" id="example" class="tablesorter">
            <thead> 
              <tr class="info">
                <th>Kode Dokter</th>
                <th>Nama</th>
                <th>Alamat</th> 
                <th>Kota</th>
                <th>Telepon</th>

            </tr>
            <?php foreach ($data as $key => $value) { ?>
            <tr> 
              <td><?php echo $value->kodeDokter;?></td>
              <td><?php echo $value->namaDokter;?></td>
              <td><?php echo $value->alamatDokter;?></td>
              <td><?php echo $value->kotaDokter;?></td>
              <td><?php echo $value->telpDokter;?></td>
              
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
            <div style="text-align:center" class="panel-heading"><b>Tambah Dokter</b></div>
            <div class="panel-body">

            <form class="form-horizontal" action="?aksi=tambahDataDokter" method="POST">
                <div class="form-group">
                  <label class="control-label col-sm-2">Kode Dokter :</label>
                  <div class="col-sm-5">
                    <input name="kodeDokter" type="text" placeholder="Kode Dokter" autofocus required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Nama :</label>
                  <div class="col-sm-5">
                    <input name="namaDokter" type="text" placeholder="Nama" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Alamat :</label>
                  <div class="col-sm-5">
                    <input name="alamatDokter" type="text" placeholder="Alamat" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Kota :</label>
                  <div class="col-sm-5">
                    <input name="kotaDokter" type="text" placeholder="Kota" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Telepon :</label>
                  <div class="col-sm-5">
                    <input name="telpDokter" type="text" placeholder="Telepon" required>
                  </div>
                </div>
                <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-success btn-md">
                    <input type="reset" value="Ulangi" class="btn btn-primary">
                  </div>
                </div>
                <a href="dataDokter.php">Kembali</a>
            </form>
            </div>
    <?php }else if($aksi=="tambahDataDokter"){
              if($hasil==1){
                echo "<script>alert('Tambah data berhasil !')</script>";
                header("Refresh: 0; URL='dataDokter.php'");
              }else{ 
                echo "<script>alert('Tambah data gagal ! Kode Dokter sudah ada !')</script>";
                echo "<script>history.go(-1);</script>"; 
              }
          }else if($aksi=="ubahData"){ 
            foreach ($dataByKodeD as $key => $value) { ?>
            <div class="container">
            <div class="panel panel-default">
            <div style="text-align:center" class="panel-heading"><b>Ubah Data Dokter</b></div>
            <div class="panel-body">
            <form class="form-horizontal" action="?aksi=ubahDataDokter" method="POST">
                <input name="kodeDAwal" type="hidden" placeholder="Kode Dokter" value="<?php echo $value->kodeDokter ;?>" required>  
                <div class="form-group">
                  <label class="control-label col-sm-2">Kode Dokter:</label>
                  <div class="col-sm-5">
                    <input name="kodeDokter" type="text" placeholder="Kode Dokter" value="<?php echo $value->kodeDokter ;?>" autofocus required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Nama :</label>
                  <div class="col-sm-5">
                    <input name="namaDokter" type="text" placeholder="Nama" value="<?php echo $value->namaDokter ;?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Alamat :</label>
                  <div class="col-sm-5">
                    <input name="alamatDokter" type="text" placeholder="Alamat" value="<?php echo $value->namaDokter ;?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Kota :</label>
                  <div class="col-sm-5">
                    <input name="kotaDokter" type="text" placeholder="Kota" value="<?php echo $value->kotaDokter ;?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Telepon :</label>
                  <div class="col-sm-5">
                    <input name="telpDokter" type="text" placeholder="Telepon" value="<?php echo $value->telpDokter ;?>"required>
                  </div>
                </div>
                
                <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success btn-md"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
                  </div>
                </div>
                <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-10">
                    <a href="dataDokter.php" class="btn btn-primary">Kembali</a>
                  </div>
                </div>
              </form>
          <?php
            }
            
          }else if($aksi=="ubahDataDokter "){
              if($hasil==1){
                echo "<script>alert('Ubah data berhasil !')</script>";
                header("Refresh: 0; URL='dataDokter.php'");
              }else{ 
                echo "<script>alert('Ubah data gagal !')</script>";
                echo "<script>history.go(-1);</script>"; 
              }
          }
        ?>
  </body>
</html>
