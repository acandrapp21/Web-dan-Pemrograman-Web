<!DOCTYPE HTML>
<html>
    <head>
    </head>
    <body>
        <h1>Data Mahasiswa Array Multidimensi</h1>
        <ul>
            <?php 
                $Mahasiswa = array(
                    array("Arieya", 2341223, "TI", "arieya@example.com"),
                    array("candra", 2345923, "Kimia", "candra@example.com"),
                    array("Pangestu", 2345123, "Sipil", "pangestu@example.com")
                );

                foreach ($Mahasiswa as $data) {
                    echo "<li> Nama: $data[0]</li>"; 
                    echo "<li> NIM: $data[1]</li>";
                    echo "<li> Jurusan: $data[2]</li>";
                    echo "<li> Email: $data[3]</li><br>";
                }
            ?>
        </ul>
    </body>
</html>