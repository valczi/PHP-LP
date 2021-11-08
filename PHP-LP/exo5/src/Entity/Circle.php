<?php

namespace App\Entity;

class Rectangle extends Shape
{
    
    protected int $radius;
    
    public function isFilled():bool{
        return $this->filled;
    }

    public function setFilled(bool $filled){
        $this->filled=$filled;
    }

    public function getBackgroundColor():string{
        return $this->backgroundColor;
    }

    public function setBackgroundCOlor(string $color){
        $this->backgroundColor=$color;
    }

    public function draw():void{

    }

}
