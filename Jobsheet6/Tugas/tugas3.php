<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="styletugas3.css"/>
    <link rel="stylesheet" type="text/css" href="styleSlide.css">
    <script src="jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function() {
            $("#flip").click(function() {
                $("#dataTable").slideToggle("slow");x
                $("#rataRataUmur").slideToggle("slow");
            });
        });
    </script>
</head>
<body>
    <h2>Data Siswa</h2>
    <div id="flip" style="cursor: pointer;">Klik untuk melihat data siswa</div>
    <div id="dataTable" style="display: none;">
        <table>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Kelas</th>
                <th>Alamat</th>
            </tr>
            <?php 
                $Mahasiswa = array(
                    array("Arieya", 16, "2F", "Probolinggo"),
                    array("Candra", 17, "2D", "Magetan"),
                    array("Pangestu", 18, "2A", "Surabaya"),
                    array("Can", 19, "2E", "Malang"),
                    array("Arya", 20, "2H", "Jakarta")
                );

                function hitungRataRataUmur($data) {
                    $totalUmur = 0;
                    $jumlahSiswa = count($data);

                    foreach ($data as $siswa) {
                        $totalUmur += $siswa[1]; 
                    }

                    return $jumlahSiswa > 0 ? $totalUmur / $jumlahSiswa : 0; 
                }

                foreach ($Mahasiswa as $siswa) {
                    echo "<tr>";
                    echo "<td>" . $siswa[0] . "</td>";
                    echo "<td>" . $siswa[1] . "</td>";
                    echo "<td>" . $siswa[2] . "</td>";
                    echo "<td>" . $siswa[3] . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>

    <div id="rataRataUmur" style="display: none;">
        <h3>Rata-rata Umur Siswa: <?php echo hitungRataRataUmur($Mahasiswa); ?> tahun</h3>
    </div>
</body>
</html>