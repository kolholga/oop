<?php


class Rectangle2 extends Point implements PointInterface // implements PointInterface  - подключили интерфейс
{
    private $w; //ширина
    private $h; //высота

    public function __construct($x, $y, $w, $h)
    {
        parent::__construct($x, $y);
        $this->w = $w;
        $this->h = $h;
    }

    public function show()
    {
        echo 'ширина = ' . $this->w . ' высота = ' . $this->h;
    }

    public function area()
    {
        return $this->h * $this->w;
    }

    public function perimeter()
    {
        return ($this->w + $this->h) * 2;
    }
}