<?php
    $counter = 1;

     while(true){
        echo "Hello break : " . $counter . PHP_EOL;
        $counter++;

        if($counter > 10){
            break;
        }
     }
?>