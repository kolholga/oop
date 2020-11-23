<?php

//класс Country
//св-во $arCountry = []
//метод setCountry($c) - добавляет страну в конец массива

class Country
{
    public $arCountry = [];

    public function setCountry($c) //метод - добавляет страну в конец массива
    {
        $this->arCountry[] = $c;
    }

    /**
     * @return array
     */
    public function getArCountry() //ГЕТТЕР
    {
        return $this->arCountry;
    }
}

$country = new Country();

echo '<pre>';
print_r($country->getArCountry());
echo '</pre>';

$country->setCountry('Беларусь');

echo '<pre>';
print_r($country->arCountry);
echo '</pre>';

$country->arCountry[] = 'Аргентина';

echo '<pre>';
print_r($country->arCountry);
echo '</pre>';