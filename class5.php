<?php

class Helper
{
    /**
     * массив чисел
     * @var array
     */
    private $sumAr = [];

    /**
     * возвращает сумму чисел в sumAr
     * @return float|int
     */
    public function getSum() //метод getSum() - считает сумму массива
    {
       return array_sum($this->sumAr); //функция array_sum - считает сумму массива
    }

    /**
     * добавляет значение к массиву sumAr
     * @param $s
     * @return $this
     */
    public function setSum($s)
    {
        //только если число
        if(is_int($s)){ //если число
            $this->sumAr[] = $s;
        }
        //возвращает ссылку на свой объект для построения цепочки
        return $this; // в цепочке методов может учавствовать любой метод,
                            // возвращающий ссылку на объект текущкго класса

    }
}

$helper = new Helper();

    //ЕСЛИ СВ-ВО PUBLIC
//$helper->sumAr[] = 22;
//$helper->sumAr[] = 45;
//$helper->sumAr[] = 'hhhgh';

   //ЕСЛИ СВ-ВО PRIVATE
//$helper->setSum(5);
//$helper->setSum(6);
//$helper->setSum(9);
//$helper->setSum('45');

// В ЦЕПОЧКЕ МЕТОДОВ МОЖЕТ УЧАВСТВОВАТЬ ЛЮБОЙ МЕТОД,
     // ВОЗВРАЩАЮЩИЙ ССЫЛКУ НА ОБЪЕКТ ТЕКУЩКГО КЛАССА RETURN $THIS;
//$helper->setSum(5)->setSum(8)->setSum();

//echo $helper->getSum();

//echo $helper->setSum(4)->setSum(6)->setSum(12)->getSum(); // на каждом шаге превращается в объект
    //ИЛИ
$helper->setSum(4)->setSum(6)->setSum(12);
echo $helper->setSum();