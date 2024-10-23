<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styletugas2.css"/>
    </head>
    <body>
        <h2>Data Siswa</h2>
       
        <a class="show-database" href="#" onclick="toggleDatabase()">Click to Show Database</a>

        <table>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Kelas</th>
                <th>Alamat</th>
            </tr>
            <?php 
                $movie = array(
                    array("Arieya", 15, "2F", "Probolinggo"),
                    array("Candra", 16, "2D", "Magetan"),
                    array("Pangestu", 15, "2A", "Surabaya"),
                    array("Can", 25, "2E", "Malang"),
                );

                function hitungRataRataUmur($data) {
                    $totalUmur = 0;
                    $jumlahSiswa = count($data);

                    foreach ($data as $siswa) {
                        $totalUmur += $siswa[1]; 
                    }

                    return $jumlahSiswa > 0 ? $totalUmur / $jumlahSiswa : 0; 
                }

                foreach ($movie as $siswa) {
                    echo "<tr>";
                    echo "<td>" . $siswa[0] . "</td>";
                    echo "<td>" . $siswa[1] . "</td>";
                    echo "<td>" . $siswa[2] . "</td>";
                    echo "<td>" . $siswa[3] . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>

        <!-- Rata-rata umur siswa -->
        <h3>Rata-rata Umur Siswa: <?php echo hitungRataRataUmur($movie); ?> tahun</h3>
    </body>
</html>
