<?php
    $values = array(1, 2, 3, 4, 5);
    var_dump($values);

    $names = ["Rizky", "Rony", "Ahsan", 50, 60, true];
    var_dump($names);

    // Mengakses data array dengan index tertentu
    var_dump($names[0]);

    echo "\n";

    //mengubah data array
    $names[0] = "Hendra";

    var_dump($names);

    //menambah data array pada posisi paling belakang
    $names[] = "Parulian";

    var_dump($names);

    //menghapus data array
    unset($names[3]);
    var_dump($names);

    //mengambil total data di array
    var_dump(count($names));
?>