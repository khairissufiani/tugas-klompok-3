<?php
    require_once('koneksidb.php');

    $KodeBarang = $_GET['id'];
    $query_sql = "DELETE FROM tb_supplier where KodeBarang=$KodeBarang";
    $sql = mysqli_query($koneksidb, $query_sql) or die(mysql_error());
    if ($sql) {
        echo "<script> alert('Berhasil Hapus,') </script>";
        echo "<script>window.location.href='barang.php'</script>";
    }
?>