<?php

/*
//если public
class Student
{
    public $name;
    public $course;

    public function __construct($name, $course){
        $this->name = $name;
        $this->course = $course;
    }
}

$std = new Student('Vasya', 1);
$std2 = new Student('Petya', 2);

$arr = [
    $std,
    $std2
];

foreach ($arr as $ar){
    echo ' name: ' . $ar->name . ' course: ' . $ar->course . '<br>';
}
*/

/*
echo '<pre>';
var_dump($arr);
echo '</pre>';
*/

/*
//если private
class Student
{
    private $name;
    private $course;

    public function __construct($name, $course){
        $this->name = $name;
        $this->course = $course;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCourse()
    {
        return $this->course;
    }
}
*/

class Student
{
    private $name;
    private $course = 1;


    public function getName()
    {
        return $this->name;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setCourse($course)
    {
        if($this->isCorrectCourse($course)){
            $this->course = $course;
        }

    }

    //ИНКАПСУЛЯЦИЯ - свойство системы, позволяющее объеденить данные и методы работающие с ними(с этими данными),
        // а также скрыть детали реализации от пользователя
    private function isCorrectCourse($course) // метод ИНКАПСУЛЯЦИИ
    {
        if ($course >= 1 && $course <= 5) {
            return true;
        } else {
            return false;
        }
    }
}

$std = new Student;
$std->setName('Vasya');
$std->setCourse(3);

$std2 = new Student;
$std2->setName('Petya');
$std2->setCourse(9);

$arr = [
    $std,
    $std2
];

foreach ($arr as $ar){
    echo ' name: ' . $ar->getName() . ' course: ' . $ar->getCourse() . '<br>';
}

//ИНКАПСУЛЯЦИЯ - свойство системы, позволяющее объеденить данные и методы работающие с ними(с этими данными),
// а также скрыть детали реализации от пользователя
//1. каждому свойству свой класс

