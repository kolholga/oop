<?php

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

/*
//ДЗ №1
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

/*
//ДЗ №2
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

/*ДЗ №3 от 23.11.2020
//создать класс Employer
//св-ва:
//    -name - задать в конструкторе
//    -age  - задать в конструкторе
//    - salary - зарплата (делаем СЕТТЕР и ГЕТТЕР)
//все свойства приватные
//создать несеолько работников ()объектов
//установить зарплату каждому
//посчитать вне класса общую сумму заработных плат
//проверить, чтобы возраст был от 18 до 60
*/