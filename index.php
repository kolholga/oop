<?php
// класс - шаблон кода, который используется для создания объекта
// при помощи ключевого слова класс
// имя класса не должно начинаться с цифры
// имя принято писать с заглавной буквы

// на основе класса создаются объекты
// new - для создания объекта какого-то класса

//МОДИФИКАТОРЫ ДОСТУПА:
//public - модификатор доступа - означает, что к свойствам и методам класса можно обращаться любой части программы
//private - свойства и методы доступные только в этом/текущем классе
//protected - св-ва и методы доступны из текущего класса, а также из классов-наследников

//метод - функция созданная внутри класса
// переменная $this, спец. переменная внутри метода/класса, которая содержит ссылку на текущий объект
                  //может обращаться к любому свойству и методу текущего класса и класса-родителя (не должны быть приватными)
// переменной $this нельзя ничего присваивать

//-> оператор доступа к свойствам и методам класса

//ИНКАПСУЛЯЦИЯ - свойство системы, позволяющее объеденить данные и методы работающие с ними(с этими данными),
               // а также скрыть детали реализации от пользователя

////////////////////////////////////////////
class First // класс - шаблон
{
    //тело класса
    //public - модификатор доступа - означает, что к свойствам и методам класса можно обращаться любой части программы
    public $hello = 'Hello '; //свойство
    public $str = 'world!'; //свойство

    public function hello() //метод - функция созданная внутри класса
    {
        // echo 'Привет мир!';
        // переменная $this, спец. переменная внутри метода, которая содержит ссылку на текущий объект
        // переменной $this нельзя ничего присваивать

        //echo $this->str;

        $s = $this->str;
        $a = $this->hello;
        echo $a . $s;
    }
}

// на основе класса создаются объекты
// new - для создания объекта какого-то класса

$obj = new First(); // переменная $obj хранит объект класса First

//echo $obj->hello; // выведи на экран свойство hello объекта obj
//echo $obj->str;
    //-> оператор доступа к свойствам и методам класса

//метод - функция созданная внутри класса
$obj->hello = 'Привет '; //переопределили
$obj->str = 'мир';
$obj->hello();

//var_dump($obj);
?>

