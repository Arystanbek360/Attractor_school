<?php


function change($val): void
{
    $pattern = '/(((http[s]{0,1}):\/\/)|(www.))?(([a-z\d\-]+)\.([a-z]{2,6}))/';
    if (preg_match($pattern, $val)) {
        exit('Вывод: 1');
    } else {
        exit('Вывод: 0');
    }
}

function openFile(): void
{
    $options = getopt('e:h', ['enter:', 'help']);

    if (isset($options['h']) || isset($options['help'])) {
        exit('  -e  --enter    Ввод для валидации
  -h  --help     помощь');
    }

    if (isset($options['e']) || isset($options['enter'])) {
        $val = $options['e'] ?? $options['enter'];
        change($val);
    }
}

openFile();