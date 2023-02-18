<?php

namespace Pet;

use Pet\Cat\Form\Model;
use Pet\ToHtml\ToHtml;

spl_autoload_register(function ($class_name) {
    include str_replace('\\', '/', __DIR__ . '/../' . $class_name . '.php');
});

$model = new Model();
$model->load();
$html = new ToHtml();
if (empty($_POST)) {
    $template = file_get_contents('pageTemplate.html');
    print $template;
} else {
    switch (key($_POST)) {
        case "call":
            $html->getTemplate($model->cat, $model->cat->call());
            $model->store($model->cat);
            break;
        case "showCucumber":
            $html->getTemplate($model->cat, $model->cat->showCucumber());
            $model->store($model->cat);
            break;
        case "writingFood":
            $html->getTemplate($model->cat, $model->cat->writingFood());
            $model->store($model->cat);
            break;
        case "giveARest":
            $html->getTemplate($model->cat, $model->cat->giveARest());
            $model->store($model->cat);
            break;
        case "playALittle":
            $html->getTemplate($model->cat, $model->cat->playALittle());
            $model->store($model->cat);
            break;
    }
}
