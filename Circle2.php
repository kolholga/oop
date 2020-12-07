<?php


class Circle2 extends Point implements PointInterface //implements PointInterface  - подключили интерфейс
{
    private $r; //радиус

    public function __construct($x, $y, $r)
    {
        parent::__construct($x, $y);
        $this->r = $r;
    }

    public function show()
    {
        echo 'радиус = ' . $this->r;
    }

    public function area()
    {
        return PointInterface::PI * $this->r * $this->r; // PointInterface::PI - подключили константу из ИНТЕРФЕЙСА
    }

    public function perimeter()
    {
        return 2 * PointInterface::PI * $this->r;
    }
}