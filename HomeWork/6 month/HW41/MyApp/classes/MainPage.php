<?php

namespace MyApp\classes;

use MyApp\classes\TimePage;
use MyApp\classes\WelcomePage;

class MainPage
{
    public function printHtml()
    {
        ?>
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
        </head>
        <body>
        <h1>Выбирите Действие</h1>
        <form>
            <input type="submit" name="main" value="Поздороваться"/>
            <input type="submit" name="main" value="Рассчитать будущее время?"/>
        </form>


        <?php

        if (!empty($_REQUEST["main"])) {
            $page = $_REQUEST["main"] !== 'Поздороваться' ? new TimePage() : new WelcomePage();
            $page->displayFirst();
            $page->displaySecond();
            $page->displayResult();
        } elseif (!empty($_REQUEST["name"])) {
            $page = new WelcomePage();
            $page->displayFirst();
            $page->displaySecond();
            $page->displayResult();
        } elseif (!empty($_REQUEST["seconds"])) {
            $page = new TimePage();
            $page->displayFirst();
            $page->displaySecond();
            $page->displayResult();
        }
        ?>
        </body>
        </html>
        <?php
    }
}