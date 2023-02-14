<?php

echo ("Enter dividend:");
$first = (fgets(STDIN));

echo ("Enter divisor: ");
$second = (fgets(STDIN));

$float  = is_int($first / $second);

echo ("And is there a remainder of the division? -");

if ($float == true) :
    echo "false";
elseif ($float == false) :
    echo "true";
endif;
