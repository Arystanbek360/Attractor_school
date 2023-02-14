<?php
echo 'Enter your name:';
$name = ucfirst(strtolower(trim(fgets(STDIN))));

echo 'Enter your lastname:';
$lastname = ucfirst(strtolower(trim(fgets(STDIN))));
$allname = ($name . " " . $lastname);

echo 'When were you born?';
$year =  trim(fgets(STDIN));
$age =  (2022 - $year);

echo 'Where are you from?';
$from = ucfirst(strtolower(trim(fgets(STDIN))));

echo ("Hello," . $allname . ".You are $age years old. You are living in $from");
