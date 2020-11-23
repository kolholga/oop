<?php

//создать класс Circle
//св-во radius задать через конструктор
//сделать геттер и сеттер для св-ва
//написать метод getArea() - площадь окружности $r * $r * 3.14
class Circle
{
    private $radius;

    public function __construct($r)
    {
        $this->radius = $r;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        echo $this->getRadius() * $this->getRadius() * 3.14;
    }
}

$obj = new Circle(6);
$obj->setRadius(5);
$obj->getArea();

