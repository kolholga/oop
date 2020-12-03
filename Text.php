<?php


class Text extends Input
{
    private $placeholder;

    public function __construct($background, $width, $height, $name, $value, $placeholder)
    {
        $this->setBackground($background);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setName($name);
        $this->setValue($value);
        $this->placeholder = $placeholder;

    }

    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
    }

    public function convertToHTML()
    {

        //return '<input type="text" name="" value="" style="background: red; height: 1px; width: 1px" />'; //шаблон
        $str = '';
        $str .= '<input type="text" ';
        $str .= 'name="'.$this->getName().'" ';
        $str .= 'value="'.$this->getValue().'" ';
        $str .= 'placeholder="'.$this->getPlaceholder().'" ';
        $str .= 'style="background: '.$this->getBackground().'; height: '.$this->getHeight().'px; width: '.$this->getWidth().'px" />';
        //return '<input type="'.$type.'" name="'.$this->getName().'" value="'.$this->getValue().'" style="background: '.$this->getBackground().'; height: '.$this->getHeight().'px; width: '.$this->getHeight().'px" />';
        return $str;
    }

}