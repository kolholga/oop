<?php


class Button extends Input
{
    private $isSubmit;

    public function __construct($background, $width, $height, $name, $value, $isSubmit)
    {
        $this->setBackground($background);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setName($name);
        $this->setValue($value);
        $this->isSubmit = $isSubmit;
    }

    public function getSubmitState()
    {
        return $this->isSubmit;
    }

    public function setSubmitState($isSubmit = true)
    {
        $this->isSubmit = $isSubmit;
    }
}