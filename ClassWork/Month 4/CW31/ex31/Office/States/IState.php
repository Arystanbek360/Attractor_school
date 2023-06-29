<?php
namespace ex31\Office\States;

interface IState
{
    public function on();

    public function off();

    public function print();

    public function addPaper(int $count);
}