<?php require_once __DIR__ . "/incs/header.php" ;

$title = 'Машины';
?>



<section class="cars__title">
        <div class="container">
            Наши машины(и один матиз(на плове))
        </div>
    </section>

    <div class="cars__cars">
        <div class="container">
            <div class="cars__cards">

            <div class="cars__card">
                    <div class="cars__card-img">
                        <img src="img/main/rent.jpg" alt="">
                    </div>
                    <div class="cars__card-title">
                        Matiz на плове
                    </div>
                    <div class="cars__card-price">
                        $250 000
                    </div>
                    <div class="cars__card-button">
                        <a onclick="showErrorMessage()">Смотреть</a>
                    </div>
                </div>

                <div class="cars__card">
                    <div class="cars__card-img">
                    <img src="img/main/rent_2.jpg" alt="">
                    </div>
                    <div class="cars__card-title">
                        Машина похожая на Aston Martin
                    </div>
                    <div class="cars__card-price">
                        $50 000
                    </div>
                    <div class="cars__card-button">
                        <a onclick="showErrorMessage()">Смотреть</a>
                    </div>
                </div>

                <div class="cars__card">
                    <div class="cars__card-img">
                    <img src="img/main/rent_3.jpg" alt="">
                    </div>
                    <div class="cars__card-title">
                        Jaguar F-Pace
                    </div>
                    <div class="cars__card-price">
                        $32 000
                    </div>
                    <div class="cars__card-button">
                        <a onclick="showErrorMessage()">Смотреть</a>
                    </div>
                </div>

                <div class="cars__card">
                    <div class="cars__card-img">
                    <img src="img/main/rent_4.jpg" alt="">
                    </div>
                    <div class="cars__card-title">
                        Porsche Cayenne
                    </div>
                    <div class="cars__card-price">
                        $40 000
                    </div>
                    <div class="cars__card-button">
                        <a onclick="showErrorMessage()">Смотреть</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
  

  
<?php require_once __DIR__ . "/incs/footer.php" ?>
  
  <script>
    function showErrorMessage() {
      alert("Только авторизованные пользователи могут получить доступ.");
    }
  </script>
</body>
</html>