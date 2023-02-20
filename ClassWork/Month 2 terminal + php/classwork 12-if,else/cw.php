<?php

echo "enter first value: ";
$valOne = trim(fgets(STDIN));

echo "enter second value: ";
$valTwo = trim(fgets(STDIN));

if ($valOne > $valTwo) {
    echo $valOne . ">" . $valTwo;
} elseif ($valOne < $valTwo) {
    echo $valOne . "<" . $valTwo;
} else {
    echo $valOne . "=" . $valTwo;
}
echo "\nEnd programm.\n";


$result = ($valone > 0 && $valOne % 2 === 0)($valOne == 0 ? "is 0" : "is_false");
// float,bool;
// первыми берет только цифры потом буквы после букв он не видит цифры is_int($valOne);
// intval,boolval - присвоение цифр в воде или типа того
// почитать в пхп сайте number_format
// in_numeric


//if (is_int($valOne) && is_int($valTwo) && ($valOne > $valTwo){
    // echo $valOne . ">" . $valTwo;
// }


// Для проверки
// ?? подбирает слудующие значение
// ?: подбирает следующие значение где именно есть правда
die
