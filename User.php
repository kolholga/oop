<?php

// namespace - создаем пространство имен (регистро-независим)


//ИСКЛЮЧЕНИЯ + БАЗА ДАННЫХ Mysqli:
class User
{
    public $login;
    public $password;
    protected $mysql;

    public function __construct(mysqli $mysql, $login, $password) //mysqli $mysql - передаем объект класса mysqli
    {
        //ИСКЛЮЧЕНИЯ:
        /*
        if (strlen($login) < 3 || strlen($login) > 10) { //strlen - считает длину строки
            throw new Exception('Неправильный логин'); //выбрасывает ИСКЛЮЧЕНИЕ
        }

        if (strlen($password) < 3 || strlen($password) > 10) { //strlen - считает длину строки
            throw new Exception('Неправильный пароль'); //выбрасывает ИСКЛЮЧЕНИЕ
        }
        */
        $this->mysql = $mysql;
        $this->login = $login;
        $this->password = $password;
    }

    /**
     * метод добавления юзера(пользователя)
     * @return bool|mysqli_result
     */
    public function addUser()
    {
        $sql = "INSERT INTO `users` SET `login` = '" . $this->login . "', `password` = '" . $this->password . "'";
        return $this->mysql->query($sql);
    }

    /**
     * метод удаления юзера(пользователя)
     * @param $id
     * @return bool|mysqli_result
     */
    public function delete($id)
    {
        $sql = "DELETE FROM `users` WHERE `id` = " . intval($id);
        return $this->mysql->query($sql);
    }

    /**
     * метод редактирования
     * @param $id
     * @param array $arData
     * ['login' => 'Vasya', 'password' => '12345']
     */
    public function update($id, $arData = [])
    {
        if (!empty($arData)) {
            $sql = "UPDATE `users` SET ";
            $c = 0;
            foreach ($arData as $k => $val) {
                $sql .= "`{$k}` = '{$val}'";
                $c++;
                if ($c < count($arData)) {
                    $sql .= ", ";
                }
            }

            $sql .= " WHERE `id` = " . intval($id);

            //return $sql;
            return $this->mysql->query($sql);
        }
    }

    /**
     * Возвращает всех пользователей
     */
    public function getAll()
    {

    }

    /**
     * Возвращает пользователя по $id
     * @param $id
     */
    public function getById($id)
    {

    }
}

// если брошено ИСКЛЮЧЕНИЕ, обязательно д.б. блок try
/*
try {

    $user = new User('loggggg', 1212121);
    echo $user->addUser();

} catch (Exception $e) { // ловит ИСКЛЮЧЕНИЕ
    echo $e->getMessage(); //getMessage() - чтобы увидеть исключение
}
*/
//echo $user->login;