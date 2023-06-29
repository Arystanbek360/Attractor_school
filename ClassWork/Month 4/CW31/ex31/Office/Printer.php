<?php
namespace ex31\Office;

use ex31\Office\States\IState;
use ex31\Office\States\PaperOffState;
use ex31\Office\States\PowerOffState;
use ex31\Office\States\WaitingState;

class Printer
{
    /**
     * @var IState
     */
    public $state;
    public $count_paper = 0;

    public $PaperOffState;
    public $PowerOffState;
    public $WaitingState;

    public function __construct()
    {
        $this->PowerOffState = new PowerOffState($this);
        $this->PaperOffState = new PaperOffState($this);
        $this->WaitingState = new WaitingState($this);

        if ($this->count_paper > 0) {
            $this->state = $this->WaitingState;
        } else {
            $this->state = $this->PaperOffState;
        }
    }

    public function setState(IState $state)
    {
        $this->state = $state;
    }

    public function printDocument()
    {
        $this->state->print();
    }

    public function powerOff()
    {
        $this->state->off();
    }

    public function powerOn()
    {
        $this->state->on();
    }

    public function addPaper(int $count): void
    {
        $this->state->addPaper($count);
    }
}