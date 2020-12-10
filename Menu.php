<?php

//ДЗ от 07.12.2020
class Menu
{
    private $listItems = [];

    public function printMenu ($width, $height, $background_color, $color)
    {

        //<ul>
        //        <li><a href="/home">Home</a></li>
        //        <li><a href="/about">About</a></li>
        //        <li><a href="/see">See</a></li>
        //    </ul>

        $str = '';

        $str  .= '<ul>';
        foreach ($this->listItems as $item){
           $str .= '<li style="width: '.$width.'px; height: '.$height.'px; background-color: '.$background_color.'; color: '.$color.'"><a href="'.$item->getUrl().'">'.$item->getName().'</a></li>';
        }

        $str  .= '</ul>';

        return $str;
    }

    public function addMenuItem($name, $url)
    {
        $item = new MenuItem($name, $url);
        $this->listItems[] = $item;
    }
}