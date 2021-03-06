<?php

//СТАТИЧЕСКИЕ СВОЙСТВА И МЕТОДЫ
/*
//статическими называют св-ва и методы, в объявлении которых используются слово static.
//статическое св-во или метод принадлежат классу, а не его экземпляру (объекту)

//переменная $this внутри статических методов не доступна
//внутри класса к статическим св-вам и методам нужно обращаться с помощью self
*/

class Calculate
{
    private static $r = 0;

    public static function plus($a, $b) //static - метод статичечский - можно обращаться без создания объекта, он принадлежит классу
    {
        self::$r;// self:: - обращение к статическому свойству (со знаком $)
        return $a + $b;
    }

    public static function minus($a, $b)
    {
        return $a - $b;
    }

    public static function multiplication ($a, $b)
    {
        return $a * $b;
    }

    public static function division ($a, $b)
    {
        if($b != 0){
            echo 'Результат деления: ' . $a / $b;
        }else{
            echo ' На 0 делить нельзя!';
        }

    }
}