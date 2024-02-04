<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/iconsfont.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <title>Авторизація</title>
</head>

<body>
    <div class="wrapper">

        <header class="header">
            <div class="__container header__wrapper">
                <img src="img/logo.svg" class="navbar__logo">
                <nav class="navbar">
                    <ul class="navbar__list">
                        <li class="navbar__item"><a href="/">Головна</a></li>
                        <li class="navbar__item">
                            <div class="navbar__dropdown-container">
                                <p class="navbar__dropdown-headline">Вантажі</p>
                                <div class="navbar__dropdown-content">
                                    <a href="#">Біржа вантажів</a>
                                    <a href="#">Додати вантаж</a>
                                </div>
                            </div>
                        </li>
                        <li class="navbar__item">
                            <div class="navbar__dropdown-container">
                                <p class="navbar__dropdown-headline">Транспорт</p>
                                <div class="navbar__dropdown-content">
                                    <a href="#">Біржа транспорту</a>
                                    <a href="#">Додати транспорт</a>
                                </div>
                            </div>
                        </li>
                        <!-- <li class="navbar__item"><a class="navbar__item-btn" href="">Увійти</a></li> -->
                        <a href="" class="navbar__user">
                            <img class="navbar__user-image" src="../img/user.jpg" alt="">
                            <div class="navbar__user-text">
                                <p class="navbar__user-headline">Ковальчук О. І.</p>
                                <p class="navbar__user-subtitle">Фізична особа</p>
                            </div>
                        </a>
                    </ul>
                </nav>
            </div>
        </header>

        <main class="main">
            <section class="sign-in main__section-page __left-container">
                <div class="sign-in__wrapper">
                    <h2>Ласкаво просимо</h2>
                    <p class="main__subheadline">Ласкаво просимо в наш віртуальний світ, де
                        можливості не мають меж, а
                        співпраця – легка та захоплива</p>

                    <form action="" method="post" class="sign-in__form">

                        <div class="input__wrapper input__wrapper-sign-in">
                            <p class="input__icon __icon-pass"></p>
                            <p class="input__icon-visible __icon-visible_pass"></p>
                            <div class="input__content">
                                <label for="pass" class="input__label">Введіть ваш пароль</label>
                                <input type="password" id="pass" class="input input__sign-in">
                            </div>
                        </div>

                        <div class="input__wrapper">
                            <p class="input__icon __icon-login"></p>
                            <div class="input__content">
                                <label for="login" class="input__label">Введіть ваш логін</label>
                                <input type="text" id="login" class="input input__sign-in">
                            </div>
                        </div>

                        <div class="input__checkbox-wrapper input__checkbox-wrapper--sign-in">
                            <input type="checkbox" id="checkbox" class="input__checkbox">
                            <label for="checkbox" class="input__checkbox-label">Запам’ятати мене</label>
                        </div>

                        <button type="submit" class="input__btn">Увійти</button>
                        <a href="recovery-select.php" class="input__btn input__btn-recover">Відновити дані</a>

                        <p class="input__descrition-sign-in">Не маєте акаунту ?<a href="select.php"> Створіть його</a></p>

                    </form>
                </div>
                <img src="../img/sign-in.svg">
            </section>
        </main>

        <footer>Footer</footer>
    </div>
</body>

</html>