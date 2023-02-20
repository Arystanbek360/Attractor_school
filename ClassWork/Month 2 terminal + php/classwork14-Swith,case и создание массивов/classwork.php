<?php
$counter = 0;

// function increment(int $counter): void
// {
//     echo "inner func {$counter}\n";
//     $counter++;
//     echo "inner func {$counter}\n";
// }

// increment($counter);

// echo "{$counter}\n";

// function incrementGlobalValue(): void
// {
//     $GLOBALS['counter']++;
//     echo "inner func {$GLOBALS['$counter']}\n";
// }

// incrementGlobalValue();
// incrementGlobalValue();
// incrementGlobalValue();

// echo "{$GLOBALS['$counter']}\n";

// var_dump([$counter, $counter++, ++$counter, $counter]);
// & обращение по ссылке
// возврат-return;void-без возврата

// function increment(?int $value): ?int
// {
//     if (rand(0, 5) > 2) {
//         return ++$value;
//     }
//     return null;
// }


// $counter = increment(null);
// $counter = increment($counter);
// $counter = increment($counter);
// $counter = increment($counter);

// var_export($counter);


function someFunc(int $c, ?int $id = 0,  ?array $filter = []): void
{
}

someFunc(2, null);
// все обезательные параметры должны стоять вначале потом все не обезательные парматеры стоят после