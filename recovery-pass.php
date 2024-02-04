<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/iconsfont.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <title>Відновлення паролю</title>
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
            <section class="main__section-page __left-container">
                <h2>Відновлення паролю</h2>
                <p class="main__subheadline">Довірте нам ваші цінні інформаційні ресурси, і ми зробимо все можливе для
                    їх успішного відновлення</p>

                <form action="" method="post" class="sign-up__form">

                    <div class="input__wrapper">
                        <p class="input__icon __icon-login"></p>
                        <div class="input__content">
                            <label for="login" class="input__label">Введіть ваш логін</label>
                            <input type="text" id="login" class="input">
                        </div>
                    </div>

                    <div class="input__wrapper">
                        <p class="input__icon __icon-mail"></p>
                        <div class="input__content">
                            <label for="mail" class="input__label">Введіть ваш e-mail</label>
                            <input type="text" id="mail" class="input">
                        </div>
                    </div>

                    <button type="submit" class="input__btn">Відновити</button>

                </form>
            </section>
        </main>

        <footer>Footer</footer>
    </div>
</body>

</html>