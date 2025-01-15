<?php
    require_once('koneksi db.php') ;
    $quire_sql ="SELECT * FROM tb_barang";
    $sql = mysqli_query($koneksidb, $query_sql) or die(mysqli_error());
    $totaldata = mysqli_num_rows($sql);
    $data = mysqli_fetch_assoc($sql);

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="docs/4.0/assets/img/favicons/favicon.ico">

  <title>Aplikasi PHP mySQL</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbar-static/">

  <!-- Bootstrap core CSS -->
  <link herf="dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Custom styles for this template -->
   <link href="navbar-top.css" rel="stylesheet">

</head>
<body>
  <?php require_once('menu.php'); ?>
  <br>
  <div class="container">
    <h2>Data Barang</h2>
    <a href="barangtambah.php"><button class=btn btn-primary" type="button"> Tambah Barang
    <i class="ace-icon fa fa-signal"></i>
</button></a>
<br><br>

<table align="table-responsive" class="table table-striped table-bordered table-hover" id="dynamic-table">
  <thead>
    <th>Ubah / Hapus</th>
    <th>Kode</th>
    <th>Nama</th>
    <th>supplier</th>
    <th>Jenis</th>
    <th>Harga </th>
    <th>Stok</th>
    <th>Satuan</th>
    <th>Petugas</th>
</thead>

<tbody>
  <?php do {
    if($totaldata==0) {
      echo 'data kosong. ';
    }else{ ?>

<tr>
  
    <td>
        <a herf="barangedit.php?id=<?php echo $data['KodeBarang']; ?>">
        <button class="btn-warning">Ubah</button></a>
        <a herf="baranghapus.php?id=<?php echo $data['KodeBarang']; ?>">
        <button class="btn-danger">Hapus</button></a>

    </td>
    <td><?php echo $data['KodeBarang']; ?></td>
    <td><?php echo $data['Nama']; ?></td>
    <td><?php echo $data['KodeSupplier']; ?></td>
    <td><?php echo $data['Jenis']; ?></td>
    <td><?php echo $data['HargaBeli']; ?></td>
    <td><?php echo $data['Stok']; ?></td>
    <td><?php echo $data['Satuan']; ?></td>
    <td><?php echo $data['Petugas']; ?></td>
 </tr>
        <?php }
      } while ($data = mysqli_fetch_assoc($sql));
    ?>
  </tbody>
    </table>
</div>

<!-- Bootstrap Core JavaScript
 ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity=
 "Sha384-KJ3o2DKtIkVYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" Crossorigin=anonymous"></script>
 <scrpit>window.jQuery || document.write ('<script src="assets/js/vendor/jQuery-slim.min.js"><\/script>')</script>
 <script src="assets/js/vendor/popper.min.js"></script>
 <scrpit src="dist/js/bootstrap.min.js"></scrpit>
 </body>
</html>
