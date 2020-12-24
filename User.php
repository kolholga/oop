<?php

// namespace - создаем пространство имен (регистро-независим)


//ИСКЛЮЧЕНИЯ + БАЗА ДАННЫХ Mysqli:
class User
{
    public $login;
    public $password;
    protected $mysql;

    public function __construct(mysqli $mysql, $login = '', $password = '') //mysqli $mysql - передаем объект класса mysqli
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
        $sql = "SELECT `login` FROM `users` WHERE `id`=" . $id;
        return $this->mysql->query($sql);
    }

    public function getByLogin($login)
    {
        $sql = "SELECT * FROM `users` WHERE `login`='" . $login . "'";
        return $this->mysql->query($sql);
    }

    public function register($userParam) // регистрация // $userParam - массив login password
    {
        $resCheckUser = $this->getByLogin($userParam['login']);

        if ($resCheckUser->num_rows > 0) {
            return 'Такой пользователь уже есть в базе';
        } else {
            //$sql = "INSERT INTO `users` SET `login` = '', `password` = ''"; //шаблон
            $sql = "INSERT INTO `users` SET `login` = '" . $userParam['login'] . "', `password` = '" . md5($userParam['password']) . "'";
            $this->mysql->query($sql);
            return 'Вы успешно зарегистрированы';
        }
    }

    public function auth($userParam) // авторизация // $userParam - массив login password
    {
        $login = htmlspecialchars($userParam['login']);
        $pass = md5($userParam['password']);
        //$sql = "SELECT * FROM `users` WHERE `login` = '' AND `password` = ''"; //шаблон
        $sql = "SELECT * FROM `users` WHERE `login` = '" . $login . "' AND `password` = '" . $pass . "'";
        if ($this->mysql->query($sql)->num_rows > 0) {
            $_SESSION['login'] = $login;
            echo 'Пользователь авторизован';
        } else {
            echo 'Неправильно введены данные';
        }
    }

    static public function isAuth()
    {
        $mysql = new mysqli('localhost', 'root', 'root', 'test');
        $user = new self($mysql, '22222222');
        echo $user->login;

        if(isset($_SESSION['login'])){
            return true;
        }
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