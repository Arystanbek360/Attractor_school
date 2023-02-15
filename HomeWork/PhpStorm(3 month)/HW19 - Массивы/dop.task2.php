<?php

function printCalendar(): void
{
    global $date;
    echo sprintf("\n %'=34s \n", "");
    echo " Пн | Вт | Ср | Чт | Пт | Сб | Вс |\n";
    echo " --   --   --    1    2    3    4 \n";
    for ($i = 8; $i < 29; $i += 7) {
        echo sprintf(" %2.0d   %2.0d   %2.0d   %2.0d   %2.0d   %2.0d   %2.0d \n", $i, $i + 1, $i + 2, $i + 3, $i + 4, $i + 5, $i + 6);
    }
    echo " 29   30   31   --   --   --   -- \n";
    echo sprintf(" %'=34s \n", "");
}

echo sprintf("\n%7s Календарь:Декабрь", "");
printCalendar();