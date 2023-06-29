<?php

namespace Shop\States;

trait StateSubjectTrait
{
    /** @var IStateable $subject */
    private IStateable $subject;

    /**
     * @param IStateable $subject
     */
    public function __construct(IStateable $subject)
    {
        $this->subject = $subject;
    }
}
