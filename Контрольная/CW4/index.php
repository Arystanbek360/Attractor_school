<?php

namespace CW4;

use CW4\Auction\Model;
use CW4\ToHtml\ToHtml;

spl_autoload_register(function ($class_name) {
    include str_replace('\\', '/', __DIR__ . '/../' . $class_name . '.php');
});

$model = new Model();
$model->getProducts();
$html = new ToHtml();
if (empty($_POST)) {
    $str = $html->getTemplate($model->products);
    $html->printHtml($str);
} else {
    $key = key($_POST);
    switch ($_POST[$key]) {
        case 1:
            $message = $model->products[key($_POST)]->setUp();
            $str = $html->getTemplate($model->products);
            $html->printHtml($str, $message);
            $model->writeToFile();
            break;
        case 2:
            $message = $model->products[key($_POST)]->raisePrice();
            $str = $html->getTemplate($model->products);
            $html->printHtml($str, $message);
            $model->writeToFile();
            break;
        case 3:
            $message = $model->products[key($_POST)]->withdrawSale();
            $str = $html->getTemplate($model->products);
            $html->printHtml($str, $message);
            $model->writeToFile();
            break;
        case 4:
            $message = $model->products[key($_POST)]->giveToTheWinner();
            $str = $html->getTemplate($model->products);
            $html->printHtml($str, $message);
            $model->writeToFile();
            break;
    }
}