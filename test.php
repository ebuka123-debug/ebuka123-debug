<?php
$numbers = readline("enter a group of numbers to determine the highest and lowest numbers ");


$array = explode(",",$numbers);
$a = [];
foreach($array as $key => $value){
    if(!empty($value) && !ctype_space($value)){
        // echo $value.", ";
        if(!ctype_alnum($value) || !ctype_alpha($value)){
            $a[$key] = intval(trim($value));

        }
    }
}
var_dump($array);
var_dump($a);

// foreach($array as $key => $value){
//     if(trim($value) == empty($value)){
//         echo "yes";
//     }
    
// }
// var_dump($a);

echo "the maximum number of the number you inputed is ". max($a) . " and the minimum numbers is " . min($a);
// echo "yes"/1;

// id | news_content | news_title |