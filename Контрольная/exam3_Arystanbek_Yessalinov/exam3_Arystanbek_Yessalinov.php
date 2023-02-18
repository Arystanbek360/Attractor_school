<?php

function openFile(): void
{
    $options = getopt('f:h', ['file:', 'help']);

    if (isset($options['h']) || isset($options['help'])) {
        exit('  -f  --file    Для работы с предыдущими чеками Файыл должны указывать в формате "Example.json"!
  -h  --help     помощь');
    }

    if (isset($options['f']) || isset($options['file'])) {
        $enterName = $options['f'] ?? $options['file'];
        process($enterName);
    }
}

function process($enterName): void
{
    $check = getChecksData($enterName);
    $helps = getHelpsData();
    resultTotal($check);
    echo 'Добрый день! Вас приветствует Магазин.' . "\n\n";

    echo "Список товаров которые у вас в корзине:\n\n";
    renderList($check, true);

    while (true) {
        garbageCan($check);
        resultTotal($check);
        showChooseActions(array_keys($helps));
        $action = trim(fgets(STDIN));
        processAction($action, $helps, $check, $enterName);
    }
}

function getHelpsData(): array
{
    $helps = [];
    if (file_exists('help.json')) {
        $helps = file_get_contents('help.json');
        $helps = json_decode($helps, true);
    }
    return $helps;
}

function getChecksData($enterName): array
{
    $check = [];
    if (file_exists($enterName)) {
        $check = file_get_contents($enterName);
        $check = json_decode($check, true);
    }
    if (empty($check)) {
        return [];
    }
    return $check;
}

function resultTotal(array &$check): void
{
    for ($i = 0; $i < count($check); $i++) {
        $check[$i][3] = $check[$i][1] * $check[$i][2];
    }
}

function renderList(array &$data, bool $bool = false): void
{
    if (empty($data)) {
        echo "Список товаров пуст!\n\n";
        return;
    }

    foreach ($data as $key => $item) {
        if (empty($item[0] || empty($item[1]))) {
            unset($data[$key]);
        }
    }
    $line = sprintf("%'-22s-+-%'-6s-+%'-9s-\n", '', '', '');
    $result = getResultTotal($data);

    printf(" %-22s| %-6s | %9s\n%s",
        "Name", "Amount", "Price", $line);

    foreach ($data as $item) {
        printf(" %-22s| %6s | %9.2f\n", $item[0], $item[2], $item[3]);
    }
    printf($line);

    if ($bool == true) {
        printf(" %-22s  %-6s   %9.2f\n",
            "Total", "", $result);
    }
}

function getResultTotal(array $arr): int
{
    $total = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $total += $arr[$i][3];
    }
    return $total;
}

function showChooseActions(array $actions): void
{
    printf("\nСписок всех команд которые доступны (%s):", implode("|", $actions));
}

function processAction(string $action, array $helps, array &$check, string $enterName): void
{
    if (!array_key_exists($action, $helps)) {
        echo "Команда не найдена!\n";
        return;
    }
    switch ($action) {
        case'help':
            printHelp($helps);
            break;
        case'add':
            addProduct($check);
            break;
        case'edit':
            echo "Какой из товаров вы хотите изменить?\n\n";
            showListProduct($check);
            removeRemake($check, false);
            break;
        case'remove':
            echo "Какой из товаров вы хотите удалить?\n\n";
            showListProduct($check);
            removeRemake($check);
            break;
        case'view':
            echo "`Список товаров которые у вас хранятся:\n\n";
            renderList($check, true);
            break;
        case 'save':
            file_put_contents($enterName, json_encode($check));
            die("\nВозвращайтесь поскорее чтобы пополнить список ваших покупок!\n");
        default:
            echo "Команда не найдена\n";
            break;
    }
}

function showListProduct($check): void
{
    foreach ($check as $item) {
        if ($item == end($check)) {
            echo $item[0] . " .";
        } else {
            echo $item[0] . ", ";
        }
    }
}

function printHelp(array $arr): void
{
    echo "\n";
    $line = sprintf("%'-9s |%'-47s\n", "", "");
    echo $line;
    echo sprintf(" %-9s  |   %-47s\n", "Команда", "Что делает");
    echo $line;

    foreach ($arr as $key => $item) {
        echo sprintf("  %-7s |  %-45s\n", $key, $item);
        echo $line;
    }
}

function enterNumber(string $str)
{
    echo "Введите $str название товара: ";
    $name = ucfirst(strtolower(trim(fgets(STDIN))));
    echo "Введите $str цену товара: ";
    $number = trim(fgets(STDIN));
    echo "Введите $str количества товара: ";
    $many = trim(fgets(STDIN));

    if (preg_match('/^[\S]{2,22}/', $name) && preg_match('/^[\d.,]{1,6}/', $number) && preg_match('/^\d+/', $many)) {
        return [$name, $number, $many];
    }
    echo "Количество и Цена указывается в цифрах!\n";
}

function addProduct(array &$check, string $str = ''): void
{
    $arr = enterNumber($str);
    if (!empty($check) && !empty($arr)) {
        foreach ($check as $item) {
            foreach ($item as $value) {
                if ($arr[0] == $value) {
                    echo "Такой товар уже есть!\n";
                    return;
                }
            }
        }
    }
    if (empty($arr)) {
        echo "Пройзошли проблемы во время складывания продукта в корзину\n\n";
    } elseif (!empty($arr)) {
        echo "Товар успешно добавлен!\n";
        array_push($check, $arr);
    }
}

function removeRemake(array &$data, bool $bool = true): void
{
    echo "\nВведите название товара:";
    $name = ucfirst(strtolower(trim(fgets(STDIN))));

    if (!empty($data)) {

        foreach ($data as $i => $item) {
            if ($name == $item[0]) {
                if ($bool == true) {
                    unset($data[$i]);
                    echo "Товар успешно удалён!\n\n";
                    return;
                } elseif ($bool == false) {
                    $new = enterNumber('новое');
                    if (!empty($new)) {
                        $data[$i] = $new;
                        echo "Товар успешно обвновлен\n\n";
                        return;
                    }
                }
            }
        }
        echo "Товар не был найден!";
    }
}

function garbageCan(array &$arr): void
{
    foreach ($arr as $arrayKey => $value) {
        if (empty($value)) {
            unset($arr[$arrayKey]);
        }
    }
    $arr = array_values($arr);
}
