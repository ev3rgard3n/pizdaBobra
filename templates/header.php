<header>
    <div class="d-flex w-100  justify-between bg-sky vh-5">
        <div class="logo w-25">
            <a href="index.php"><img src="" alt="Записываемся на ногточки"></a>
        </div>
        <div class="d-flex justify-evenly w-30">
            <a href="#"><p>Мастера</p></a>
            <a href="#"><p>О нас</p></a>

            <?php if (isset($_SESSION['user'])): ?>
                <a href="#"><p>Профиль</p></a>

            <?php else: ?>
                <a href="login.php"><p>Войти</p></a>
            <?php endif; ?>
        </div>



    </div>

</header>
