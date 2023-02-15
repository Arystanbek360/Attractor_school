<?php
$first = [];
$second = [];
$result = [];

function enter(string $string): string
{
    echo "Enter {$string} sentence:\n";
    $str = trim(fgets(STDIN));
    return $str;
}

function enteredNumber(): void
{
    global $first, $second;
    $one = enter("first");
    $two = enter("second");
    $first = explode(" ", $one);
    $second = explode(" ", $two);
}

function comparison()
{
    global $result, $first, $second;
    foreach ($first as $value) {
        foreach ($second as $item) {
            if ($value == $item) {
                $result[] = $item;
            }
        }
    }
}

function conclusion(): void
{
    global $result;
    enteredNumber();
    comparison();
    $result = $GLOBALS['result'];
    $conclusion = implode('","', $result);
    echo 'Similar words: "' . $conclusion . '"';
}

conclusion();