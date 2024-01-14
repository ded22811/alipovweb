<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title ?? 'Cars' ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cars.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/LogReg.css">
    <link rel="stylesheet" href="css/user.css">
</head>
<body>
    <header id="header-section">
        <div class="container">
            <div class="header">
                <div class="header-logo">
                    <a href="/"><img class="header-logo__img" src="img/main/logo.svg" alt="HKinvision logo"></a>
                </div>
                <nav class="nav-main">
                    <ul class="nav-main__list">
                        <li class="nav-main__item">
                            <a class="nav-main__link" href="/">Главная</a>
                        </li>
                        <li class="nav-main__item">
                            <a class="nav-main__link" href="allCars">Машины</a>
                        </li>
                        <li class="nav-main__item">
                            <a class="nav-main__link" href="products">Товары</a>
                        </li>
                    </ul>
                </nav>
                <a class="btn-primary header__btn" href="login">Авторизация/Регистрация</a>
            </div>
            <div class="header1">
                <div class="header1-logo">
                    <a href=""><img class="header1-logo__img" src="img/main/logo.svg" alt="HKinvision logo"></a>
                </div>
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">Меню</button>
                    <div id="myDropdown" class="dropdown-content">
                      <a href="/">Главная</a>
                      <a href="allCars">Машины</a>
                      <a href="products">Товары</a>
                    </div>
                  </div>
                  <a class="btn-primary1 header__btn1" href="logReg">Авторизация/Регистрация</a>
            </div>
        </div>
    </header>