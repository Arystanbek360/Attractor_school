<?php

namespace Hw42;

use PhoneBook\IView;

class View implements IView
{
    /**
     * @param Contact[] $contacts
     */
    public function display(array $contacts)
    {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Contact</title>
        </head>
        <body>

        <h1>Скрипт "Контакты"</h1>
        <form>
            <?php
            foreach ($contacts as $contact) {
                print $contact->toHtml();
            }
            ?>
            <input type="submit" value="Сохранить">
        </form>
        </body>
        </html>
        <?php
    }
}