<?php


class Cookie
{
    /**
     * метод устанавливает значение $value в куку с именем $name
     * @param $name
     * @param $value
     * @return bool
     */
    static public function setCookie($name, $value)
    {
        if ($name != '' && $value != '') {
            setcookie($name, $value, time() + 84600, '/'); //84600 = 60*60*24
            return true;
        } else {
            return false;
        }
    }

    /**
     * метод получает значение куки с именем $name
     * @param $name
     * @return mixed
     */
    static public function getCookie($name)
    {
        if ($name != '' && $_COOKIE[$name] != '') {
            return $_COOKIE[$name];
        } else {
            echo 'cookie с таким именем не найдены';
        }
    }
}