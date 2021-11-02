<?php
//koneksi ke database
$conn = mysqli_connect("localhost","root","","pendaftaran");


function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data){
    global $conn;

    $nip = htmlspecialchars($data["nip"]);
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $ssb = htmlspecialchars($data["ssb"]);
    $gambar = htmlspecialchars($data["gambar"]);


    $query = "INSERT INTO u7 
                VALUES 
                ('', '$nip', '$nama', '$alamat', '$ssb', '$gambar')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM u7 WHERE id = $id");

    return mysqli_affected_rows($conn);
}
?>