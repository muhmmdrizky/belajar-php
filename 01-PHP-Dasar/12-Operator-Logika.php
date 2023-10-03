<?php
    //Operator && - AND
    var_dump(true && true); //True
    var_dump(true && false); //False
    var_dump(false && false); // False
    echo "\n";

    //Operator || - OR
    var_dump(true || true); //True
    var_dump(true || false); //True
    var_dump(false || false); //False
    echo "\n";

    //Operator XOR (Salah satu true hasilnya true, kalo keduanya true atau keduanya false hasilnya false)
    var_dump(true xor true); //False
    var_dump(true xor false); //True
    var_dump(false xor false); //False
    echo "\n";

    //Operator NOT ! (Kebalikan)
    var_dump(!true); //False
    var_dump(!false); //True

?>