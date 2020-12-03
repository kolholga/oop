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

    public function convertToHTML()
    {
        $type = $this->isSubmit ? 'submit' : 'button'; //если true, то

        //return '<input type="button" name="" value="" style="background: red; height: 1px; width: 1px" />'; //шаблон
        $str = '';
        $str .= '<input type="'.$type.'" ';
        $str .= 'name="'.$this->getName().'" ';
        $str .= 'value="'.$this->getValue().'" ';
        $str .= 'style="background: '.$this->getBackground().'; height: '.$this->getHeight().'px; width: '.$this->getWidth().'px" />';
        //return '<input type="'.$type.'" name="'.$this->getName().'" value="'.$this->getValue().'" style="background: '.$this->getBackground().'; height: '.$this->getHeight().'px; width: '.$this->getHeight().'px" />';
        return $str;
    }
}