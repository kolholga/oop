<?php

//ДЗ №1
/*
 * ДЗ №1
 * 1. Создать класс автомобиль (Car)
 *    свойства:
 *    - цвет (color)
 *    - модель (model)
 * 2. Создать объект(ы) класса
 * 3. Установить свойства цвета и модели
 * 4. Вывести на экран свойства объекта
 * 5. Можно создать несколько машинок
 * */

//ДЗ №1 РЕШЕНИЕ
/*
//РЕШЕНИЕ ДЗ №1
class Car // класс - шаблон
{
    private $color; //свойство
    private $model; //свойство

    //public function __construct($c, $m) // КОНСТРУКТОР
    //{
    //   $this->color = $c;
    //    $this->model = $m;
    //    echo $m . ' - ' . $c . '<br>';
    //}

    public function getColor()
    {
        return $this->color;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function printCar()
    {
        echo $this->getModel() . ' - ' . $this->getColor() . '<br>';
    }
}

// с помощью КОНСТРУКТОРА с ПАРАМЕТРАМИ
//$car = new Car('orange', 'Peugeot'); // переменная $car хранит объект класса Car
//$car2 = new Car('red', 'Audi'); // переменная $car2 хранит объект класса Car
//$car3 = new Car('yellow', 'Mercedes'); // переменная $car3 хранит объект класса Car


//echo $car2->getModel();
//echo ' - ' . $car2->getColor();

$car4 = new Car; // переменная $car4 хранит объект класса Car
$car4->setColor('white'); //задала значение при помощи СЕТТЕРА
$car4->setModel('Renault');
//echo $car4->getModel() . ' - ' . $car4->getColor() . '<br>'; //вывела значения при помощи ГЕТТЕРОВ
$car4->printCar();

$car5 = new Car; // переменная $car4 хранит объект класса Car
$car5->setColor('black'); //задала значение при помощи СЕТТЕРА
$car5->setModel('BMW');
//echo $car5->getModel() . ' - ' . $car5->getColor() . '<br>'; //вывела значения при помощи ГЕТТЕРОВ
$car5->printCar();

$car6 = new Car; // переменная $car4 хранит объект класса Car
$car6->setColor('green'); //задала значение при помощи СЕТТЕРА
$car6->setModel('Lexus');
//echo $car6->getModel() . ' - ' . $car6->getColor() . '<br>'; //вывела значения при помощи ГЕТТЕРОВ
$car6->printCar();

//echo $car->model;
//echo $car->color;
*/

//ДЗ №2
/*
 * ДЗ №2
 * 1. Создать класс прямоугольник (Rectangle)
 *    свойства:
 *    - высота (height)
 *    - ширина (width)
 * (можно задать с помощью конструктора, либо самим прописать цифрами)
 * 2. Создать 2 метода:
 *    - getSquare() - площадь
 *    - getPerimeter() - периметр
 * 3. Методы должны возвращать из заданных свойств высоты и ширины Площадь и Периметр
 * 4. Формулы площади и периметра
 * */

