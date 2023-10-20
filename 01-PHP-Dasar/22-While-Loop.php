<?php
    $counter1 = 1;
    while ($counter1 <= 10) {
        echo "ini adalah perulangan While ke-$counter1" . PHP_EOL;
        $counter1++;
    }

    // Cara lain
    $counter2 = 1;
    while ($counter2 <= 5) :
        echo "Ini adalah perulangan While ke-$counter2" .  PHP_EOL;
        $counter2++;
    endwhile;
?>