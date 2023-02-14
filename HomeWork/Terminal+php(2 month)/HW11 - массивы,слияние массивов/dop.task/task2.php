<?php

$arr = ['fst' => 1, 'snd' => 2, 'thd' => 3, 'fth' => 4];
$IndexArr = array_keys($arr);

$arr1 = array("primer", 18, "value", true);
$result = array_combine($IndexArr, $arr1);

echo "Я немного не понял что нужно было сделать и чтобы не было ошибкой сделал то и то";

echo "\n1)Если нужно было сделать массив с элементами которые были ключами:\n [";
echo  var_export(implode(",", $IndexArr)) . "]";

echo "\n2)Если нужно было сделать массив с такими же ключами: \n";
var_export($result);