//ДЗ №2 РЕШЕНИЕ
/*
//РЕШЕНИЕ ДЗ №2
class Rectangle
{
    private $width;
    private $height;

    public function __construct($w, $h)
    {
        $this->width = $w;
        $this->height = $h;
    }

    //считаем площадь
    public function getSquare()
    {
        if ($this->isCorrectValues()) {
            echo 'Площадь прямоугольника с шириной = ' . $this->width . ' и высотой = ' . $this->height . ' равна ' . $this->width * $this->height . '<br>';
        }
    }

    //считаем периметр
    public function getPerimeter()
    {
        if ($this->isCorrectValues()) {
            echo 'Периметр прямоугольника с шириной = ' . $this->width . ' и высотой = ' . $this->height . ' равен ' . (2 * $this->width + 2 * $this->height) . '<br>';
        }
    }

    //проверяем, чтобы значения были больше нуля
    private function isCorrectValues()
    {
        if ($this->width > 0 && $this->height > 0) {
            return true;
        } else {
            echo 'Ошибка: введено неверное значение!!!' . '<br>';
            return false;
        }
    }
}

// с помощью КОНСТРУКТОРА с ПАРАМЕТРАМИ
$rect = new Rectangle(5, 2); // переменная $rect хранит объект класса Rectangle
$rect->getSquare(); // вызов метода подсчета площади
$rect->getPerimeter(); // вызов метода подсчета периметра
echo '<br>';

$rect2 = new Rectangle(7, 5); // переменная $rect2 хранит объект класса Rectangle
$rect2->getSquare();
$rect2->getPerimeter();
echo '<br>';

$rect3 = new Rectangle(7, -6); // переменная $rect3 хранит объект класса Rectangle
$rect3->getSquare();
$rect3->getPerimeter();
echo '<br>';
*/

//ДЗ №3 от 23.11.2020
/*ДЗ №3 от 23.11.2020
//создать класс Employee
//св-ва:
//    - name - задать в конструкторе
//    - age  - задать в конструкторе
//    - salary - зарплата (делаем СЕТТЕР и ГЕТТЕР)
//все свойства приватные
//создать несколько работников (объектов)
//установить зарплату каждому
//посчитать вне класса общую сумму заработных плат
//проверить, чтобы возраст был от 18 до 60
*/

//ДЗ №3 РЕШЕНИЕ-1
/*
//РЕШЕНИЕ-1 ДЗ №3
class Employee
{
    private $name;
    private $age;
    private $salary;

    public function __construct($n, $a)
    {
        if ($a >= 18 && $a <= 60) { //если возраст сотрудника от 18 до 60
            $this->name = $n; //то устанавливаем значение в св-во $name
            $this->age = $a; //то устанавливаем значение в св-во $age
        } else {
            echo 'Вы не можете быть нашим сотрудником и ';
        }
    }

    public function getSalary() //метод getSalary() получает значения в св-во $salary
    {
        return $this->salary;
    }

    public function setSalary($sal) //метод setSalary() устанавливает значения в св-во $salary
    {
        if ($this->age >= 18 && $this->age <= 60) { //если возраст сотрудника от 18 до 60

            if (is_int($sal)) { // то проверяем, если значение $sal - число
                $this->salary = $sal; //то устанавливаем значение в св-во $salary
            } else {
                echo 'Введено неверное значение зарплаты' . '<br>';
            }
        } else {
            echo 'Вам не положена зарплата' . '<br>';
        }
    }

}

$sum = [];

$emp1 = new Employee('Olga', 41);
$emp1->setSalary(1000);
$sum[] = $emp1->getSalary();
echo '<br>';

$emp2 = new Employee('Dmitriy', 61);
$emp2->setSalary(5000);
$sum[] = $emp2->getSalary();
echo '<br>';

$emp3 = new Employee('Mariya', 38);
$emp3->setSalary('jjj');
$sum[] = $emp3->getSalary();
echo '<br>';

$emp4 = new Employee('Svetlana', 41);
$emp4->setSalary(1500);
$sum[] = $emp4->getSalary();
echo '<br>';

$emp5 = new Employee('Elena', 10);
$emp5->setSalary(500);
$sum[] = $emp5->getSalary();
echo '<br>';

echo 'Общая зарплата сотрудников, принятых на работу по допустимому возрасту = ' . array_sum($sum);
*/

