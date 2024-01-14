<?php
require_once VIEWS . "/incs/header.php";
?>
    <section class="cars__title">
        <div class="container">
            Машыны
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

                <?php require_once VIEWS ."/incs/allCars.php" ?>
                

            </div>
        </div>
    </div>
    <?php
require_once VIEWS . "/incs/footer.php";
?>