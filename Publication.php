<?php

abstract class Publication
{
    protected $title; //заголовок
    protected $description; //описание

    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    abstract public function show();
}