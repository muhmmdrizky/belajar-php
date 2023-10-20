<?php
    // For each
    $names = ["Rizky", "Rony", "Nabila"];

    foreach ($names as $name){
        echo "Nama: $name " . PHP_EOL ;
    }

    // For each dengan value
    $students = [
        "name" => "Muhammad Rizky",
        "GPA" => 4.00,
        "major" => "Computer Science"
    ];
    foreach ($students as $key => $value){
        echo "$key : $value" . PHP_EOL;
    }
?>