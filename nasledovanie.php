<?php
//НАСЛЕДОВАНИЕ
/*
//НАСЛЕДОВАНИЕ - создание класса-потомка на основе существующего класса-родителя
               // с целью расширения св-в и методов этого класса-родителя
//класс-потомок создается при помощи ключевого слова extends
//extends - ключевое слово при наследовании
//protected - (защищенный) св-ва и методы доступны из текущего класса,
               // а также из классов-наследников
               //из вне не доступны!!!

//ЕСЛИ НЕ ИСПОЛЬЗУЕТСЯ АВТОЗАГРУЗКА,
        // то классы должны быть объявлены до того,
        // как они будут использоваться
//ЕСЛИ КЛАСС РАСШИРЯЕТ ДРУГОЙ, то родительский класс
        // д.б. объявлен ДО наследующего (класса-потомка)

//parent - используется для доступа к свойствам и методам родителя, не приватным
//если у родительского класса есть конструктор с параметрами,
        // то в производном классе надо тоже создать конструктор с параметрами
        // и число параметров в этом конструкторе
        //д.б. суммой количества параметров родительского класса
        // и числа параметров, необходимых для производного класса
// в теле конструктора производного класса
        // надо вызывать конструктор родительского класса и передавать ему необходимые параметры
*/
/////////////////////////////////////////////////////////////////
class Parents
{
   //public $prop = 'parents';
    public $prop;
    protected $x; //protected - защищенный, НО доступно для потомка
    protected $y;

    public function __construct($pr, $x, $y)
    {
        if(is_null($this->prop)){ //только если null
            $this->prop = $pr;
            $this->x = $x;
            $this->y = $y;
        }
        //$this->prop = $pr;
    }

    public function show()
    {
        return 'Hello';
    }
}

class Child extends Parents //Child наследует у Parents все свойства и методы, которые не приватные
{
    //public $prop = 'child';
    //protected $p = 0;
    public $z;

    public function __construct($pr, $x, $y, $z)
    {
        parent::__construct($pr, $x, $y);
        $this->z = $z;
        //$this->prop = "Child " . $pr;
    }

    public function getProp()
    {
        return $this->prop;
    }

    /*
    public function getParentShow()
    {
        return parent::show();
    }
    */
    public function show()
    {
        return parent::show();
    }
}

$obj4 = new Child('123', 1, 2, 3);
//echo $obj4->getProp();

//echo $obj4->getParentShow();
echo $obj4->show();

//$obj5 = new Parents(121);
//echo $obj5->prop;

/*
class Child2 extends Child
{
    public function getP()
    {
        //$this->prop = 'child2';
        return $this->p;
    }

    public function getParentProp()
    {
        return "Child2 - " . $this->prop;
    }
}
*/

//$obj = new Parents();
//echo $obj->prop . '<br>';

//$obj2 = new Child();
//echo $obj2->getProp();

/*
$obj3 = new Child2();
echo $obj3->getParentProp();
*/


