<?php


abstract class Point
{
    protected $x;
    protected $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function show()
    {
        echo 'x = ' . $this->x . ' y = ' . $this->y;
    }

    /*
    public function area()
    {
        return 0;
    }
    */
    abstract public function area(); //АБСТРАКТНЫЙ метод

    /*
    public function perimeter()
    {
        return 0;
    }
    */
    abstract public function perimeter(); //АБСТРАКТНЫЙ метод
}