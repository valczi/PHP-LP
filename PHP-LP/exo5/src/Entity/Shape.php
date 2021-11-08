<?php

namespace App\Entity;

use App\contract\drawShape;

abstract class Shape implements drawShape
{

    protected bool $filled;

    protected string $backgroundColor;

    public abstract function draw():void;

    abstract public function isFilled():bool;

    abstract public function setFilled(bool $filled);

    abstract public function getBackgroundColor():string;

    abstract public function setBackgroundCOlor(string $color);


}
