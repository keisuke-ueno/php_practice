<?php

function sum($max){
    $result = 0;
    for($i = 1; $i <=$max; $i++){
        $result += $i;
    }
    return $result;
}
echo sum(10000) ."\n";

function print_number($max){
    $result = 0;
    for($i = 1; $i <= $max; $i++){
        $result += $i;
    }
    return  $result;
}
    echo print_number(10000) ."\n";

$string = "ABCDEFG";
echo strlen($string) . 
"\n";

$string = "I Love Ruby!";
$new_string = str_replace("Love","can",$string);
echo $new_string ."\n";

$array_test = array(1,3,5,7,9,);
echo count($array_test) ."\n";

$array = array(2,5,9,7,3,1,8,4,0);
asort($array);
print_r($array);

$array = array(1,8,9,4,3,6);
arsort($array);
print_r($array);

echo "課題１" ."\n";
function multiple($num){
    return $num * 2;
}
echo multiple(10);
echo "\n";

function kasan($a, $b){
    return $a + $b;
}
echo kasan(2,5) ."\n";

function kakezan($arr){
    $result = 1;
    foreach($arr as $a){
        $result *= $a;
    }
    echo $result;
}
kakezan(array(1,3,5,7,9));
echo "\n";


function kakezan2($num){
    return $num * $num;
}
echo kakezan2(4) ."\n";

function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
        return $max_number;
}
        echo max_array(array(12,35,544,7,93)) ."\n";
        