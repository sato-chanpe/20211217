<?php

function multi($arr){
    $result = 1;
    foreach ($arr as $num){
        $result = $num * $result;
    }
    return $result;
}

echo multi([1, 3, 5, 7, 9]);
echo "\n";