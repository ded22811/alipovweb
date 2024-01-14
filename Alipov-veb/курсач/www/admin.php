<!DOCTYPE html> 
<html>
<head>
    <title>Админ панель</title>
    <style>
body {
      font-family: Arial, sans-serif;
      background-color: #1a1a1a;
      color: #ffffff;
    }
    .form {
      margin-top: 20px;
      text-align: center;
    }
    .input1 {
      padding: 10px;
      margin: 5px;
      border: 2px solid #ff6600;
      border-radius: 5px;
    }
    .input1:focus {
      outline: none;
      border: 2px solid #ffcc99;
    }
    .input1::placeholder {
      color: #ff6600;
    }
    .input1[type="submit"] {
      background-color: #ff6600;
      color: #ffffff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .input1[type="submit"]:hover {
      background-color: #ff8533;
    }
    .logout {
      background-color: #ff6600;
      color: #ffffff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .logout:hover {
      background-color: #ff8533;
    }
    th {
      color: #ff6600;
    }
    </style>
</head>
<body>
<form class='form'action='delete_user.php' method='post'>
  <input type='text' class='input1' name='id' placeholder='ID пользователя'>
  <input type='submit' class='input1' value='Удалить'>
</form>

<form class='form' action='edit_user.php' method='post'>
  <input type='text' class='input1' name='id' placeholder='ID пользователя'>
  <input type='text' class='input1' name='login' placeholder='Новый логин'>
  <input type='text' class='input1' name='password' placeholder='Новый пароль'>
  <input type='text' class='input1' name='email' placeholder='Новый email'>
  <input type='submit' class='input1' value='Редактировать'>
</form>
<form amethod="post" action="authindex.php">
    <input type="submit" class="logout" name="logout" value="На главную">
</form>
</body>
</html>
<?php

require_once __DIR__ . "/config/db.php";

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
session_start();
if (!$_SESSION['authorized']) {
    header('Location: index.php');
    exit;
}
$sql = "SELECT id, login, password, email FROM users";
$result = $conn->query($sql);
if ($_SESSION['username']!="PALENOV") {
  header('Location: index.php');
  exit; }
echo "<table>";
echo "<tr><th>ID</th><th>Login</th><th>Password</th><th>Email</th></tr>";
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["login"]. "</td><td>" . $row["password"]. "</td><td>" . $row["email"]. "</td></tr>";
  }
} else {
  echo "0 results";
}
echo "</table>";
echo "
<style>
table {
    box-sizing: border-box;
  border-collapse: collapse;
  width: 100%;
}

th, td {
  border: 1px solid black;
  padding: 8px;
  text-align: center;
}

th {
  background-color: #f2f2f2;
}
</style>
";

?>


<?
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["logout"])) {
        session_unset();
        session_destroy(); 
        header("Location: main.php");
        exit;
    }
}
$conn->close();
?>