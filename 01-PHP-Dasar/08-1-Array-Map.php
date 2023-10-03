<?php
    $students = array(
        "id" => 1234,
        "name" => "Muhammad Rizky",
        "major" => "Computer Science"
    );
    var_dump($students);

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