//ДЗ №3 РЕШЕНИЕ-2
/*
// РЕШЕНИЕ-2 ДЗ №3
class Employee
{
    private $name;
    private $age;
    private $salary;

    public function __construct($n, $a)
    {
        if ($a >= 18 && $a <= 60) { //если возраст сотрудника от 18 до 60
            $this->name = $n; //то устанавливаем значение в св-во $name
            $this->age = $a; //то устанавливаем значение в св-во $age
        } else {
            echo 'Вы не можете быть нашим сотрудником и ';
        }
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($sal)
    {
        if ($this->age >= 18 && $this->age <= 60) { //если возраст сотрудника от 18 до 60

            if (is_int($sal)) { // то проверяем, если значение $sal - число
                $this->salary = $sal; //то устанавливаем значение в св-во $salary
            } else {
                echo 'Введено неверное значение зарплаты' . '<br>';
            }
        } else {
            echo 'Вам не положена зарплата' . '<br>';
        }
    }
}

class SumSalary //класс для подсчета суммы зарплат
{
    private $sumAr = [];

    public function getSum() //метод getSum() - получает сумму элементов массива $sumAr
    {
        return array_sum($this->sumAr); //функция array_sum - считает сумму массива
    }

    public function setSum($s) //метод setSum() устанавливает значения в массив $sumAr
    {
        $this->sumAr[] = $s;
        return $this; //возвращает ссылку на свой объект для построения цепочки
    }
}

$sumArray = new SumSalary();

$emp1 = new Employee('Olga', 41);
$emp1->setSalary(1000);
echo '<br>';

$emp2 = new Employee('Dmitriy', 61);
$emp2->setSalary(5000);
echo '<br>';

$emp3 = new Employee('Mariya', 38);
$emp3->setSalary('jjj');
echo '<br>';

$emp4 = new Employee('Svetlana', 41);
$emp4->setSalary(1500);
echo '<br>';

$emp5 = new Employee('Elena', 10);
$emp5->setSalary(500);
echo '<br>';

$sumArray
    ->setSum($emp1->getSalary())
    ->setSum($emp2->getSalary())
    ->setSum($emp3->getSalary())
    ->setSum($emp4->getSalary())
    ->setSum($emp5->getSalary());

echo 'Общая зарплата сотрудников, принятых на работу по допустимому возрасту = ' . $sumArray->getSum();
*/

//ДЗ №4 от 26.11.2020
/*ДЗ №4 от 26.11.2020
1. Сделать класс Product с такими полями: name, price,
	description, brand.
2. Сделать класс Phone производным от класса Product
	с полями cpu, ram, countSim, hdd, os.
3. Сделать класс Monitor производным от класса Product
	с полями diagonal, frequency, ports.
4. В классе Product описать метод getProduct().
5. В классах Phone и Monitor реализовать метод getProduct(),
	который не принимает параметров и возвращает строку
	с полей класса и конструкторы которой создают продукт. Параметры конструктора в классе Phone: name,
	description, brand, cpu, ram, countSim, hdd, os. Параметры конструктора в классе Monitor: name, description,
	brand, model, diagonal, frequency, ports.
6. В файле index.php создать 3 объекта класса Phone
	и 2 объекта класса Monitor. Добавить их к массиву
	products.
7. Вывести массив продуктов на страницу, используя
	метод getProduct().
*/

