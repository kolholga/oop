<?php


class Control
{
    private $background;
    private $width;
    private $height;

    public function getBackground()
    {
        return $this->background;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setBackground($background)
    {
        $this->background = $background;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }
}