<?php
    $students = array(
        "id" => 1234,
        "name" => "Muhammad Rizky",
        "major" => "Computer Science"
    );
    var_dump($students);

    // Memanggil data tertentu
    var_dump($students["id"]);

    $drinks = [
        "id_drink" => "ABC",
        "brand" => "Indomilk",
        "price" => 10000
    ];
    var_dump($drinks);

    //array dalam array
    $employee = [
        "id" => "EMP",
        "name" => "Muhammad Rony",
        "address" => [
            "city" => "Jakarta",
            "country" => "Indonesia"
        ]
    ];
    var_dump($employee);
    var_dump($employee["address"]["country"]);

?>