//ДЗ №4 - РЕШЕНИЕ
/*
//ДЗ №4 - РЕШЕНИЕ
class Product
{
    protected $name;
    protected $price;
    protected $description;
    protected $brand;

    public function __construct($name, $price, $description, $brand)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->brand = $brand;
    }

    public function getProduct()
    {
        echo '------------------------------------' . '<br>';
        echo 'Наименование: ' . $this->name . '<br>';
        echo 'Описание: ' . $this->description . '<br>';
        echo 'Брэнд: ' . $this->brand . '<br>';
        echo 'Цена: ' . $this->price . '<br>' . '<br>';
    }
}

class Phone extends Product
{
    private $cpu;
    private $ram;
    private $countSim;
    private $hdd;
    private $os;

    public function __construct($name, $price, $description, $brand,
                                $cpu, $ram, $countSim, $hdd, $os)
    {
        parent::__construct($name, $price, $description, $brand);
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->countSim = $countSim;
        $this->hdd = $hdd;
        $this->os = $os;
    }

    public function getProduct()
    {
        parent::getProduct();
        echo 'Процессор: ' . $this->cpu . '<br>';
        echo 'Память: ' . $this->ram . '<br>';
        echo 'Количество сим-карт: ' . $this->countSim . '<br>';
        echo 'Жесткий диск: ' . $this->hdd . '<br>';
        echo 'Операционная система: ' . $this->os . '<br>';

    }
}

class Monitor extends Product
{
    private $diagonal;
    private $frequency;
    private $ports;

    public function __construct($name, $price, $description, $brand,
                                $diagonal, $frequency, $ports)
    {
        parent::__construct($name, $price, $description, $brand);
        $this->diagonal = $diagonal;
        $this->frequency = $frequency;
        $this->ports = $ports;
    }

    public function getProduct()
    {
        parent::getProduct();
        echo 'Диагональ: ' . $this->diagonal . '<br>';
        echo 'Частота: ' . $this->frequency . '<br>';
        echo 'Количество входов: ' . $this->ports . '<br>';
    }

}

$obj1 = new Phone('смартфон', '400$', 'А51', 'Самсунг',
                1700, 2048, 2, 'hhhh', 'Android 10');
$obj1->getProduct();

echo '<br>';

$obj2 = new Monitor('монитор', '1000$', '555', 'ЛОС',
                    60, 80, 2);
$obj2->getProduct();
*/

//ДЗ №5 от 30.11.2020
/*ДЗ №5 от 30.11.2020
1. Создать класс Radio, который будет создавать radiobutton, унаследовать класс Input. Добавить к классу Radio
	private-поле isChecked, метод getCheckedState(), который
	не принимает ничего в качестве параметра и возвращает значение поля isChecked, setCheckedState(), записывающий в поле isChecked значение "true", и конструктор,
	принимает _background, _width, _height, _name, _value,
	_isChecked в качестве параметров и вызывает соответствующие методы для заполнения параметров в поле.
2. Создать класс Checkbox, который будет создавать
	checkbox, унаследовать класс Input. Добавить к классу
	Radio private-поле isChecked, метод getCheckedState(),
	который не принимает ничего в качестве параметра и
	возвращает значение поля isChecked, метод setCheckedState(), записывающий в поле isChecked значение "true",
	и конструктор, который принимает _background, _width,
	_height, _name, _value, _isChecked в качестве параметров
	и вызывает соответствующие методы для заполнения
	параметров в поле.
3. Создать класс Select, который будет создавать selectэлемент, унаследовать класс Control. Добавить к классу
	Select private-поле items, метод getItems(), который не
	принимает ничего в качестве параметра и возвращает
	значение поля items, метод setItems(), который принимает массив строк в качестве параметра и записывает
	его в поле items, и конструктор, который принимает
	_background, _width, _height, _name, _value, _items в
	качестве параметров и вызывает соответствующие
	методы для заполнения параметров в поле.
4. В файле index.php добавить к функции convertToHTML()
	возможность превращать в HTML-код объекты класса
	Radio, Checkbox и Select.
5. С помощью написанных классов создать и вывести
	форму регистрации.
*/

//ДЗ от 03.12.2020
/*ДЗ от 03.12.2020
1. доработать Label, Checkbox, Radio методом convertToHTML() (Input мы сделали абстрактным на уроке)
2. в Calculate добавить статические методы умножение и деление, проверить деление на 0
3. проверить версию PHP дома (не ниже 7.1)
*/

