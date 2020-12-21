<?php


class Form
{
    private $action = "";
    private $method = "post";

    public function __construct($action = "", $method = "post")
    {
        $this->action = $action;
        $this->method = $method;
    }

    public function beginForm()
    {
        return '<form action="' . $this->action . '" method="' . $this->method . '" enctype="multipart/form-data">';
    }

    public function endForm()
    {
        return '</form>';
    }

    /**
     * Принимает массив вида [key => val], где
     * key - название атрибута
     * val - значение атрибута
     * @param $param
     * @return string
     */
    public function input($param) // в аргумент передаем массив
    {
        $str = '<input ';
        foreach ($param as $key => $value) {
            //$str .= 'type="text" '; //шаблон
            $str .= $key . '="' . $value . '" ';
        }
        $str .= ' />';
        return $str;
    }

    /**
     * Принимает массив вида [key => val], где
     * key - название атрибута
     * val - значение атрибута
     * @param $param
     * @param $value - название кнопки
     * @return string
     */
    public function button($param, $value)
    {
        $str = '<button ';
        foreach ($param as $key => $val) {
            $str .= $key . '="' . $val . '" ';
        }
        $str .= '>' . $value . '</button>';
        return $str;
    }

    /**
     * Принимает массив param вида [key => val], где
     * key - название атрибута
     * val - значение атрибута
     *
     * arOption - массив вида [key => val], где
     * key - значение для value тега option
     * val - имя для option
     * @param $param
     * @param $arOptions
     * @return string
     */
    public function select($param, $arOptions)
    {
        $selected = '';
        if(!empty($_REQUEST[$param['name']])){
            $selected = $_REQUEST[$param['name']];
        }

        $str = '<select ';
        foreach ($param as $key => $val) {
            $str .= $key . '="' . $val . '" ';
        }
        $str .= '>';
        $str .= '<option value="">Все</option>';
        foreach ($arOptions as $k => $option) {
            $sel = '';
            if($selected == $k){
                $sel = ' selected';
            }
            //$str .= '<option value=""></option>'; //шаблон
            $str .= '<option value="' . $k . '" '.$sel.'>' . $option . '</option>';
        }
        $str .= '</select>';
        return $str;
    }
}