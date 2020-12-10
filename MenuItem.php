<?php


class MenuItem
{

    private $name;
    private $url;

    /**
     * MenuItem constructor.
     * @param $name
     * @param $url
     */
    public function __construct($name, $url)
    {
        $this->name = $name;
        $this->url = $url;
    }


}