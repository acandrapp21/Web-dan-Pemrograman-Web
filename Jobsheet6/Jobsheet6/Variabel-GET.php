<?php 
    $nama = isset($_GET['nama']) ? $_GET['nama'] : 'Candra';
    $usia = isset($_GET['usia']) ? $_GET['usia'] : '20';

    echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";
?>
