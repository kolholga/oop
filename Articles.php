<?php


class Articles extends Publication //статьи
{
    private $name;

    public function __construct($title, $description, $name)
    {
        parent::__construct($title, $description);
        $this->name = $name;
    }

    public function show()
    {
        echo 'СТАТЬИ' . '<br>' .
            'Заголовок: ' . $this->title . '<br>' .
            'Описание: ' . $this->description . '<br>' .
            'Имя автора: ' . $this->name . '<br>' . '<br>';
    }
}