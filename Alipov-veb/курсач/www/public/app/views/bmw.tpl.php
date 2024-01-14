<?php
require_once VIEWS . "/incs/header.php";
?>
    <section class="cars__title">
        <div class="container">
            BMW
        </div>
    </section>

    <section class="cars__filter">
        <div class="container">
        <?php require_once VIEWS ."/incs/carsFilter.php" ?>
        </div>
    </section>

    <div class="cars__cars">
        <div class="container">
            <div class="cars__cards">

            
                <?php require_once VIEWS ."/incs/bmw.php" ?>
            
                

            </div>
        </div>
    </div>
    <?php
require_once VIEWS . "/incs/footer.php";
?>