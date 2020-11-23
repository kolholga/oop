<?php


class Car // класс - шаблон
{
    private $type; //свойство

    public function __construct($t = 0) // КОНСТРУКТОР
    {
        $this->type = $t;
    }

    public function getCategory()
    {
        if ($this->type == 1) {
            return 'B';
        } elseif ($this->type == 2) {
            return 'C';
        } else {
            return 'Вы указали не верный тип';
        }
    }
}

$obj = new Car(2);

//var_dump($obj);
echo 'Права категории ' . $obj->getCategory();



