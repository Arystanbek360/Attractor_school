<?php
// $name = 'John';
// $pattern = "Hello %s\n Current data:%d %s %d";

// echo sprintf($pattern, $name, 15, 'november', 2022);

// echo sprintf("| %'.9d |\n", 123);
// echo sprintf("| %'.09d |\n", 123);


echo sprintf("| %-9s | %-9s | %-9s |\n", 'Position', 'Product', 'Amount');
echo sprintf("| %'.9d | %'.9s | %'.09d |\n", 1, 'Bread', 12);
echo sprintf("| %'.9d | %'.9s | %'.09d |\n", 1, 'Milk', 1);
echo sprintf("| %'.9d | %'.9s | %'.09d |\n", 1, 'Beerka', 128);
echo sprintf("| %'.9d | %'.9s | %'.09d |\n", 1, 'Pepsi cola', 3);


// (...[])-нужно для вызова оператора чтобы не писать в ручную через запятую,легче будет создать массив и в массив положить нужные элементы
//  \-нужно поставить перед $a (Знак экранирование) Пример: "Hello %2\$s Age: %1\$d[%1\$d]\n",10,"John",10]