<?php

namespace CW32\State;

use CW32\State\IState;

interface IStateable
{
    /**
     * @param IState $state
     * @return mixed
     */
    public function setState(IState $state);

}