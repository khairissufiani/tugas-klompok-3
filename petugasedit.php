<?php
     reguire_once('koneksidb.php');

     if(isset($_POST['btnsimpan'])=='btnsimpan') {
         $KodePetugas = trim($_POST['KodePetugas']);
         $Nama = trim($_POST['Nama']);
         $Jabatan = trim($_POST['Jabatan']);
         
         $query_sql = "UPDATE tb_petugas SET Nama='$Nama', Jabatan='$Jabatan'
                    WHERE KodePetugas='$KodePetugas']);
         $sql = mysqli_query($koneksidb, $query_sql) or die (mysqli_error());
         if($sql) {
             echo "<script> alert('Berhasil simpan,') </script>";
             echo "<script> window.location.href='petugas.php' </script>";
         }
     }

    $KodePetugas = $_GET['id'];
    $Squery_sql = "SELECT * FROM tb_petugas where KodePetugas='$KodePetugas'";
    $sql = mysqli_query(koneksidb, $query_sql) or die (mysql_error());
    $totaldata = muysql_num_rows($sql);
    $data = mysql_fetch_assoc($sql);
?>
<!doctype html>
<html lang="en">
  <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-widdth, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">
     <link rel="icon" href="docs/4.0/assets/img/favocions/favicon.ico">

     <title>Aplikasi PHP MySQL</title>
     <link rel="canonical" href="https://getbootsrap,com/docs/4.0/examples/navbar-static/">
          <!-- Bootsrap core CSS -->
      <link href="dist/css/bootsrap.min.css" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link href="navbar-top.css" rel="stylesheet">

      </head>
<body>
    <?php require_once('menu.php'); ?>
    <br>
    <div class="container">
        <h2>Tambah Data Supplier</h2>

        <form method="post" name="forml">
            <div class="form-group">
                <div class="form-group">
                    <label for="KodePetugas">"KodePetugas :</label>
                    <input type="text" disabled value="<?php echo $data['KodePetugas'];?>:
                    name="KodePetugas" class="form-control">
                    <input type="hidden" value="<?php echo $data['KodePetugas'];?>:
                    name="KodePetugas" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Nama">"Nama :</label>
                    <input type="text" required value="<?php echo $data['Nama'];?>:
                    name="Nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Jabatan">"Jabatan:</label>
                    <input type="text" required value="<?php echo $data['Jabatan'];?>:
                    name="Jabatan" class="form-control">
                </div>

             <div class="form-check mb-12">
                    <button class="btn btn-suncess" name="btnsimpian" value="btnsimpan" type="submit"> Simpan
                        <i class="ace-icon fa fa-signal"></i>
                    <button>
                    <button class="btn btn-danger" type="submit"> Reset
                        <i class="ace-icon fa fa-signal"></i>
                    <button>
                    <a href ="Petugas.php"><button class="btn btn-primary" type="button"> Data Petugas
                        <i class="ace-icon fa fa-signal"></i>
                </button></a>
            </div>
        </div>
    </form>

    </div> 
    
      <!--Bootsrap core JavaScript
    ================================================= -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jguery.com/jguery-3.2.1.slim.min.js"integrity=
    "sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="ananymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootsrap.min.js"></script>
 </body>
</html>