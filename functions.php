<?php
call_user_func($_POST['function']);

function generateArray($positions = 10){
    $array = [];
    for ($i = 0; $i < $positions; $i++){ 
        $array[] = rand(0,10000);
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

function call_quicksort(){
    $results = array();
    $sizeArray = 50;
    $aux = 1;
    for ($i=0; $i < 6; $i++){ 
        if(!$aux){
            $sizeArray = $sizeArray*5;
            $aux++;            
        }else{
            $sizeArray = $sizeArray*2;
            $aux--;
        }
        $start = microtime(TRUE);
        $arr = generateArray($sizeArray);
        $quick = random_quicksort($arr);
        $end = microtime(TRUE);
        $results[$sizeArray] = array(
            'desordenado' => $arr,
            'ordenado' => $quick,
            'time' => $end - $start
        );
    }   
    
    echo json_encode($results);
}
