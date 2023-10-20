<?php
    function sayHello(){
        echo "Hello hello" . PHP_EOL;
    }
    sayHello();

    // ---------------------------

    $buatFunction = true;

    if($buatFunction){
        function hallo(){
            echo "Selamat datang" . PHP_EOL;
        }
    }
    hallo();

    // ---------------------------
    function perkalian($angkaPertama, $angkaKedua){
        $hasil = $angkaPertama * $angkaKedua;
        echo "Hasil dari $angkaPertama * $angkaKedua adalah: $hasil";
    }
    perkalian(5, 6);
?>