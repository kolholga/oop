<?php


class Select extends Control
{
    private $arItems = [];
    private $name;

    public function __construct($background, $width, $height, $name, $items = [])
    {
        $this->setBackground($background);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->name = $name;
        $this->arItems = $items;
    }

    public function convertToHTML()
    {
        //шаблон:
        // <select>
        //   <option>1</option>
        //   <option>2</option>
        //   <option>3</option>
        // </select>

        $str = '';
        $str .= '<select ';
        $str .= 'name="' . $this->name . '" ';
        $str .= 'style="background: ' . $this->getBackground() . '; height: ' . $this->getHeight() . 'px; width: ' . $this->getWidth() . 'px">';

        foreach ($this->arItems as $item) {
            $str .= '<option>' . $item . '</option>';
        }
        $str .= '</select>';
        return $str;
    }

}