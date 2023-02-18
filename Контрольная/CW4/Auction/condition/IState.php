<?php

namespace CW4\Auction\condition;

interface IState
{
    /** @return string */
    public function raisePrice(): string;

    /** @return string */
    public function setUp(): string;

    /** @return string */
    public function giveToTheWinner(): string;

    /** @return string */
    public function withdrawSale(): string;
}