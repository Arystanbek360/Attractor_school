<?php

$arr = ['fst', 'snd', 'thd', 'fth', 'snd', 'thd'];
$IndexArr = array_unique($arr);

echo "\n[";
var_export(implode(",", $IndexArr));
echo "]";
