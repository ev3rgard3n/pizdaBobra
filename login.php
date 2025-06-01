<?php
    include __DIR__ . "/service/login.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">

    <title>Document</title>
</head>
<body>
    <?php
        include __DIR__ . "/templates/header.php";
    ?>

    <main>
        <div class="containder">
            <div class='d-flex justify-center align-center mt-5'>
                <div class="login_user">
                    <form action="login.php" method="post">

                        <div class="mt-5">
                            <input type="email" placeholder="Почта" name="email" required>
                        </div>
                        <div class="mt-5">
                            <input type="password" placeholder="Пароль" name="password" required>
                        </div>

                        <button type="sumbmit" class="mt-5" name="btn-log">Войти</button>
                    </form>
                    <a href="reg.php"><p>Нет аккаунта?</p></a>
                </div>

            </div>

        </div>

    </main>

    <?php
        include __DIR__ . "/templates/footer.php";
    ?>

</body>
</html>