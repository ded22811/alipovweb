<?php require_once VIEWS . "/incs/header.php";?>

    <div class="container">

        <section class="logIn" id="logIn">
            <div class="logReg__title logIn__title">
                Войти
            </div>
            <form class="form-logReg" method="post" action="">
                <div class="logIn__input">
                    <input type="text" name="name" placeholder="Имя">
                </div>
                <div class="logIn__input">
                    <input type="text" name="pass" placeholder="Пароль">
                </div>
                <div class="logIn__errors">
                    <?php echo  $errorsMessege ?>
                </div>
                <div class="toReg">
                    <a href="register" class="toregLog">Регистрация</a>
                </div>
                <div class="logIn__button">
                    <button class="logIn__button-btn">Войти</button>
                </div>
            </form>
        </section>

    </div>



    <?php require_once VIEWS . "/incs/footer.php" ?>