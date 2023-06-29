<?php
namespace ex31\Office\States;

class PaperOffState implements IState
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
        print "Бумаги нет, печатать не буду\n";
    }

    public function addPaper(int $count)
    {
        if ($count <= 0) {
            throw new \Exception("Добавить можно только положительное число листов бумаги");
        }
        print "Добавляем бумагу\n";
        $this->printer->count_paper += $count;
        $this->printer->setState($this->printer->WaitingState);
    }
}