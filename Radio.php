<?php


class Radio extends Input
{
    private $isChecked;

    public function __construct($background, $width, $height, $name, $value, $isChecked)
    {
        $this->setBackground($background);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setName($name);
        $this->setValue($value);
        $this->isChecked = $isChecked;
    }

    public function getCheckedState()
    {
        return $this->isChecked;
    }

    public function setCheckedState($isChecked)
    {
        $this->isChecked = $isChecked;
    }
}