<?php

namespace CW32\State;

use CW32\State\IStateable;

trait StateSubjectTrait
{
    private IStateable $subject;

    public function __construct(IStateable $subject)
    {
        $this->subject = $subject;
    }
}