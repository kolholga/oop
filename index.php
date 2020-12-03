<?php

require_once 'Control.php'; //подключили класс Control
require_once 'Input.php'; //подключили класс Input
require_once 'Button.php'; //подключили класс Button
require_once 'Text.php'; //подключили класс Text
require_once 'Label.php'; //подключили класс Label
require_once 'Radio.php'; //подключили класс Radio
require_once 'Checkbox.php'; //подключили класс Checkbox

//instanceof //используется для определения того, является ли текущий объект экземпляром указанного класса.

/**
 * Формирует тег <input> на основе данных объекта
 * @param $object
 * @return string
 */
function convertToHTML($object)
{
    $str = '';

    if($object instanceof Text){
        $str .= '<label for="'.$object->getName().'"></label>';
    }

    $str .= '<input '; //долепливаем .=
    if ($object instanceof Button) {
        $str .= 'type="submit" ';
    } elseif ($object instanceof Text) {
        $str .= 'type="text" ';
        $str .= 'placeholder="'.$object->getPlaceholder().'" ';
    }elseif ($object instanceof Radio){
        $str .= 'type="radio" ';
    }elseif ($object instanceof Checkbox){
        $str .= 'type="checkbox" ';
    }

    $str .= 'name="'.$object->getName().'" ';
    $str .= 'value="'.$object->getValue().'" ';
    $str .= 'style="background: '.$object->getBackground().'; width: '.$object->getWidth().'px; height: '.$object->getHeight().'px" ';
    $str .= ' />';

    return $str;
}

$control = new Control();
$button_input = new Button('red', 70, 20, 'button', 'OK', true);
$text_input = new Text('', 140, 30, 'text', '', 'Введите имя');
$radio_input = new Radio('', 50, 50, 'jjj', '', true);
$checkbox_input = new Checkbox('', 20, 30, 'ddd', 'kk', true);

echo convertToHTML($text_input);
echo '<br> . <br>';
echo convertToHTML($button_input);
echo '<br> . <br>';
echo convertToHTML($radio_input);
echo '<br> . <br>';
echo convertToHTML($radio_input);
echo '<br> . <br>';
echo convertToHTML($checkbox_input);

/*
echo '<pre>';
var_dump(convertToHTML($button_input));
echo '</pre>';
*/

/*
//require_once 'Calculate.php'; //подключили класс Calculate

// если НЕ статическая
//$obj = new Calculate(); // если НЕ статическая
//echo $obj->plus(5,7);

// если статическая
//echo Calculate::plus(5,7);
*/

//ТЕОРИЯ по ООП
/*
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
*/
////////////////////////////////////////////
/*
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
*/




