<?php


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
        foreach ($this->listItems as $item)
        $str = '';

        $str  .= '<ul>';
        $str .= '<li><a href="/home">Home</a></li>';
        $str  .= '</ul>';

        return $str;
    }

    public function addMenuItem($name, $url)
    {
        $item = new MenuItem($name, $url);
        $this->listItems[] = $item;
    }
}