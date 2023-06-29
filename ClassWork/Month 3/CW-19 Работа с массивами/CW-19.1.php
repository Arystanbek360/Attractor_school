<?php
//============================array_merge()===============================
//$arr1 = ['apple' => 2, 'orange' => 4, 'banana' => 3,];
//$arr2 = ['cherry' => 2, 'apricot' => 4, 'pineapple' => 3,];
//$arr3 = ['candy' => 15, 'apple' => 1];
//
//$result = array_merge($arr1, $arr2, $arr3);
//var_export($result);


//============================Array_splice()=======================================

//$input = ['a', 'b', 'c', 'd', 'e'];
//$output = array_splice($input, 2, -1);
//var_export([$input, $output]);


//================================Array_slice=========================================

//$input = ['a', 'b', 'c', 'd', 'e', 't'];
//$output = array_slice($input, 2, 2, true);
//var_export([$input, $output]);

//===================================Explode========================================

$str = '2|4|6|7:34|32|65';
$array = explode(':', $str);
$str = implode('|', $array);
$result = explode('|', $str);

var_export($result);
