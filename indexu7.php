<?php
require 'functionsu7.php';
$u7 = query("SELECT * FROM u7");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin U7</title>
</head>
<body>

    <h1>Daftar Pemain SSB</h1>

    <a href="tambahu7.php">Tambah data Pemain SSB</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>NIP</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>SSB</th>
        <th>Gambar</th>
    </tr>

    <?php $i =1; ?>
    <?php foreach ( $u7 as $row ) : ?> 
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">ubah</a>
            <a href="hapusu7.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
        </td>
        
        <td><?= $row["nip"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["alamat"]; ?></td>
        <td><?= $row["ssb"]; ?></td>
        <td><img src="img/<?= $row["gambar"]; ?>"width="50"></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

    </table>
</body>
</html>