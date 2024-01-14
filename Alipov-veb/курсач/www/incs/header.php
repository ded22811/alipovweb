<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icon/fav.ico">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/logReg.css">
    <link rel="stylesheet" href="css/cars.css">
    <link rel="stylesheet" href="css/person.css">
    <title><?=$title ?? 'Cars' ?></title>
</head>
<body>
<header id="header-section">
        <div class="container">
            <div class="header">
                <div class="header-logo">
                    <a href="index.php"><img class="header-logo__img" src="img/main/logo.svg" alt="HKinvision logo"></a>
                </div>
                <nav class="nav-main">
                    <ul class="nav-main__list">
                        <li class="nav-main__item">
                            <a class="nav-main__link" href="index.php">Главная</a>
                        </li>
                        <li class="nav-main__item">
                            <a class="nav-main__link" href="cars.php">Машины</a>
                        </li>
                    </ul>
                </nav>
                <a class="btn-primary header__btn" href="logReg.php">Авторизация/Регистрация</a>
            </div>
            <div class="header1">
                <div class="header1-logo">
                    <a href=""><img class="header1-logo__img" src="img/main/logo.svg" alt="HKinvision logo"></a>
                </div>
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">Меню</button>
                    <div id="myDropdown" class="dropdown-content">
                      <a href="index.php">Главная</a>
                      <a href="allCars">Машины</a>
                    </div>
                  </div>
                  <a class="btn-primary1 header__btn1" href="logReg.php">Авторизация/Регистрация</a>
            </div>
        </div>
    </header>