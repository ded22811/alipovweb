<?php
require_once VIEWS . "/incs/header.php";
?>
    
    <section class="user__panel-block">

        <div class="container">
            <div class="user-title">
                Профиль
            </div>
    
            <div class="user__panel">
    
                <div class="user__panel-info">
                    <div class="panel__info-name">
                        <?php echo $_SESSION['name'];?>
                    </div>
                    <div class="panel__info-name-editing">
                        <button class="user__panel-btn">Изменить имя</button>
                    </div>
                    <div class="panel__info-mail">
                    <?php echo $_SESSION['mail'];?>
                    </div>
                    <div class="panel__info-mail-editing">
                        <button class="user__panel-btn">Изменить почту</button>
                    </div>
                </div>
    
                 <div class="user__panel-basket">
                    <div class="panel__basket-image">
                        <img src="img/panel/karzina.png" alt="">
                    </div>

                    <div class="panel__basket-product">
                        <div class="panel__basket-product-name">
                            <span>Машыга MATIZ</span>
                        </div>
                        <div class="panel__basket-product-price">
                            Цена  <span>$999</span>
                        </div>
                    </div>

                    <div class="panel__basket-product">
                        <div class="panel__basket-product-name">
                            <span>Машыга MATIZ</span>
                        </div>
                        <div class="panel__basket-product-price">
                            Цена  <span>$999</span>
                        </div>
                    </div>


                    <div class="panel__basket-price">
                        Общая стоимость <span>$15</span>
                    </div>
                    <div class="panel__basket-button">
                        <button class="user__panel-btn">Заказать</button>
                    </div>
                 </div>
    
            </div>
        </div>

    </section>


    <?php
require_once VIEWS . "/incs/footer.php";
?>