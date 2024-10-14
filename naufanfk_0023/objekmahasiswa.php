<?php
    require_once "mahasiswa.php";
    
    $mahasiswa1 = new mahasiswa("Naufan","23.230.0023","3P52");

    $mahasiswa1->nama = "Naufan";
    $mahasiswa1->nim = "23.230.0023";
    $mahasiswa1->kelas = "3P52";

    echo "NAMA : $mahasiswa1->nama <br>";
    echo "NIM : $mahasiswa1->nim <br>";
    echo "KELAS : $mahasiswa1->kelas <br>";
    echo $mahasiswa1->infomahasiswa();
    echo "<br>";
    var_dump($mahasiswa1);

    echo "<br>";
    
    $mahasiswa2 = new mahasiswa("Faikar","23.230.0023","3P52");

    $mahasiswa2->nama = "Faikar";
    $mahasiswa2->nim = "23.230.0023";
    $mahasiswa2->kelas = "3P52";

    echo "NAMA : $mahasiswa2->nama <br>";
    echo "NIM : $mahasiswa2->nim <br>";
    echo "KELAS : $mahasiswa2->kelas <br>";
    echo $mahasiswa2->infomahasiswa();
    echo "<br>";
    var_dump($mahasiswa2);
?>