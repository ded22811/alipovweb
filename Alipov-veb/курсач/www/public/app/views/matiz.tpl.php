<?php
require_once VIEWS . "/incs/header.php";
?>
    <section class="cars__title">
        <div class="container">
            Матизы(на газу(все почти(один на плове)))
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

            
                <?php require_once VIEWS ."/incs/matiz.php" ?>
            
                

            </div>
        </div>
    </div>
    <?php
require_once VIEWS . "/incs/footer.php";
?>