<?php

echo 'Enter grade for Jake:';
$Jake =  (fgets(STDIN));

echo 'Enter grade for John:';
$John =  (fgets(STDIN));

echo 'Enter grade for Jack:';
$Jack =  (fgets(STDIN));

echo 'Enter grade for Jane:';
$Jane =  (fgets(STDIN));

echo "Mean for grades: ";
echo $avr = (ceil(($Jake + $John + $Jack + $Jane) / 4));
