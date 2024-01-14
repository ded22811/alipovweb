<?php
$title = 'Регестрация';

require_once CONFIG . '/db.php';


  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    $repass = $_POST['repass'];
    
    $errorsMessege = '';

    if(empty($name) || empty($mail) || empty($pass) || empty($repass)){
        $errorsMessege = "Заполни поля бляить";
    }else{
        if($pass != $repass){
            $errorsMessege = "Пароли не совпадают";
        }else{
            $sql = "INSERT INTO `users` (name,mail,pass) VALUES ('$name', '$mail', '$pass')";
            if($conn -> query($sql) === TRUE){
                $_SESSION["name"] = $name;
                $_SESSION["mail"] = $mail;
                header('Location: user');
            }else{
                $errorsMessege = "Ошибка регистрации";
            }
        }
    }
  }




require_once APP . "/entrance/register.tpl.php";