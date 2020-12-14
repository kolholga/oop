<?php

namespace public_class_dz_101220;

class Announcements extends Publication //объявления
{
    private $dateEnd;

    public function __construct($title, $description, $dateEnd)
    {
        parent::__construct($title, $description);
        $this->dateEnd = $dateEnd;
    }

    public function show()
    {
        echo 'ОБЪЯВЛЕНИЯ' . '<br>' .
            'Заголовок: ' . $this->title . '<br>' .
            'Описание: ' . $this->description . '<br>' .
            'Дата окончания срока действия: ' . $this->dateEnd . '<br>' . '<br>';
    }

}