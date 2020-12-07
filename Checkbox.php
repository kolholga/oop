<?php


class Checkbox extends Input
{
    private $isChecked;
    private $text;

    public function __construct($background, $width, $height, $name, $value, $text, $isChecked)
    {
        $this->setBackground($background);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setName($name);
        $this->setValue($value);
        $this->text = $text;
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

    public function convertToHTML()
    {
        //шаблон:
        //<label>
        //<input type="checkbox" name="" value="" style="background: red; height: 1px; width: 1px" />
        // Текст
        //</label>

        $str = '';
        $str .= '<input type="checkbox" ';
        $str .= 'name="'.$this->getName().'" ';
        $str .= 'value="'.$this->getValue().'" ';
        $str .= 'style="background: '.$this->getBackground().'; height: '.$this->getHeight().'px; width: '.$this->getWidth().'px" />';
        $str .= $this->text;

        return $str;
    }
}