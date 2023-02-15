<?php

namespace task2\Action;

class WaitAndCrossIntersection implements IAction
{
    /** */
    public function CarAction(): void
    {
        echo "Стою на перекрестке,жду зеленый свет\n";
    }
}