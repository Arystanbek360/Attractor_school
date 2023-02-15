<?php

function change($val): void
{
    $pattern1 = '/^\d*[02468]$/';
    $pattern2 = '/^\d*[2468]$/';
    $pattern = '/^\d{2,}$/';
    if (preg_match($pattern, $val)) {
        if (preg_match($pattern1, $val)) {
            exit('Вывод: 1');
        } else {
            exit('Вывод: 0');
        }
    } else {
        if (preg_match($pattern2, $val)) {
            exit('Вывод: 1');
        } else {
            exit('Вывод: 0');
        }
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