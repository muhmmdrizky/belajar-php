<?php
    // Function Argument
    function penjumlahan($angkaPertama, $angkaKedua){
        $hasilPenjumlahan = $angkaPertama + $angkaKedua;
        echo "Hasil dari $angkaPertama + $angkaKedua = $hasilPenjumlahan" . PHP_EOL;
    }
    penjumlahan(5, 6);

    // Default Argument Value
    function dataMahasiswa($nama, $prodi = "No"){
        echo "Hello $nama, $prodi" . PHP_EOL;
    }
    dataMahasiswa("Muhammad Rizky", "Ekonomi");

    // Type declaration
    function sum(int $first, int $second){
        $total = $first + $second;
        echo "Total $first + $second = $total" . PHP_EOL;
    }
    sum(5, 5);
    sum("5", "6");
    sum(true, false);

    // Variable-length Argument List
    function sumAll(...$values){
        $total = 0;
        foreach ($values as $value){
            $total += $value;
        }
        echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
    }
    $values = [5, 5, 5];

    sumAll(5,5,5,5,5,5);
    sumAll(...$values);
?>