<?php

namespace task1\Cat\condition;


interface IConditions
{
    /** */
    public function showCucumber(): void;

    /** */
    public function writingFood(): void;

    /** */
    public function giveARest(): void;

    /** */
    public function playALittle(): void;

    /** */
    public function call(): void;
}