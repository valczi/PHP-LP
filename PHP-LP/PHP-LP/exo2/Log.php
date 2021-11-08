<?php

class Log
{
    public static function __callStatic(string $name, array $args): void
    {
        echo '<pre>';print_r("[".$name."]");print_r(" ".$args[0]);
    }
}