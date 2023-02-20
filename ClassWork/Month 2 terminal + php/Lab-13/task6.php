<?php
$Radius = [12, 35, 4];
$Square = [];
$Pi = 3.14;

for ($i = 0; $i < 3; $i++) {
    $Square[$i] = $Pi * pow($Radius[$i], 2);
}

var_export($Square);