//ДЗ от 07.12.2020
/*ДЗ от 07.12.2020
1. Разработать класс Menu, в котором создать поле (свойство)
listItems — массив (объекта) элементов меню.
2. Добавить к классу Menu метод PrintMenu(), который принимает width, height, background-color, color
в качестве параметров, которые принадлежат соответствующим CSS-стилям элемента.
3. Разработать класс MenuItem, в котором описать поля
Name, URL, описать конструктор, который принимает 2 параметра: name и url и заполняет значения
в соответствующих полях.
4. В класс Menu добавить метод AddMenuItem(), который
принимает name и url в качестве параметров, создает
объект класса MenuItem и добавляет его к массиву
listItems. (н-р, внутри конструктора $user = new \Ddd\fff\User();)
5. В файле index.php создать объект класса Menu, добавить туда 5 элементов меню (Home, About, Photo,
    Contact Us, Login).
6. Вывести объект класса Menu через метод PrintMenu().

объединить их одним пространством имен
*/

//ДЗ от 10.12.2020
/*ДЗ от 10.12.2020
1. Создать класс Publication с абстрактным методом show и свойствами title, description.
2. Разработать три производных класса News, Announcements, Articles в которых реализовать метод show
	Данный метод должен выводить соответственно новости, объявления и статьи.
3. При этом:
	а) Новости должны содержать дату публикации (создать соответствующее свойство)
	б) Объявления должны содержать дату окончания срока действия (создать соответствующее свойство)
	в) Статьи должны содержать имя автора (создать соответствующее свойство)

	Учесть это при выводе в методе show каждого класса

4. На странице index.php создать массив состоящий из объектов разных классов.
5. В цикле перебрать массив и вызвать метод show

почитать про МАГИЧЕСКИЕ МЕТОДЫ самостоятельно
*/

//ДЗ от 14.12.2020
/*
 1. Создать класс FileHelper
 2. Конструктор класса принимает аргументы id, title, date
   и дописывает св-во fileData = []

   $fileData[
        [id, title, date]
        [id, title, date]
        [id, title, date]
        [id, title, date]
    ]
 3. Метод addToFile() записывает сериализоваанный массив fileData = [] записывает в файл file_help.txt
 */

//ДЗ от 14.12.2020
/*
 1. Описать (создать) класс Town со свойствами (открытыми)
	name - название города
	foundation - год основания
	population - численность населения

	в класе реализовать конструктор который устанавливает значения этих свойств.

2. Описать(создать) класс Country со свойством
	listTown = []

3. Конструктор класса Country должен проверить содержится ли что-либо в массиве $_SESSION['country']
	если это массив, то нужно перебрать его в цикле и используя функцию unserialize() восстановить объекты
	и записать их в listTown

4. Реализовать метод добавления города addTown. Параметром передать объект класса Town (метод не должен
	принимать что-то другое) переданный объект записать в конец массива listTown а так же сериализованный объект
	записать в конец $_SESSION['country'].

5. Реализовать метод getCountryList. Метод должен проверить содержится ли что-либо в массиве listTown
	если да то вывести используя html-разметку (можно по минимуму) если нет, то выдать сообщение, что города пока не добавлены

6. Добавить несколько городов. Вывести.
*/

//
/*
1.создать класс Form
 $form = new Form();

 echo $form->input();
*/

//ПРАКТИКА 24.12.2020- класс Session + Flash
/*
1. Создайте класс Session - оболочку над сессиями. Он должен иметь следующие методы:
   создать переменную сессии,
   получить переменную,
   удалить переменную сессии,
   проверить наличие переменной сессии.

Сессия должна стартовать (session_start) в методе __construct.

2. Реализуйте класс Flash, который будет использовать внутри себя класс Session
   из предыдущей задачи (именно использовать, а не наследовать).

  Класс должен иметь два метода - setMessage, который сохраняет сообщение в сессию
  и getMessage, который получает сообщение из сессии.
*/

//ДЗ от 24.12.2020
/*
составить ТЗ
БД поле для текста, имени, ...

класс:
1.конструктор
2. метод создать/запросить
3. метод ...

*/

?>

<form action="" method="" enctype="multipart/form-data">

    <input type="text" name="text"/>

        <select name="">
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
        </select>

    <button>Ok</button>

</form>