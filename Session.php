<?php


class Session
{
    public function __construct()
    {
        session_start();
        //session_destroy();
    }

    public function setSession($key, $val)
    {
        $_SESSION[$key] = $val;
    }

    public function getSession($session)
    {
        return $_SESSION[$session];
    }

    public function delSession($session)
    {
        unset($_SESSION[$session]); //unset - удаляет переменную массива
    }

    public function isSession($session)
    {
        if (isset($_SESSION[$session])) {
            return true;
        }else{
            return false;
        }
    }
}