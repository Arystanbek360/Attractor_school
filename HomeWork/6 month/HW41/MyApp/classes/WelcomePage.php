<?php

namespace MyApp\classes;

class WelcomePage implements IPage
{
    public function displayFirst()
    {
        ?>
        <h1>Здоровающаяся форма)</h1>
        <?php
    }

    public function displaySecond()
    {
        ?>
        <form action="">
            <label for="name">С кем мне поздароваться?</label>
            <input type="text" name="name" id="name" value="<?php echo $_REQUEST["name"] ?? "" ?>"/>

            <input type="submit" name="Отправить запрос"/>
        </form>
        <?php
    }

    public function displayResult()
    {
        if (!empty($_REQUEST["name"])) {
            $name = $_REQUEST["name"];
            print "как и обещал здороваюсь))<br >
            Приветствую тебя!О повелитель WEB разработки " . $name;
        }
    }
}