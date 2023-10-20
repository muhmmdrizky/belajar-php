<?php
    $number = [1, 2, 3, 4, 5, 6, 7, 8, 9];

    // array_map()
    $array_map = array_map(fn($number) => $number * 2, $number);
    var_dump($array_map);

    // rsort()
    var_dump(rsort($number));

    // shuffle()
    var_dump(shuffle($number));

    $students = [
        "name" => "Muhammad Rizky",
        "major" => "Economy"
    ];
    var_dump(array_keys($students));
    var_dump(array_values($students));
?>