<?php

class Login {
    public $login;
    public $pass;

    public function checklogin($login, $pass) {
        $login=$_POST["login"];
        $pass=$_POST["pass"];


        if ($login=="admin")
        {
            setcookie("login", $login, time()+3600);
            echo $_COOKIE["login"];
        }

        if ($login=="admin" && $pass="125") {
            echo "Привет, {$login}";


        }
        else echo
        "
<div style=\"margin-left: 70%;\">
<form action=\"\" method=\"POST\">
Авторизация<br>
Логин
<input style=\"margin-left: 11px;\" type=\"text\" name=\"login\" value=\"\">
<br>
Пароль
<input type=\"password\" name=\"pass\" value=\"\">
<br>
<input type=\"checkbox\" name=\"check\">
Запомнить<br>
<input type=\"submit\" name=\"submit\" value=\"Войти\">
</form>
</div>";

    }
}

?>