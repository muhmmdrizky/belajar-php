<?php
    for($counter = 1; $counter <= 5; $counter++){
        echo "Nilai ke- $counter" . PHP_EOL;
    }

    for($counter = 5; $counter >= 1; $counter--){
        echo "Nilai ke- $counter" . PHP_EOL;
    }

    for($counter = 1; $counter <= 5; $counter++):
        echo "Nilai ke- $counter" . PHP_EOL;
    endfor;

    for($counter = 5; $counter >= 1; $counter--):
        echo "Nilai ke- $counter" . PHP_EOL;
    endfor;


    for($x = 1; $x <= 10; $x++){
        if ($x < 10){
            echo "$x-";
        } else {
            echo "$x" . PHP_EOL;
        }
    }
?>