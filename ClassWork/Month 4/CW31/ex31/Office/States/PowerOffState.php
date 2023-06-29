<?php
namespace ex31\Office\States;

class PowerOffState implements \ex31\Office\States\IState
{
    /**
     * @var \ex31\Office\Printer
     */
    private $printer;

    public function __construct(\ex31\Office\Printer $printer)
    {
        $this->printer = $printer;
    }

    public function on()
    {
        print "Я включен\n";
        if ($this->printer->count_paper > 0) {
            print "Готов к печати!\n";
            $this->printer->setState($this->printer->WaitingState);
        } else {
            print "Бумага кончилась, хозяин!";
            $this->printer->setState($this->printer->PaperOffState);
        }
    }

    public function off()
    {
        print "Я не могу выключиться еще больше\n";
    }

    public function print()
    {
        print "Печатать не буду - я выключен\n";
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