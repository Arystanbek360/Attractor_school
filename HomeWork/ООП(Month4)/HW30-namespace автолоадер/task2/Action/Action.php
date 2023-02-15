<?php

namespace task2\Action;

use task2\Exceptions\MachineIsBroken;
use task2\Exceptions\NoSoda;
use task2\Exceptions\NotEnoughMoney;
use task2\Exceptions\NotPaid;
use task2\SodaMachine\SodaMachine;

class Action
{
    /** @var SodaMachine $sodaMachine */
    public SodaMachine $sodaMachine;

    /** @param int $actionKey */
    public function __construct(int $actionKey)
    {
        $this->sodaMachine = new SodaMachine();
        switch ($actionKey) {
            case 1:
                echo "Подхожу к первому аппарату\nПлочу одну монету\n";
                $this->actionKeyOne();
                break;
            case 2:
                echo "Подхожу ко второму аппарату\nПытаюсь получить газировку не заплатив\n";
                $this->actionKeyTwo();
                break;
            case 3:
                echo "Подхожу к третьему аппарату\n";
                $this->attemptBuy();
                break;
        }
    }

    /** void */
    private function buySoda(): void
    {
        try {
            $this->sodaMachine->pay(3);
            $this->sodaMachine->getPortion();
        } catch (\Exception $e) {
            if ($e instanceof NoSoda) {
                die("Газировка закончилась\nFinish\n");
            }
            if ($e instanceof MachineIsBroken) {
                die("Аппарат сломался\nFinish\n");
            }
        }
    }

    /** void */
    private function attemptBuy(): void
    {
        for ($i = 1; $i < 4; $i++) {
            echo "Пытаюсь купить $i газировку\n";
            $this->buySoda();
        }
    }

    /** void*/
    private function actionKeyTwo(): void
    {
        try {
            $this->sodaMachine->getPortion();
        } catch (\Exception $e) {
            if ($e instanceof NoSoda) {
                echo "Сода закончилась\n";
            }
            if ($e instanceof NotPaid) {
                echo "Не получилось получить газировку без оплаты\n";
            }
            if ($e instanceof MachineIsBroken) {
                echo "Аппарат сломался\n";
            }
        }
    }

    /** void */
    private function actionKeyOne(): void
    {
        try {
            $this->sodaMachine->pay(1);
        } catch (\Exception $e) {
            if ($e instanceof NotEnoughMoney) {
                echo "Не получилось оплатить меньше чем стоит газировка\n";
            }
            if ($e instanceof MachineIsBroken) {
                echo "Аппарат сломался\n";
            }
        }
    }
}

