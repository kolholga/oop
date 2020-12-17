<?php


namespace classes\cart;


class Cart
{
    private $listCart = [];

    public function __construct()
    {
        if(!empty($_SESSION['cart'])){
            foreach ($_SESSION['cart'] as $item){
                $this->listCart[] = unserialize($item); // unserialize - восстанавливает из строки объект (обязательно передать строку)
            }
        }
    }

    public function addToCart(Product $product) //Product $product - указываем тип аргумента (можно передать только объект класса Product)
    {
        $this->listCart[] = $product;
        $_SESSION['cart'][] = serialize($product); //сохраняем так же и в СЕССИИ объект, преобразованный (serialize) в строку // serialize - превращает объект в строку
    }

    public function getCart()
    {
        echo '<div>';
        foreach ($this->listCart as $cart) {
            echo '<p> Название: ' . $cart->name . '</p>';
            echo '<p> Цена: ' . $cart->price . '</p>';
            echo '<p> Количество: ' . $cart->quantity . '</p>';
            echo '<br><hr><br>';
        }
        echo '</div>';
    }
}