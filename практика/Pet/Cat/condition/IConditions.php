<?php

namespace Pet\Cat\condition;


interface IConditions
{
    /** */
    public function showCucumber(): string;

    /** */
    public function writingFood(): string;

    /** */
    public function giveARest(): string;

    /** */
    public function playALittle(): string;

    /** */
    public function call(): string;
}