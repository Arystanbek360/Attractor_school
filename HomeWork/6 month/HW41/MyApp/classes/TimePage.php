<?php

namespace MyApp\classes;

use FutureTime\Page;

class TimePage extends Page implements IPage
{
    public function displayFirst()
    {
        $this->displayHeader();
    }

    public function displaySecond()
    {
        $this->displayForm();
    }

    public function displayResult()
    {
        $this->displayFutureTime();
    }
}