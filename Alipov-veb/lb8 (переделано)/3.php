<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="for3.css">
</head>
<body>
    <h2>Регистрация</h2>
    <form method="post" action="register.php">
        <div class="form-group">
            <label for="full_name">ФИО</label>
            <input type="text" id="full_name" name="full_name" required>
        </div>
        <div class="form-group">
            <label for="username">Логин</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="birthdate">Дата рождения</label>
            <input type="date" id="birthdate" name="birthdate" required>
        </div>
        <button type="submit">Зарегистрироваться</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $birthdate = $_POST['birthdate'];

    echo "ФИО: $full_name <br>";
    echo "Логин: $username <br>";
    echo "Пароль: $password <br>";
    echo "Дата рождения: $birthdate";
}
?>
