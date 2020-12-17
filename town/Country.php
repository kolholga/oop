<?php


namespace town;


class Country
{

    private $listTown = [];

    public function __construct()
    {
        if(!empty($_SESSION['country'])){ //если массив не пустой
            foreach ($_SESSION['country'] as $item){ //то перебираем его в цикле
                $this->listTown[] = unserialize($item); // unserialize - восстанавливает из строки объект (обязательно передать строку)
            }
        }
    }

    public function addTown(Town $town)  //метод добавления города (можно передать только объект класса Town)
    {
        $this->listTown[] = $town;
        $_SESSION['country'][] = serialize($town); //сохраняем так же и в СЕССИИ объект // serialize - превращает объект в строку
    }

    public function getCountryList()
    {
        if(!empty($this->listTown)){
            echo '<div>';
            foreach ($this->listTown as $country) {
                echo '<p> название города: ' . $country->name . '</p>';
                echo '<p> год основания: ' . $country->foundation . '</p>';
                echo '<p> численность населения: ' . $country->population . '</p>';
                echo '<br><hr><br>';
            }
            echo '</div>';
        }else{
            echo 'города пока не добавлены';
        }
    }
}