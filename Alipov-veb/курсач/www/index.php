<?php
 require_once __DIR__ . "/incs/header.php"; 

 $title = 'Cars';
 ?>

<main>
        <section id="banner-section">
            <div class="container">
                <div class="banner">
                    <h2 class="banner__header">Продажа автомобилей класса ЛЮКС</h2>
                    <p class="banner__text">HKinvestor может предоставить в продажу самые эксклюзивные автомобили, такие как Matiz и Porsche.</p>
                    <div class="banner-links-wrap">
                        <a href="cars.php" class="btn-primary banner__link">Машины</a>
                        <a href="https://www.youtube.com/watch?v=UMvKpDjlKnA" target="_blank" class="btn-secondary banner__btn">Смотреть видео</a>
                    </div>
                    <div class="banner-features">
                        <span class="banner-features__text"><strong class="banner-features__text_strong">500+</strong>Люкс автомобилей</span>
                        <span class="banner-features__text"><strong class="banner-features__text_strong">#1</strong>Автомобиль по лучшей цене</span>
                    </div>
                </div>
            </div>
            <div class="banner-img"></div>
        </section>
        <section id="rent-section">
            <div class="container">
                <h2 class="title-section">Приобретите автомобиль класса люкс</h2>
                <div class="rent-wrap">
                    <div class="rent">
                        <div class="rent-content">
                            <span class="rent__name">Sportcars</span>
                            <a class="rent__link" href="cars.php">Discover</a>
                        </div>
                    </div>
                    <div class="rent">
                        <div class="rent-content rent-content2">
                            <span class="rent__name">Sportcars</span>
                            <a class="rent__link" href="cars.php">Discover</a>
                        </div>
                    </div>
                    <div class="rent">
                        <div class="rent-content rent-content3">
                            <span class="rent__name">Кроссоверы</span>
                            <a class="rent__link" href="cars.php">Discover</a>
                        </div>
                    </div>
                    <div class="rent">
                        <div class="rent-content rent-content4">
                            <span class="rent__name">Премиум Кроссоверы</span>
                            <a class="rent__link" href="cars.php">Discover</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="services-section">
            <div class="container">
                <h2 class="title-section services-section__title">Другие наши услуги</h2>
                <div class="services-wrap">
                    <div class="services">
                        <img class="services__img" src="img/main/services_1.jpg" alt="Private Charter service">
                        <h3 class="services__title">Трансфер</h3>
                        <p class="services__text"> HKinvestor также предлагает вам незаметный и быстрый трансфер на вертолете или частном самолете до дома.</p>
                    </div>
                    <div class="services">
                        <img class="services__img" src="img/main/services_2.jpg" alt="Chauffer Driven Car Rentals service">
                        <h3 class="services__title">Шофер до дома</h3>
                        <p class="services__text">Наши шоферы - профессиональные водители, которые обеспечивают сдержанное, надежное, пунктуальное и профессиональное обслуживание.</p>
                    </div>
                    <div class="services">
                        <img class="services__img" src="img/main/services_3.jpg" alt="Wedding Car Rentals service">
                        <h3 class="services__title">Жизнь в движении</h3>
                        <p class="services__text">Если вы хотите кататься стильно и элегантно, выберите один автомобиль из нашей роскошной коллекции.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="location-section">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A3491417e4eebdadc9f3b098ef7f9b156948613c64825bc74e800d013988d96c8&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
        </section>

<?php require_once __DIR__ . "/incs/footer.php"; ?>
    </main>
</body>
</html>