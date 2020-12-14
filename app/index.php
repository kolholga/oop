<?php

use app\lib\Library;

//@param $class - В параметр приходит имя класса с пространством имен
function auto_load($class) // наша функция для автозагрузки // в auto_load($class) прилетает(скармливаем) app\lib\Library
{

    $str = str_replace('\\', '/', $class); // меняем слеши // функция str_replace(что менять, на что менять, где менять)
    echo $str;
    //require_once '../' . $str . '.php';
    require_once $_SERVER['DOCUMENT_ROOT']. '/' . $str . '.php';
}

spl_autoload_register('auto_load'); //spl_autoload_register - функция автозагрузки: принимает аргументом другую функцию

$lib = new Library();