<?php
    require_once('koneksidb.php');

    $KodeSupplier = $_GET['id'];
    $query_sql = "DELETE FROM tb_supplier where KodeSupplier=$KodeSupplier";
    $sql = mysqli_query($koneksidb, $query_sql) or die(mysql_error());
    if ($sql) {
        echo "<script> alert('Berhasil Hapus,') </script>";
        echo "<script>window.location.href='petugas.php'</script>";
    }
?>