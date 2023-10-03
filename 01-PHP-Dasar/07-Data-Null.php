<?php
    $name = NULL;

    echo "Nama: $name";
    echo "\n";
    echo "is name null? ";
    $cekdata = is_null($name);
    var_dump($cekdata);

    //cek apakah variabel ada atau tidak
    echo "\n";
    $usia = 55;
    var_dump(isset($usia));

    echo "\n";

    //hapus variabel
    $kelas = 4;
    unset($kelas);
    var_dump(isset($kelas));
?>