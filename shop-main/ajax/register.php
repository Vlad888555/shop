<?php
    require_once "../vendor/autoload.php";
    use App\DB;
    $db = new DB();
    $login = $_POST["login"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $result = $db->register($login, $password, $name, $phone);
    session_start();

    if ($result) {
        $_SESSION["message"] = "Вы успешино зарегистрировались ";
    }
    else{
        $_SESSION["message"] = "При регистрации произошла ошибка";
    }
    header("Location: " . $_SERVER["HTTP_REFERER"]);
