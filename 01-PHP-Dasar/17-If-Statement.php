<?php
    $nilai = 50;
    $kehadiran = 50;

    if($nilai >= 80 && $kehadiran >= 80){
        echo "Nilai Anda A" . PHP_EOL;
    } else if ($nilai >= 70 && $kehadiran >= 70){
        echo "Nilai Anda B" . PHP_EOL;
    } else if ($nilai >= 60 && $kehadiran >= 60){
        echo "Nilai Anda C" . PHP_EOL;
    } else if ($nilai >= 50 && $kehadiran >= 50){
        echo "Nilai Anda D" . PHP_EOL;
    } else {
        echo "Nilai Anda E" . PHP_EOL;
    }

    // If Statement With Colon
    if($nilai >= 80 && $kehadiran >= 80):
        echo "Nilai Anda A" . PHP_EOL;
    elseif ($nilai >= 70 && $kehadiran >= 70):
        echo "Nilai Anda B" . PHP_EOL;
    else:
        echo "Nilai Anda C" . PHP_EOL;
    endif;
?>