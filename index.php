<?php

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
//instanceof //используется для определения того, является ли текущий объект экземпляром указанного класса.


//СТАТИЧЕСКИЕ СВОЙСТВА И МЕТОДЫ:
//статическими называют св-ва и методы, в объявлении которых используются слово static.
//статическое св-во или метод принадлежат классу, а не его экземпляру (объекту)
//переменная $this внутри статических методов не доступна
//внутри класса к статическим св-вам и методам нужно обращаться с помощью self


//константа - const LOGIN = 'admin'; // константа принадлежит классу

// АБСТРАКЦИЯ - abstract:
//Абстрактный класс - в котором есть хотя бы один абстрактный метод.
//Абстрактный метод - метод, котрый не имеет реализации и д.б. реализован в классе-наследнике
//Создавать объект абстрактнного класса НЕЛЬЗЯ!!!
//Класс-наследник может реализовать не все абстрактные методы, но тогда он сам станет абстрактным

//ИНТЕРФЕЙС:
// ИНТЕРФЕЙС - по своей сути это класс, все методы которого не имеют реализации,
             // а созданы для того, чтобы быть пепреопределенными в дочерних классах
// класс, реализующий ИНТЕРФЕЙС, должен также реализовать все методы данного ИНТЕРФЕЙСА
// у ИНТЕРФЕЙСА свойств не бывает
// ИНТЕРФЕЙС не может иметь объектов
// interface - ключевое слово для создания
// implements - ключевого слово для подключения ИНТЕРФЕЙСА

//ПРОСТРАНСТВО ИМЕН:
// ПРОСТРАНСТВО ИМЕН - это область определения классов, функций и констант,
                      //ограничивающая область их видимости
                      //и предоставляющая возможность группировать их логически между собой
// namespace - ключевое слово для создания ПРОСТРАНСТВА ИМЕН (регистро-независим)
// до объявления ПРОСТРАНСТВА ИМЕН не должно быть никакого вывода на экран, ни тегов, ни...
// ПРОСТРАНСТВО ИМЕН может быть составным и чаще всего повторяет путь // н-р, namespace oop\app

*/


require_once 'Control.php'; //подключили класс Control
require_once 'Input.php'; //подключили класс Input
require_once 'Button.php'; //подключили класс Button
require_once 'Text.php'; //подключили класс Text
require_once 'Select.php'; //подключили класс Select
require_once 'Label.php'; //подключили класс Label
require_once 'Radio.php'; //подключили класс Radio
require_once 'Checkbox.php'; //подключили класс Checkbox
require_once 'Point.php'; //подключили класс Point
require_once 'PointInterface.php'; //подключили класс PointInterface // д.б. подключен до класса Circle2 (типа его родитель)
require_once 'Circle2.php'; //подключили класс Circle2
require_once 'Rectangle2.php'; //подключили класс Rectangle2
require_once 'Calculate.php'; //подключили класс Calculate
require_once 'app/lib/User.php'; //подключили класс User, который лежит в прстранстве имен Ddd\fff
require_once 'User.php'; //подключили класс User

//instanceof //используется для определения того, является ли текущий объект экземпляром указанного класса.

use Ddd\fff\User;
$user = new User();
echo '<br>';
$user2 = new \User();

/*
$user = new User(); // User - глобальное пространство имен
echo '<br>';
$user = new Ddd\fff\User(); // Ddd\fff\User - пространство имен Ddd\fff
*/

/*
$c = new Circle2(2,4,20);
echo $c->area();
*/

/**
 * Формирует тег <input> на основе данных объекта
 * @param $object
 * @return string
 */
/*
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
*/

/*
echo '<form>';

echo 'Введите ФИО: ';
echo '<br>';

$input = new Text('',150,30,'text','', 'Введите фамилию');
echo $input->convertToHTML();
echo '<br>';

$input = new Text('',150,30,'text','', 'Введите имя');
echo $input->convertToHTML();
echo '<br>';

$input = new Text('',150,30,'text','', 'Введите отчество');
echo $input->convertToHTML();
echo '<br><br>';

echo 'Ваш город: ';
echo '<br>';


$select = new Select('', 120,20, 'sel', ['Брест','Витебск','Гомель','Гродно','Минск','Могилев']);
echo $select->convertToHTML();
echo '<br><br>';

$checkbox = new Checkbox('', 15,15, 'check', '', ' Вы принимаете лицензионное соглашение.',true);
$c = $checkbox->convertToHTML();

$label = new Label('', 120,20, 'lab', '', $c);
echo $label->convertToHTML();
echo '<br>';

$checkbox = new Checkbox('', 15,15, 'check', '', ' Вам есть 18',true);
$c1 = $checkbox->convertToHTML();

$label = new Label('', 120,20, 'lab', '', $c1);
echo $label->convertToHTML();
echo '<br><br>';

echo 'Ваш пол: ';
echo '<br>';

$radio = new Radio('', 15,15, 'check', '', ' муж',true);
//$r = $radio->convertToHTML();

$label = new Label('', 120,20, 'lab', '', $radio->convertToHTML());
echo $label->convertToHTML();
echo '<br>';

$radio = new Radio('', 15,15, 'check', '', ' жен',true);
$r1 = $radio->convertToHTML();

$label = new Label('', 120,20, 'lab', '', $r1);
echo $label->convertToHTML();
echo '<br><br>';

$object = new Button('red',100,30,'submit','Отправить', true);
echo $object->convertToHTML();
echo '<br><br>';

echo '</form>';
*/

//(new Select());

/*
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
*/

/*
$arItems = [];

//$arItems[] = new Point(2,4); - создавать объект абстрактного класса нельзя
$arItems[] = new Circle2(2,4, 50);
$arItems[] = new Circle2(2,4, 10);
$arItems[] = new Rectangle2(2,4, 100,50);

$total = 0;
foreach ($arItems as $item){
    //$item->show();
    //echo $item->area();
    //echo '<br>';
    $total += $item->area();
}

echo $total;
*/

//$p = new Point(2,4);
//$p->show();


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

/*
echo 'Сумма чисел 5 и 7 = ' . Calculate::plus(5,7);
echo '<br>';
echo 'Разность чисел 5 и 7 = ' . Calculate::minus(5,7);
echo '<br>';
echo 'Результат умножения: ' . Calculate::multiplication(5,7);
echo '<br>';
Calculate::division(25,5);
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




