<?php
namespace ex31\Office\States;

class WaitingState implements IState
{
    private $printer;

    public function __construct(\ex31\Office\Printer $printer)
    {
        $this->printer = $printer;
    }

    public function on()
    {
        print "Я и так уже включен\n";
    }

    public function off()
    {
        print "Я выключаюсь...\n";
        $this->printer->setState($this->printer->PowerOffState);
    }

    public function print()
    {
        print "Сейчас всё распечатаем! Идет печать...\n";
        $this->printer->count_paper --;

        if ($this->printer->count_paper == 0) {
            $this->printer->setState($this->printer->PaperOffState);
        }
    }

    public function addPaper(int $count)
    {
        if ($count <= 0) {
            throw new \Exception("Добавить можно только положительное число листов бумаги");
        }
        $this->printer->count_paper += $count;
        print "Бумага добавлена\n";
    }
}