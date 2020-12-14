<?php

namespace public_class_dz_101220;

class News extends Publication //новости
{
    private $date;

    public function __construct($title, $description, $date)
    {
        parent::__construct($title, $description);
        $this->date = $date;
    }

    public function show()
    {
        echo 'НОВОСТИ' . '<br>' .
            'Заголовок: ' . $this->title . '<br>' .
            'Описание: ' . $this->description . '<br>' .
            'Дата публикации: ' . $this->date . '<br>' . '<br>';
    }
}