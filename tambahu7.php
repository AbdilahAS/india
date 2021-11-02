<?php
require 'functionsu7.php';
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    
// cek apakah data berhasil di tambahkan atau tidak
if( tambah($_POST) > 0 ) {
    echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'indexu7.php';
            </script>
            ";
} else {
    echo "
        <script>
            alert('data gagal ditambahkan!');
            document.location.href = 'indexu7.php';
        </script>
    ";
}
   
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>FORM PENDAFTARAN PEMAIN SSB</title>
</head>
<body>
    <h1> FORM PENDAFTARAN PEMAIN SSB</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nip">NIP : </label>
                <input type="text" name="nip" id="nip" required>
            </li>
            <li>
            <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
            <label for="alamat">Alamat : </label>
                <input type="text" name="alamat" id="alamat">
            </li>
            <li>
            <label for="ssb">SSB : </label>
                <input type="text" name="ssb" id="ssb">
            </li>
            <li>
            <label for="gambar">Gambar : </label>
                <input type="file" name="gambar" id="gambar"  accept='image/*' required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>    
    
    </form>
    
</body>
</html>