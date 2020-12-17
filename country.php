<?php
session_start(); // стартуем СЕССИЮ

//ФУНКЦИЯ ДЛЯ АВТОЗАГРУЗКИ:
//////////////////////////////////////////////////////
//@param $class - В параметр приходит имя класса с пространством имен
function auto_load($class) // наша функция для автозагрузки // в auto_load($class) прилетает(скармливаем) app\lib\Library
{
    $str = $_SERVER['DOCUMENT_ROOT'] . '/';
    $str .= str_replace('\\', '/', $class); // меняем слеши // функция str_replace(что менять, на что менять, где менять)
    $str .= '.php';

    if (is_file($str)) {
        require_once $str;
    }
    //echo $str;
}

spl_autoload_register('auto_load'); //spl_autoload_register - ФУНКЦИЯ АВТОЗАГРУЗКИ: принимает аргументом другую функцию
///////////////////////////////////////////////////////////

$country = new \town\Country();
$country->getCountryList();