<?php

// find the peak element in the array
function findPeak($arr, $n)
{
    // First or last element is peak element
    if ($n == 1) return 0;
    if ($arr[0] >= $arr[1]) return 0;
    if ($arr[$n - 1] >= $arr[$n - 2]) return $n - 1;

    // Check for every other element
    for ($i = 1; $i < $n - 1; $i++) 
    {

    // Check if the neighbors are smaller
    if($arr[$i] >= $arr[$i - 1] && $arr[$i] >= $arr[$i + 1]) return $i;
    }
}

$arr = [1, 3, 20, 4, 1, 0];
$n = count($arr);
echo "Index of a peak point is " . findPeak($arr, $n);
?>