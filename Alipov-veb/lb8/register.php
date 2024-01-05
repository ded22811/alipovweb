<?php
  $servername = "хост";
  $username = "имя пользователя";
  $password = "пароль";
  $dbname = "база_данных";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Ошибка соединения: " . $conn->connect_error);
  }

  $fullname = $_POST['fullname'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $dob = $_POST['dob'];

  $sql = "INSERT INTO users (fullname, username, password, dob) VALUES ('$fullname', '$username', '$password', '$dob')";

  if ($conn->query($sql) === TRUE) {
    echo "Регистрация прошла успешно";
  } else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
?>
