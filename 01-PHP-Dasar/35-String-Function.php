<?php
    /*
        - join() / implode() : Untuk menggabungkan array menjadi string
        - explode() : Untuk memecah string menjadi array
        - strtolower() : Untuk mengubah string menjadi lowecase
        - strtoupper() : Untuk mengubah string menjadi uppercase
        - substr() : Untuk mengambil sebagian string
        - trim() : Untuk menghapus whitespace di depan dan belakang string
    */

    var_dump(join(",", [1, 2, 3, 4, 5]));
    var_dump(explode(" ", "Muhammad Rizky"));
    var_dump(strtolower("MUHAMMAD RIZKY"));
    var_dump(strtoupper("muhammad rizky"));
    var_dump(substr("Muhammad Rizky", 0, 5));
    var_dump(trim("     Rizky     "));
?>