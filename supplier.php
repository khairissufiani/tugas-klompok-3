<?php
require once('onekssdb.php');
$query_ sgl = "SELECT  * FROM tb_supplier";
$sql mysqli query(Skoneksidb, $query_sql) or die(mysqli_error());
$totaldata mysqli_num_rows ($sgl);
data mysqli fetch_assoc(sql);
?>
<!doctype html>
<html lang="en">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit-na">

<meta name="description" content="">

<neta name"anthor" content

<link rel="icon" href="docs/4.0/assets/ing/favicons/favicon.100)

<title>Aplikasi PHP MySQL</title>

<link rel="canonical" href="https://antbootstrap.com/docs/4.0/examples/navbar-static/">

Bootstrap core C85-

<link href="dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template

<link href="navbar-top.css" rel="stylesheet">


</head>

<body>

php require_once("ex.php"); ?>

<br>

<div class="container">

<h2>Data Supplier</h2>

<a hrefsuppliertambah.php"><button class="btn btn-primary" type="button"> Tambah Supplier

C-class&ce-loon fa fa-signal">/1

</button></a>

B

<table alion-table-responsive" class="table table-striped table-bordered table-hover" "dynamic-table"

<thead>

thUbah/Sapus</th>

<th>Rode</th>

(th)Mama/th>

<th>Alamat</th>

<th>Telp</th>

</thead>

Thody

php do

if (Stotaldata

echo ste sang.

lelse

<a hrefsupplieredit.php?10-7php echo $datappite>

button class"hta-warning" bah/button>

<a href supplierhapua.php?id=php echo (date("Kodelupplier'>

<button class="btn-danger" Bapus</button>


<button class="btn-danger" apus</button>


<?php }

) while ($data = mysqli_fetch_assoc($sql));

?>

</tbody>

</table>

</div>

<!-- Bootstrap core JavaScript

<!-- Placed at the end of the document so the pages load faster -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity=

"sha384-KJ302DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZCJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></s

<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"></script>

<script src="assets/js/vendor/popper.min.js"></script>

<script src="dist/js/bootstrap.min.js"></script>

</body>

</html>