<?php

//тема "ТРЕЙТ"
class Example
{
    use Hello; // подключаем ТРЕЙТ Hello

    public function showExample()
    {
        return 'show';
    }

    public function __toString()
    {
        return 'Нельзя так делать';
    }

    public function __get($name)
    {
        return 'error';
    }
}