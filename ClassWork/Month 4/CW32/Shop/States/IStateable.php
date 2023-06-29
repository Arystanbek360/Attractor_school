<?php

namespace Shop\States;

interface IStateable
{
    /**
     * @param IState $state
     * @return void
     */
    public function setState(IState $state): void;
}
