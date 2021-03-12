<?php
    if (isset($_REQUEST['check'])){
        setcookie("login", md5(md5($_REQUEST['login'])), time()+60*60, "/");
        setcookie("password", md5(md5($_REQUEST['password'])), time()+60*60, "/");
        header("Location: /admin");
    }
?>



<h1>Зарегистрируйтесь</h1>

<form action="" method="GET">
    Введие логин: <input type="text" name="login"><br><br>
    Введие пароль: <input type = "text" name = "password"><br> <br>
    <input type="submit" value="Войти" name = "check">
</form>


