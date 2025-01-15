</php
require_once koneksidb.php');

if (isset($_POST['btnsimpan]')=='btnsimpan') {
$kodePetugas trim($_POST ['kodePetupas]);
$Nama triM($_POST['Nama']);
$Jabatan = trim ($_POST 'Jabatan']);
$Password = trim pOST [Password']);

query_sql "INSERT INTO tb_petugas (kodePetugas, nama, Jabatan, Password)
VALUES ('$KodelePetugas,'$Nama','$Jabatan',$'Password');";
s$ql mysqli query (@koneksidb, Squery sql) or die(mysqli_error());
echo ecript alert('Berhasil simpenscript
echo "cactips window.location.hrefpesugas.php</scipt>";
}

}
?>
doctype html>
html lang="en">
<head>
<meta charset="utf-8">
<meta name"viewport" content="width=device-width, initial-scale-i, shrink-to-fit-no"
<meta name="description" content
<meta name"anthor" content
<link rel="icon" href="docs/4.0/assets/ing/ravicons/favicon.100">

<title>Aplikasi PHP MySQL</title>

<link rel="canonical" href="https://petbootstran.com/docs/4.0/examples/navbar-static/">

<-- Bootstrap core CSS
<link href="dist/css/bootstrap.min.css" rel="stylesheet">

<--- Custom styles for this template
<link href="navbar-top-cas" rel="stylesheet">

</head>
<body>
<!php require_once('menu.').php');?>
<br>
<div class="container">
     <h2>Tambah Data Petugas</h2>

    <form method="post" name="form1">
        <div class farm-group">
            <div class="form-group">
                 <label form="KodePetugas">Kode Petugas:</label>
                 <input type="text" required nane RodePetugas" class="form-control">
</div>
<div class="form-group">
<label for="nama">Nama:</label>
<input syge"text" required name"Kama" class="form-control">
</div>
<div class="form-group">
<label for Jabatan Jabatan :</label>
<input type="text" required nane Jabatan class="form-control">
