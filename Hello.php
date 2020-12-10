<?php

//тема "ТРЕЙТ"
trait Hello
{
    public function runHello()
    {
        echo $this->showExample() . ' this is run';
    }
}