<?php require_once VIEWS . "/incs/header.php";?>

    <div class="container">

        <section class="register" id="reg">
        <div class="logReg__title reg__title">
                Регистрация
            </div>
            <form class="form-logReg" method="post" action="">
                <div class="reg__input">
                    <input type="text" name="name" placeholder="Имя">
                </div>
                <div class="reg__input">
                    <input type="text" name="mail" placeholder="E-mail">
                </div>
                <div class="reg__input">
                    <input type="text" name="pass" placeholder="Пароль">
                </div>
                <div class="reg__input">
                    <input type="text" name="repass" placeholder="Повторить пароль">
                </div>
                <div class="register__errors">
                <?php echo  $errorsMessege ?>
                </div>
                <div class="toLog">
                    <a href="login" class="toregLog" id="toLog">Уже зарегистрированны? Авторизуйтесь!</a>
                </div>
                <div class="reg__button">
                    <button class="reg__button-btn">Зарегистрироваться</button>
                </div>
            </form>
        </section>

    </div>




    <?php require_once VIEWS . "/incs/footer.php" ?>