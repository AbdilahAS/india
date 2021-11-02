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

    $niss = htmlspecialchars($data["niss"]);
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $gambar = htmlspecialchars($data["gambar"]);


    $query = "INSERT INTO ssb 
                VALUES 
                ('', '$niss', '$nama', '$alamat', '$gambar')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM ssb WHERE id = $id");

    return mysqli_affected_rows($conn);
}
?>