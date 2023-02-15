<?php

namespace task2\SodaMachine;

use task2\Exceptions\NotEnoughMoney;
use task2\Exceptions\NoSoda;
use task2\Exceptions\NotPaid;
use task2\Exceptions\MachineIsBroken;

class SodaMachine
{
    /** @var int */
    private $left_soda_portions = 2;
    private $portion_price = 3;
    private $is_broken = false;
    private $is_portion_paid = false;

    /**
     * @param $coins
     * @throws MachineIsBroken
     * @throws NotEnoughMoney
     */
    public function pay($coins)
    {
        if (!$this->is_broken) {
            $this->is_broken = rand(1, 5) == 5;
        }
        if ($this->is_broken) {
            throw new MachineIsBroken("The soda machine is broken");
        }
        if ($this->portion_price > $coins) {
            throw new NotEnoughMoney("Not enough money");
        }
        $this->is_portion_paid = true;
    }

    /**
     * @return string
     * @throws MachineIsBroken
     * @throws NoSoda
     * @throws NotPaid
     */
    public function getPortion()
    {
        if (!$this->is_broken) {
            $this->is_broken = rand(1, 5) == 5;
        }
        if ($this->is_broken) {
            throw new MachineIsBroken("The soda machine is broken");
        }
        if ($this->left_soda_portions == 0) {
            throw new NoSoda("Soda is no longer");
        }
        if (!$this->is_portion_paid) {
            throw new NotPaid("You have not paid for a soda");
        }
        $this->left_soda_portions--;
        return "Soda portion x1";
    }
}