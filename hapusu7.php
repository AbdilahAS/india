<?php
require 'functionsu7.php';

$id = $_GET["id"];

if( hapus($id) > 0 ) {
    echo "
        <script>
            alert('data berhasil dihapus!');
            document.location.href = 'indexu7.php';
        </script>
        ";
} else {
    echo "
        <script>
            alert('data gagal dihapus!');
            document.location.href = 'indexu7.php');
        </script>
        ";
}
?>