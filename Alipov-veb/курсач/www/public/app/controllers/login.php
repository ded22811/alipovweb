<?php
$title = 'Вход';

require_once CONFIG . '/db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $pass = $_POST['pass'];


    $errorsMessege = '';

    if(empty($name) || empty($pass)){
        $errorsMessege = 'Заполните все поля';
    }else{
        $sql = "SELECT * FROM `users` WHERE name='$name' AND pass='$pass'";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $_SESSION["name"] = $name;
                $_SESSION["mail"] = $mail;
                header('Location: user');
            }
        }else{
            $errorsMessege = 'Неверный логин или пароль=,(';
        }
    }

}



require_once APP . "/entrance/login.tpl.php";