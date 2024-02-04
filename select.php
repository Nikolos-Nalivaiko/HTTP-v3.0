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
            <section class="select-page main__section-page __container">
                <h2>Оберіть тип профілю</h2>
                <p class="main__subheadline">Оберіть тип профілю, щоб налаштувати ваш персональний шлях в світі зручних
                    перевезень та оренди транспорту</p>
                <div class="select-page__content">
                    <a href="user-sign-up.php" class="select-page__block">
                        <p class="select-page__icon __icon-user"></p>
                        <p class="select-page__description">Підходить для</p>
                        <p class="select-page__headline">Фізичних осіб</p>
                    </a>

                    <a href="company-sign-up.php" class="select-page__block">
                        <p class="select-page__icon __icon-company"></p>
                        <p class="select-page__description">Підходить для</p>
                        <p class="select-page__headline">Підприємств</p>
                    </a>
                </div>
            </section>
        </main>

        <footer>Footer</footer>
    </div>
</body>

</html>