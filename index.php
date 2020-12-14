<?php

use app\lib\Library;

//@param $class - В параметр приходит имя класса с пространством имен
function auto_load($class) // наша функция для автозагрузки // в auto_load($class) прилетает(скармливаем) app\lib\Library
{

    $str = str_replace('\\', '/', $class); // меняем слеши // функция str_replace(что менять, на что менять, где менять)
    require_once $str . '.php';
}

spl_autoload_register('auto_load'); //spl_autoload_register - функция автозагрузки: принимает аргументом другую функцию

//ТЕОРИЯ по ООП
/*
// КЛАСС - шаблон кода, который используется для создания объекта
// при помощи ключевого слова класс
// имя класса не должно начинаться с цифры
// имя принято писать с заглавной буквы

// на основе класса создаются объекты
// new - для создания объекта какого-то класса

//МОДИФИКАТОРЫ ДОСТУПА:
//public - модификатор доступа - означает, что к свойствам и методам класса можно обращаться любой части программы
//private - свойства и методы доступные только в этом/текущем классе
//protected - св-ва и методы доступны из текущего класса, а также из классов-наследников

//МЕТОД - функция созданная внутри класса
// переменная $this, спец. переменная внутри метода/класса, которая содержит ссылку на текущий объект
                  //может обращаться к любому свойству и методу текущего класса и класса-родителя (не должны быть приватными)
// переменной $this нельзя ничего присваивать

//-> оператор доступа к свойствам и методам класса

//ИНКАПСУЛЯЦИЯ - свойство системы, позволяющее объеденить данные и методы работающие с ними(с этими данными),
               // а также скрыть детали реализации от пользователя
//instanceof //используется для определения того, является ли текущий объект экземпляром указанного класса.


//СТАТИЧЕСКИЕ СВОЙСТВА И МЕТОДЫ:
// статическими называют св-ва и методы, в объявлении которых используются слово static.
// статическое св-во или метод принадлежат классу, а не его экземпляру (объекту)
// переменная $this внутри статических методов не доступна
// внутри класса к статическим св-вам и методам нужно обращаться с помощью self


//КОНСТАНТА - const LOGIN = 'admin'; // константа принадлежит классу

//АБСТРАКЦИЯ - abstract:
// Абстрактный класс - в котором есть хотя бы один абстрактный метод.
// Абстрактный метод - метод, котрый не имеет реализации и д.б. реализован в классе-наследнике
// Создавать объект абстрактнного класса НЕЛЬЗЯ!!!
// Класс-наследник может реализовать не все абстрактные методы, но тогда он сам станет абстрактным

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

//ФУНКЦИЯ АВТОЗАГРУЗКИ:
//spl_autoload_register - функция автозагрузки: принимает аргументом другую функцию

/ПОЛИМОРФИЗМ(МНОГОФОРМЕННОСТЬ):
// ПОЛИМОРФИЗМ(МНОГОФОРМЕННОСТЬ) - это способность объекта использовать методы производного класса,
                                // который не существует на момент создания базового
// ТРЕЙТ (ключевое слово trait (вместо слова class)) - это механизм повторного использования кода
                               // в языках с поддержкой только одиночного наследования (как в PHP)
// ТРЕЙТ подключаем в классе с помощью ключевого слова use
// ТРЕЙТ реализует "горизонтальное наследование"
// объект ТРЕЙТА создавать нельзя
// несколько ТРЕЙТОВ м.б. вставлены в класс путем их перечисления в дерективе use через запятую
// https://www.php.net/manual/ru/language.oop5.traits.php

// в ТРЕЙТЕ можно:
// 1)могут содержаться обычные методы
// 2)могут содержаться абстрактые методы и тогда класс ,использующий этот ТРЕЙТ ,обязан их реализовать
// 3)может содержаться свойство, тогда класс, использующий ТРЕЙТ, не может у себя объявить свойство с таким же именем,
     //а должен использовать своство ТРЕЙТА
// 4)могут содержаться статические свойства и методы
// 5)можно использовать указатель this и этот указатель будет относиться к тому объекту, который использует ТРЕЙТ
// 6)могут использоваться другие ТРЕЙТЫ

//МАГИЧЕСКИЕ МЕТОДЫ:
// МАГИЧЕСКИЕ МЕТОДЫ - это специальные методы классов, зарезирвированные в PHP для определения поведения в конкретных ситуациях
// https://www.php.net/manual/ru/language.oop5.magic.php
// все магические методы д.б. public

*/

