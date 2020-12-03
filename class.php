<?php

//private - свойства и методы доступные только в этом/текущем классе
class User
{
    private $name; //свойство/ по умолчанию null
    private $age; //свойство/ по умолчанию null
    //private const LOGIN = 'admin'; // константа принадлежит классу

    /*
    public function __construct($n, $a) //метод КОНСТРУКТОР // всегда!!! модификатор public по умолчанию
    {
        $this->age = $a;
        $this->name = $n;
    }
    */

    public function getAge() // ГЕТТЕР - метод для возвращения значения свойства age
    {
        //self::LOGIN; - обращаемся к константе
        return $this->age;
    }

    public function getName() // ГЕТТЕР - метод для возвращения значения свойства name
    {
        return $this->name;
    }

    public function setAge($age) // СЕТТЕР - метод / устанавливает возраст
    {
        if ($age > 18 && $age < 60) {
            $this->age = $age;
        }
    }

    public function setName($name) // СЕТТЕР - метод / устанавливает имя
    {
        $this->name = $name;
    }
}

//$man = new User('Vasya', '18'); // в $man присваиваем объект класса User

//$man->name = 'Вася';
//$man->age = '18';

$man = new User; // сoздали объект User // если нет конструкторa, скобки можно не ставить
$man->setAge(' 25');
$man->setName(' Petya ');
echo 'My name is ' . $man->getName() . "age" . $man->getAge() . ' years old <br>';
//echo 'My login is ' . User::LOGIN;


/*
var_dump($man);
echo '<br>';

$man2 = new User('Gena', '21');
//$man2->name = 'Петя';
//$man2->age = '30';

var_dump($man2);
echo '<br>';

var_dump($man);
*/
