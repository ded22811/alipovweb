<?php 
require_once __DIR__ . "/config/db.php";


if ($conn->connect_error) {
    die("Ошибка соединения: " . $conn->connect_error);
}

$errorMessage = "";
session_start();

$sql = "SELECT * FROM users WHERE login='{$_SESSION['username']}'";
$result = $conn->query($sql);

if ($result->num_rows >0) {
    $row = $result->fetch_assoc();
    $login = $row["login"];
    $password = $row["password"];
    $email = $row["email"];
} else {
    $errorMessage = "Ошибка получения данных пользователя";
}
    if (!$_SESSION['authorized']) {
        header('Location: index.php');
        exit;
    }
    $conn->close();
?>



<?php require_once __DIR__ . "/incs/authheader.php" ?>



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
                        $250000
                    </div>
                    <div class="cars__card-button">
                        <a href="/pdf/matiz.pdf" target="_blank">Смотреть</a>
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
                        <a href="/pdf/ast.pdf" target="_blank">Смотреть</a>
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
                        <a href="/pdf/jaga1.pdf" target="_blank">Смотреть</a>
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
                        <a href="/pdf/por.pdf" target="_blank">Смотреть</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
  

  
<?php require_once __DIR__ . "/incs/footer.php" ?>
</body>
</html>
  