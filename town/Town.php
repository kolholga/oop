<?php

namespace town;

class Town
{
    public $name; //название города
    public $foundation; //год основания
    public $population; //численность населения

    public function __construct($name, $foundation, $population)
    {
        $this->name = $name;
        $this->foundation = $foundation;
        $this->population = $population;
    }
}