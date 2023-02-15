<?php

function change($val): void
{
    $pattern = '/(?<!\*)\*(?!\*)/';
    $text = preg_replace($pattern, '!', $val);
    exit('Вывод: ' . $text);
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