<?php

function change($val): void
{
    $pattern = '/^([\d]*)(?<first>[a-zA-Z]+)\@(?<second>[a-zA-Z]+)([\d]*)$/';
    $replace = '$1$3@$2$4';
    $change = preg_replace($pattern, $replace, $val);
    echo $change;
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