<?php


class Circle2 extends Point
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
        return 3.14 * $this->r * $this->r;
    }

    public function perimeter()
    {
        return 2 * 3.14 * $this->r;
    }
}