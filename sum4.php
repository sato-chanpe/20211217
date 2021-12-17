<?php

function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if ($max_number < $a){
            $max_number = $a;
        }
    }    
    return $max_number;        
}

echo max_array([1,3,5,7,9,100]);
echo "\n";