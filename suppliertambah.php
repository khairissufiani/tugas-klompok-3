<?php
    require_once('koneksidb.php');

    if(isset($_POST['btnsimpan'])=='btnsimpan') {
        $KodePetugas = trim($_POST['KodePetugas']);
        $Nama = trim($_POST['Nama']);
        $Jabatan = trim($_POST['Jabatan']);
        $Telp = trim($_POST['Telp']);
        
        $query_sql = "INSERT INTO tb_supplier (KodeSupplier, Nama,Alamat,Telp)
        VALUES ('$KodeSupplier', '$Nama', '$Alamat', '$Telp');";
        $sql = mysqli_query($koneksidb, $query_sql) or die (mysqli_error());
        if($sql) {
            echo "<script> alert('Berhasil simpan,') </script>";
            echo "<script> window.location.href= 'supplier.php' </script>";
        }
    }
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
                    <label for="KodeSupplier">"KodeSupplier :</label>
                    <input type="text" required nama="KodeSupplier" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Nama">"Nama :</label>
                    <input type="text" required nama="Nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Alamat">"Alamat :</label>
                    <input type="text" required nama="Alamat" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Telp">"Telp :</label>
                    <input type="text" required nama="Telp" class="form-control">
                </div>

                <div class="form-check mb-12">
                    <button class="btn btn-suncess" name="btnsimpian" value="btnsimpan" type="submit"> Simpan
                        <i class="ace-icon fa fa-signal"></i>
                    <button>
                    <button class="btn btn-danger" type="submit"> Reset
                        <i class="ace-icon fa fa-signal"></i>
                    <button>
                    <a href ="supplier.php"><button class="btn btn-primary" type="button"> Data Supplier
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