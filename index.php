<?php
require 'functions.php';
$ssb = query("SELECT * FROM ssb");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>

    <h1>Daftar SSB</h1>

    <a href="tambah.php">Tambah data SSB</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Nama</th>
        <th>NISS</th>
        <th>Alamat</th>
        <th>Gambar</th>
    </tr>

    <?php $i =1; ?>
    <?php foreach ( $ssb as $row ) : ?> 
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">ubah</a>
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
        </td>
        
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["niss"]; ?></td>
        <td><?= $row["alamat"]; ?></td>
        <td><img src="img/<?= $row["gambar"]; ?>"width="50"></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

    </table>
</body>
</html>