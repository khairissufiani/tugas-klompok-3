<?php
include "koneksi.php";
//proses input berita
if (isset($_POST['Input'])) {
    $nip = addslashes (strip_tags ($_POST['nip']));
    $nama = addslashes (strip_tags ($_POST['nama']));
    $tgllahir = $_POST['thn']."-".$_POST['bln']."-".$_POST['tgl'];
    $jenkel = $_POST['jenkel'];
    $alamat = addslashes (strip_tags ($_POST['alamat']));
    $namafoto = $_FILES['foto']['name'];
    if (strlen ($nip) != 10) {
        die ("NIP harus 10 digit");
    }
if (strlen($namafoto)>0) {
//upload
if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
move_uploaded_file ($_FILES['foto']['tmp_name'],

"images/".$namafoto);

        }
    }
    //insert ke tabel
    $query = "INSERT INTO pegawai
VALUES('$nip','$nama','$tgllahir','$jenkel','$alamat','$namafoto')";
    $sql = mysql_query ($query) or die (mysql_error());
    if ($sql) {
        echo "<h2><font color=blue>Data Pegawai telah berhasil

ditambahkan</font></h2>";
    } else {
        echo "<h2><font color=red>Data Pegawai gagal

ditambahkan</font></h2>";
    }
}
?>
<div id="content">
    <h2>Input Data Pegawai</h2>
    <FORM ACTION="" METHOD="POST" NAME="input"
enctype="multipart/form-data">
        <table cellpadding="0" cellspacing="0" border="0"

width="700">

                <tr>
                        <td width="200">NIP</td>
                        <td>: <input type="text" name="nip" size="15"

maxlength="10"></td>
                </tr>
                <tr>
                        <td>Nama</td>
                        <td>: <input type="text" name="nama" size="30"

maxlength="30"></td>
                </tr>
                <tr>
                        <td>Tanggal Lahir</td>
                        <td>:
                        <select name="tgl">
                        <?php
                            for ($i=1; $i<=31; $i++) {
                                 $tg = ($i<10) ? "0$i" : $i;
                                 echo "<option

value='$tg'>$tg</option>";
                         }
                    ?>
                    </select> -
                    <select name="bln">
                    <?php
                        for ($i=1; $i<=12; $i++) {
                        $bl = ($i<10) ? "0$i" : $i;
                        echo "<option

value='$bl'>$bl</option>";
                         }
                         ?>
                         </select> -
                         <select name="thn">
                         <?php
                            for ($i=1970; $i<=2000; $i++) {
                            echo "<option value='$i'>$i</option>";
                         }
                         ?>
                         </select>
                         </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>: <input type="radio" name="jenkel" value="0"
checked> Pria &nbsp;&nbsp;
                    <input type="radio" name="jenkel" value="1">

Wanita</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <textarea name="alamat" cols="40"
rows="5"></textarea></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>: <input type="file" name="foto"/></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;&nbsp;<input type="submit" name="Input"
value="Input Data">&nbsp;
                    <input type="reset" name="reset"

value="Reset"></td>
              </tr>
        </table>
    </FORM>
</div>