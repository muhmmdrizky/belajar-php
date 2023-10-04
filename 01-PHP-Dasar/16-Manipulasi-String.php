<?php
    // Dot (titik) operator
    $name = "Muhammad Rizky";
    echo "Nama: " . $name . PHP_EOL;
    echo "Nilai: " . 100 . PHP_EOL;

    //KONVERSI TIPE DATA

    //Number to String
    $valueString = (string)100;
    var_dump($valueString);

    //String to Number
    $valueInt = (int)"100";
    var_dump($valueInt);

    //String to Float
    $valueFloat = (float)"55.55";
    var_dump($valueFloat);

    //Mengakses Karakter
    $fullName = "Muhammad Rizky";
    echo $fullName[4] . PHP_EOL;
    echo $fullName[5] . PHP_EOL;

    //Variable Parsing
    $firstName = "Muhammad";
    echo "Hello, $firstName, selamat datang!" . PHP_EOL;

    //Curly Brace
    $car = "car";
    echo "These are {$car}s" . PHP_EOL;
?>