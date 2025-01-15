<?php
    require_once('koneksidb.php');

    if(isset ($_POST['btnsimpan'])=='btnsimpan'){
        $KodeBarang = trim($_POST['KodeBarang']);
        $Nama = trim($_POST['Nama']);
        $KodeSupplier = trim($_POST['KodeSupplier']);
        $Jenis = trim($_POST['Jenis']);
        $HargaBeli = trim($_POST['HargaBeli']);
        $HargaJual = trim($_POST['HargaJual']);
        $Stok = trim($_POST['Stok']);
        $Satuan = trim($_POST['Satuan']);
        $petugas = 'ADMIN';

        $Query_sql = "select * from tb_barang where KodeBarang='$KodeBarang' ";
        $sql = mysqli_query($koneksidb, $query_sql) or die(mysqli_error());
        $totaldata = mysqli_num_rows($sql);
        if ($totaldata <> 0) {
           echo "<script> alert('Data Barang sudah pernah ada .') </script>";
           echo "<script>window.location.href='barangtambah.php'</script>";
        }else{
            $query_sql = "INSERT INTO tb_barang (KodeBarang, Nama, KodeSupplier, jenis, HargaBeli,HargaJual,Stok,
            satuan,petugas)
            VALUES ('$KodeBarang', '$Nama', '$KodeSupplier','$Jenis', '$HargaBeli', '$HargaJual', '$Stok', '$Satuan',
            '$Petugas') ;";
            $sql = mysqli_query($koneksidb, $query_sql) or die (mysqli_error());
            if($sql) {
                echo "<script> alert ('Berhasil simpan ,') </script>";
                echo "<script>window.location.herf='barang.php'</script";
            }
        }
    }         
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <name name="author" content="">
        <link rel="icon " href="docs/4.0/assets/img/favicons/favicon.ico">

        <title>Aplikasi PHP mySQL</title>

        <link rel="canonical" herf="https://getbootstrap.com/docs/4.0/examples/navbar-static/">

        <!-- Bootstrap core CSS -->
         <link href="dist/css/bootstrap.min.css" rel="stylesheet">

         <!-- Custom styles for this template -->
          <link herf="navbar-top.css" rel="stylesheet">

</head>
<body>
    <?php require_once('menu.php'); ?>
    <br>
    <div class="container">
        <h2>Tambah Data Barang</h2>

        <div class="col-Ig-12">
            <from method="post" name="formal" >
                <div class="card">
                    <div class="card-header">
                        Isi kan data barang
                   </div>
                   </div class="card-body card-block">
                           <div class="row from-group">
                            <div class="col col-md-6">
                                <div class="from-group">
                                    <label for="KodeBarang">Kode Barang :</label>
                                    <input type="text= required name="KodeBarang" class="from-control">
                                </div>
                                <div class="from-group">
                                    <label for="Nama">Nama :</label>
                                    <input type="text" required name="KodeBarang" class="from-control">
                                </div>
                                <div class="from-group">
                                    <label for="Nama">Nama :</label>
                                    <input type="text" required name="Nama" class="from-control">
                                </div>
                                <div class="from-group">
                                    <label for="HargaBeli">HargaBeli :</label>
                                    <input type="text" required name="HargaBeli" class="from-control">
                                </div>
                                <div class="from-group">
                                     <label for="HargaJual">HargaJual :</label>
                                    <input type="text" required name="HargaJual" class="from-control">
                                </div>
                            </div>
                        </div class="col col-md-6">
                              <div class="from-group"> 
                                <label for="KodeSupplier">Kode Supplier :</label>
                                <select class="from-control" name="KodeSupplier"> 

                                    <?php
                                    $query_Rs_Qr_Sp ="select * from tb_supplier order by KodeSupplier ASC";
                                    $Rs_Qr_Sp =mysqli_query($koneksidb, $query_Rs_Qr_Sp) or die(
                                    mysqli_error()) ;
                                    $n=0;
                                    while($data=mysqli_fetch_array($Rs_Qr_Sp)) {
                                ?>
                                    <option value="<?php echo $data['KodeSupplier']; ?>"><?php echo $data[
                                     'KodeSupplier']; ?></option>
                                <?php
                                   $n++;
                                   }
                                ?>
                            </select>
                        </div>
                        </div class="from-group">
                              <label for="Jenis">Jenis :</label>
                              <input type="text" required name="Jenis" class="from-control"> 
                        </div>
                        <div class="from-group"> 
                            <label for="Stok">Stok :</label>
                            <input type="text" required name="Stok" class="from-control">
                        </div>

                       </div> class="from-group">
                       <label for="Satuan">Satuan :</label>
                       <select class="from-control" name="Satuan">
                           <option value="PCS">PCS</option>
                           <option value="KG">KG</option>
                           <option value="BAL">BAL</option>
                           <option value="DUS">DUS</option>
                       </select>
                   </div>
               </div>
          </div>
   </div>
   </div class="card-footer">
         <button class="btn btn-success" name="btnsimpan" valaue="btnsimpan" type="sumbit"> simpan
            <i class="ace-icon fa fa-signal"></i>
         </button>
         <a herf="barang.php"><button class="btn btn-primary" type="button"> Data Barang
            <i class="ace-icon fa fa-signal"></i>
            </button></a>
        </div>
     </div>
</from>
 </div>
 </div>
 <br>
 <br>
 <br> 
 
 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"integrity=
  "sha348-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/QPg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>window.jquery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script')</script>
  <script src="assets/js/vendor/popper/.min.js"></script>
  <script src="dist/js/bootstrap.min.js"></script>
</body>
</html>

                                    


         
                   

        