//ПОДКЛЮЧЕНИЯ:
/*
//ПОДКЛЮЧЕНИЯ:
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
require_once 'Menu.php'; //подключили класс Menu
//require_once 'MenuItem.php'; //подключили класс MenuItem
//require_once 'app/lib/Library.php'; //подключили класс Library. который лежит в прстранстве имен app\lib
*/

//АВТОЗАГРУЗКА:
/*
// https://www.php.net/manual/ru/function.spl-autoload-register.php

use app\lib\Library;

//@param $class - В параметр приходит имя класса с пространством имен
function auto_load($class) // наша функция для автозагрузки // в auto_load($class) прилетает(скармливаем) app\lib\Library
{

    $str = str_replace('\\', '/', $class); // меняем слеши // функция str_replace(что менять, на что менять, где менять)
    //echo $str . '.php<br>';
    require_once $str . '.php';
}

spl_autoload_register('auto_load'); //spl_autoload_register - функция автозагрузки: принимает аргументом другую функцию

//$user = new User565656();
$user = new Circle2(2,4,5);
echo '<br>';
$user = new Library();
*/

//ПОЛИМОРФИЗМ(МНОГОФОРМЕННОСТЬ):
/*
// ПОЛИМОРФИЗМ(МНОГОФОРМЕННОСТЬ) - это способность объекта использовать методы производного класса,
                                // который не существует на момент создания базового
// ТРЕЙТ (ключевое слово trait (вместо слова class)) - это механизм повторного использования кода
                               // в языках с поддержкой только одиночного наследования (как в PHP)
// ТРЕЙТ подключаем в классе с помощью ключевого слова use
// ТРЕЙТ реализует "горизонтальное наследование"
// объект ТРЕЙТА создавать нельзя
// несколько ТРЕЙТОВ м.б. вставлены в класс путем их перечисления в дерективе use через запятую
// https://www.php.net/manual/ru/language.oop5.traits.php

// в ТРЕЙТЕ можно:
// 1)могут содержаться обычные методы
// 2)могут содержаться абстрактые методы и тогда класс ,использующий этот ТРЕЙТ ,обязан их реализовать
// 3)может содержаться свойство, тогда класс, использующий ТРЕЙТ, не может у себя объявить свойство с таким же именем,
     //а должен использовать своство ТРЕЙТА
// 4)могут содержаться статические свойства и методы
// 5)можно использовать указатель this и этот указатель будет относиться к тому объекту, который использует ТРЕЙТ
// 6)могут использоваться другие ТРЕЙТЫ

$obj = new Example();
$obj->runHello(); // вызываем метод ТРЕЙТА
*/

//МАГИЧЕСКИЕ МЕТОДЫ:
/*
// МАГИЧЕСКИЕ МЕТОДЫ - это специальные методы классов, зарезирвированные в PHP для определения поведения в конкретных ситуациях
// https://www.php.net/manual/ru/language.oop5.magic.php
// все магические методы д.б. public

$obj = new Example();
$obj->runHello(); // вызываем метод ТРЕЙТА

echo  $obj;
echo $obj->hhh();
*/

//instanceof //используется для определения того, является ли текущий объект экземпляром указанного класса.

/*
//ДЗ от 07.12.2020
$obj = new Menu();
$obj->addMenuItem('hhh', '/');
$obj->addMenuItem('fff', '/');
$obj->addMenuItem('uuu', '/');
$obj->addMenuItem('ddd', '/');
$obj->addMenuItem('sss', '/');

echo $obj->printMenu(20, 10, 'yellow', ',blue');
*/

/*
use Ddd\fff\User;
$user = new User();
echo '<br>';
$user2 = new \User();
*/

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

//ДЗ от 10.12.2020

$obj = [];

$obj[] = new Articles(
    'Особенности PHP8',
    'PHP 8.0 - это крупное обновление языка PHP. Он содержит множество новых функций и оптимизаций, включая именованные аргументы, типы объединения, атрибуты, продвижение свойств конструктора, выражение соответствия, безопасный оператор NULL, JIT и улучшения в системе типов, обработке ошибок и согласованности.',
    'Vasya');

$obj[] = new Announcements(
    'Продам',
    'свадебное платье',
    date_create('01.01.2021')->format('d-m-Y'));

$obj[] = new News(
    'Погода',
    'Оранжевый уровень опасности',
    date_create('now')->format('d-m-Y'));

foreach ($obj as $item) {
    $item->show();
}

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




