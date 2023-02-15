<?php

namespace task2\TrafficLight;
class TrafficLight
{
    /** @var string $state*/
    public string $state;

    /** */
    public function __construct()
    {
        if (rand(0, 1) !== 1) {
            $light = "green";
        } else {
            $light = "red";
        }
        $this->state = $light;
    }
}