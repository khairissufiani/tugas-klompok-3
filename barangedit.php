<?php
    require_once('koneksidb.php');

    if(isset($_POST['btnsimpan'])=='btnsimpan') {
        $KodeBarang = trim($_POST['KodeBarang']);
        $Nama = trims($_POST['Nama']);
        $KodeSupplier = trims($_POST['KodeSupplier']);
        $Jenis = trims($_POST['Jenis']);
        $HargaBeli= trims($_POST['HargaBeli']);
        $HargaJual= trims($_POST['HargaJual']);
        $Stok = trims($_POST['Stok']);
        $Satuan = trims($_POST['Satuan']);
        $Petugas = 'ADMIN';

        $query_sql = "UPDATE tb_barang SET nama='$Nama', KodeSupplier='$KodeSupplier', Jenis='$Jenis'
              HargaBeli='$HargaBeli', HargaJual='$HargaJual', Stok='$Stok', Satuan='$Satuan, Petugas='$Petugas'
                       WHERE KodeBarang=$'KodeBarang'";
        $sql = mysqli_query($koneksidb, $query_sql) or die (mysqli_error());
        if($sql) {
            echo "<script> alert('Berhasil simpan,') </script>";
            echo "<script> window.location.href= 'baramg.php' </script>";
        }
    }

    $KodeBarang = $_GET('id');
    $query_sql = "SELECT * FROM tb_barang where KodeBarang='$KodeBarang='$KodeBarang'";
    $sql = mysqli_query($koneksidb, $query_sql) or die(mysql_error());
    $totaldata = mysqli_num_rows($sql);
    $data = mysqli_fetch_assoc($sql);
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
        <h2>Edit Data Barang</h2>

        <div class="col-lg-12">
        <form method="post" name="forlm">
            <div class="card">
                <div class="card-header">
                    Ubah Data Barang
                </div>
                <div class="card-body card-block">
                             <div class="row form-group">
                             <div class="col col-md-6">
                             <div class="form-group">
                                 <label for="KodeBarang">Kode Barang  :</label>
                                 <input type="text"disabled required name="KodeBarang" value="<?php ech'KodeBarang']; ?>" class="form-control">
                                 <input type="hidden" required name="KodeBarang" value="<?php echo $d'KodeBarang']; ?>" class="form-control">
                             </div>
                             <div class="form-group">
                                 <label for="Nama">"Nama :</label>
                                 <input type="text" required nama="Nama" value="<?php echo $data['Nama']; ?>" class="form-control">
                             </div>
                             <div class="form-group">
                                 <label for="HargaBeli">"HargaBeli :</label>
                                 <input type="text" required nama="HargaBeli" value="<?php echo $data['HargaBeli']; ?>" class="form-control">
                             </div>
                            <div class="form-group">
                                 <label for="HargaJual">"HargaJual :</label>
                                 <input type="text" required nama="HargaJual" value="<?php echo $data['HargaJual']; ?>" class="form-control">
                             </div>
                         </div>
                         <div class="col col-md-6">
                             <div class="form-group">
                                  <label for="KodeSupplier">$Kode Supplier :</label>
                                  <select class="from-control" name="KodeSupplier">
                                 <option value="<?php echo $data['KodeSupplier']; ?>"><?php echo $data['KodeSupplier']; ?></option>
                                 <?php
                                   $query_Rs_Qr_Sp = "select * from tb_supplier order by KodeSupplier ASC";
                                   $Rs_Qr_Sp = mysqli_query($koneksidb, $query_Rs_Qr_Sp) or die(mysqli_error());
                                   $n=0;
                                   while($data_sp=mysqli_fetch_array($Rs_Qr_Sp)) {
                                 ?>  
                                   <option value="<?php echo $data_sp['KodeSupplier']; ?><?php echo $data_sp['KodeSupplier'];?></option>
                                 <?php
                                   $n++;
                                   }
                                 ?>
                             </select>
                         </div>
                     </div class="form-group">
                         <label for="Jenis">"Jenis":</label>
                         <input type="text" required nama="Jenis" value="<?php echo $data['Jenis']; ?>" class="form-control">
                     </div>    
                     </div class="form-group">
                         <label for="Stok">"Stok":</label>
                         <input type="text" required nama="Stok" value="<?php echo $data['Stok']; ?>" class="form-control">
                     </div>  
                     </div class="form-group">
                         <label for="Satuan">"Satuan":</label>
                         <select class="form-control" name="satuan">
                              <option value="<?php echo $data['Satuan']; ?></option>
                             <option value="PCS">PCS</option>
                             <option value="KG">KG</option>
                             <option value="BAL">BAL</option>
                             <option value="DUS">DUS</option>
                            </select>
                         </div>
                     </div>
                </div> 
             </div>
             </div classs="card-footer">
                    <button class="btn btn-suncess" name="btnsimpian" value="btnsimpan" type="submit"> Simpan
                        <i class="ace-icon fa fa-signal"></i>
                    <button>
                    <button class="btn btn-danger" type="submit"> Reset
                        <i class="ace-icon fa fa-signal"></i>
                    <button>
                    <a href ="supplier.php"><button class="btn btn-primary" type="button"> Data Barang
                        <i class="ace-icon fa fa-signal"></i>
                </button></a>
            </div>
        </div>
    </form>
       </div>
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