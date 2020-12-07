<?php


class Label extends Input
{
    private $for;

    public function __construct($background, $width, $height, $name, $value, $forObject)
    {
        $this->setBackground($background);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setName($name);
        $this->setValue($value);
        $this->for = $forObject;
    }


    public function getParentName()
    {
        return $this->for;
    }

    public function setParentName($obj)
    {
        $this->for = $obj->getName();
    }

    public function convertToHTML()
    {
        //шаблон
        //<label><input type="..."> Текст</label>
        $str = '';

        $str .= '<label>';
        $str .= $this->for;
        $str .= '</label>';

        return $str;
    }
}