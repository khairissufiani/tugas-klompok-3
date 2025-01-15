<php
   require_once('koneksidb.php");
   $query_sql = "SELECT FROM to petugas"!
   $sql= mysqli_query($koneksidb, Squery ($sql) or die (mysqli_error());
   $totaldata = mysqli_num_rows ($sgl);
   $data = mysqli_fetch_assoc($sql);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale-1, shrink-to-fit-no">
  <meta name="description" content=""
  <meta name"author" content="">
  <link rel="icon" href="docs/4.D/assets/ing/favicons/favicon.ico">
  
  <title>Aplikasi PHP MySQL</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbar-static/">

  <!-- Bootstrap core CSS -->
  <link href="dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="navbar-top.css" rel="stylesheet">

  </head>
  <body>
  <?php require_once < "menu.php '>;?>
  <br>
<div class="container"
     <h2 Data Petugas</h2>
     <a href="petugastambah.php<button class="btn btr-primary" type="button"> Tambah Petugas
          <i clansace-loon fa fa-signal"></i>
     </button></a>
     <br><br>

     <table align-table-responsive" class="table table-striped table-bordered table-hover 12 dynamic-table">
        <theed>
        <th>Ubah/ Hapus</th>
       <th>Kode</th>
       <th>Nama</th>
        <th>Jabatan/th>
    </thead>
    <tbody>
         <php do {
            if ($totaldata==0) {
                   echo 'data kosong .';
            }else{?>
         <tr>
            <td>
              <a href="petugasedit.php?id=hp echo data['Mode Petugas >>
              <button class="bta-warning">Ubah/button/a>
              <a href "petugashapus.php?id=<?php echo $data ['Kodeetugas');?>">
              <button class="btn-danger">Hapus</button></a>
          </td>  
          <td?><?php echo $data/['KodePetugas'];?><td>
          <td?><?php echo $data/['Nama'];?><td>
          <td><?php echo $data ['Jabatan']; ?></td>
      </tr>
         <?php }
         }while ($data = mysqli_fetch_assoc($sql);
       ?>
    </tbody>
</table>
<div>

  <!-- Bootstrap core JavaScript
  ==================================================-->
  <!-- placed at the end of the document to the pages load faster-->
   <script src="https://code.jquery.com/jquery-3.2.1.slin.min.js" integrity="sha384-KJ3o2DKtlkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGwJwFDMVNA/GpGff93hxG5KKN" crossorigin"annymous"></script>
   <script>window.jQuery || document.write('<scrip src="assets/js/vendor/jquery-siim.min.js")></script>'<script>
  <script src=assets/js/vendor/popper.min.js"></script>
  script src="dist/js/bootstrap.min.js"></script>
</body>
</html>