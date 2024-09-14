<?php

function remove_duplicates($arr){
    $temarr = [];

    if(count($arr)==0){
        return "Empty Array";
    }
    $updatedarr = $arr;
    for($i=0;$i<count($arr); $i++){

        for($j=0;$j<count($temarr);$j++){
            if($temarr[$j]==$arr[$i]){
                array_splice($arr, $i, 1);
            }
        }

        $temarr[] = $arr[$i];
    }
    return $arr;
}

$arr = [4, 3, 3, 19, 4, 5, 5, 6, 2, 3, 19];

print_r(remove_duplicates($arr));