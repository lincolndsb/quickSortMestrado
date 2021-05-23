<?php
call_user_func($_POST['function']);

function generateArray($positions = 10){
    $array = [];
    for ($i = 0; $i < $positions; $i++){ 
        $array[] = rand(0,100);
    }
    return $array;
}

function random_quicksort($array){
    if (empty($array)){
        return $array;
    }
    $pivot = $array[0];
    $left = $right = array();
    for ($i = 1; $i < count($array); $i++){
        if ($array[$i] < $pivot){
            $left[] = $array[$i];
        }else{
            $right[] = $array[$i];
        }
    }
    $merged = array_merge(random_quicksort($left), array($pivot), random_quicksort($right));
    return $merged;
}

function call_quicksort($positions = 10){
    $results = array();
    $arr = generateArray($positions);
    $results['desordenado'] = $arr;
    $results['ordenado'] = random_quicksort($arr);
    echo json_encode($results);
}
