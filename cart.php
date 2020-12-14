<?php
session_start(); // стартуем СЕССИЮ

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

//ПАПКА classes/cart
$cart = new \classes\cart\Cart();
$cart->getCart();

/*
echo '<pre>';
print_r($_SESSION['cart']);
echo '</pre>';
*/

$tm = mktime(0,0,0,8,24, 1980); // mktime - возвращает метку времени
//echo date("d - m - Y", 1554865444);
echo date("d - m - Y", $tm);

$ttt = date_create($tm);


