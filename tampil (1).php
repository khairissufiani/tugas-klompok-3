<?php
include "koneksi.php";
?>
<div id="content">
    <h2>Data Pegawai</h2>
    <table id="tabel">
    <tr>
        <th width="5%">No</td>
        <th width="10%">NIP</td>
        <th width="20%">Nama</td>
        <th width="15%">Tgl Lahir</td>
        <th width="20%">Jenis Kelamin</td>
        <th width="30%">Alamat</td>
        <th>Action</td>
    </tr>
    <?php
    $no = 1;
    $query = "SELECT nip, nama, tgllahir, jenkel, alamat
                FROM pegawai ORDER BY nip";
    $sql = mysql_query ($query);
    while ($hasil = mysql_fetch_array ($sql)) {
            $nip = $hasil['nip'];
            $nama = stripslashes ($hasil['nama']);
            $jenkel = ($hasil['jenkel']==0)?"Laki-laki" :
"Wanita";
            $tgllhr = stripslashes ($hasil['tgllahir']);
            $alamat = stripslashes ($hasil['alamat']);
            $warna = ($no%2==1)?"#ffffff":"#efefef";
            //
            //tampilkan data pegawai
    ?>
    <tr background_color="<?=$warna?>">
        <td><?=$no?></td>
        <td><?=$nip?></td>
        <td><?=$nama?></td>
        <td><?=$tgllhr?></td>
        <td><?=$jenkel?></td>
        <td><?=$alamat?></td>
        <td>
        <a
href="index.php?page=foto&nip=<?=$nip?>">Foto</a><br/>
        <a
href="index.php?page=edit&nip=<?=$nip?>">Edit</a><br/>
        <a
href="index.php?page=delete&nip=<?=$nip?>">Delete</a></td>
        </tr>
    <?php $no++; }?>
    </table>
</div>