<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/iconsfont.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <title>Головна сторінка</title>
</head>

<body>

    <div class="load-page">
        <div class="load-page__body">
            <div class="loader"></div>
        </div>
    </div>

    <div class="wrapper">

        <header class="header">
            <div class="__container header__wrapper">
                <img src="img/logo.svg" class="navbar__logo">
                <nav class="navbar">
                    <ul class="navbar__list">
                        <li class="navbar__item"><a href="">Головна</a></li>
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
                                <p class="navbar__user-subtitle">Фізична особа</p>
                                <p class="navbar__user-headline">Ковальчук О. І.</p>
                            </div>
                        </a>
                    </ul>
                </nav>
                <p class="navbar__menu-start __icon-menu"></p>
            </div>
        </header>

        <main class="main">
            <section class="offer main__section-page __left-container">
                <div class="offer__text">
                    <h1>Відправляйся в подорож з нами</h1>
                    <p class="offer__description">З нашою платформою кожен маршрут – пригода</p>
                    <div class="offer__btns">
                        <a href="" class="offer__btn">Для фізичних осіб</a>
                        <a href="" class="offer__btn">Для підприємців</a>
                    </div>
                </div>
                <div class="offer__image"></div>
            </section>

            <section class="service __container main__section">
                <h3>Наші послуги</h3>
                <p class="main__subheadline">Ми пропонуємо вам не просто послуги, а найвищий ступінь задоволення ваших
                    очікувань</p>

                <div class="service__content">
                    <div class="service__block">
                        <p class="service__icon __icon-cargo_add"></p>
                        <p class="service__headline">Новий вантаж</p>
                        <p class="service__description">Маєте власний вантаж але не знаете чим його перевезти? Просто
                            додайте вантаж та очікуйте на відповід</p>
                        <a href="new-cargo.php" class="service__btn">Додати вантаж</a>
                    </div>

                    <div class="service__block">
                        <p class="service__icon __icon-cargos"></p>
                        <p class="service__headline">Біржа вантажів</p>
                        <p class="service__description">Маєте власний транспорт але не знаете де знайти вантаж? Наша
                            біржа допоможе вам з цим питанням</p>
                        <a href="cargos.php" class="service__btn">Біржа вантажів</a>
                    </div>

                    <div class="service__block">
                        <p class="service__icon __icon-car_add"></p>
                        <p class="service__headline">Новий транспорт</p>
                        <p class="service__description">Хочете здавати транспорт в аренду? Просто додайте його на нашу
                            платформу та очікуйте клієнтів</p>
                        <a href="new-car.php" class="service__btn">Додати транспорт</a>
                    </div>

                    <div class="service__block">
                        <p class="service__icon __icon-cars"></p>
                        <p class="service__headline">Біржа транспорту</p>
                        <p class="service__description">Хочете знайти транспорт в аренду? Наша транспортна біржа
                            допоможе з цим питанням</p>
                        <a href="cars.php" class="service__btn">Біржа транспорту</a>
                    </div>

                </div>


            </section>

            <!-- <section class="main__section __container">
                <h3>Для кого підходить</h3>
                <p class="main__subheadline">Наша платформа - це універсальний інструмент для всіх, хто цінує зручність
                    та ефективність</p>

                <div class="about">
                    <div class="about__block">
                        <div class="about__block-text">
                            <p class="about__headline">Водіям</p>
                            <p class="about__description">Забезпечує швидкий пошук та додаткові можливості для водіїв у
                                логістичній сфері перевезень</p>
                        </div>
                    </div>

                    <div class="about__block">
                        <div class="about__block-text">
                            <p class="about__headline">Фізичним особам</p>
                            <p class="about__description">Спрощує організацію перевезень, дозволяючи швидко знаходити
                                вантаж або транспорт</p>
                        </div>
                    </div>

                    <div class="about__block">
                        <div class="about__block-text">
                            <p class="about__headline">Підприємствам</p>
                            <p class="about__description">Сприяє ефективному управлінню логістикою, знаходить швидкі та
                                вигідні перевезення або транспорт</p>
                        </div>
                    </div>
                </div>
            </section> -->

            <!-- <section class="main__section __container reviews">
                <div class="reviews__head">
                    <div class="reviews__head-text">
                        <h3>Відгуки про платформу</h3>
                        <p class="main__subheadline">Відгуки про користувача – це не просто слова, а реальні враження та
                            досвід
                        </p>
                    </div>

                    <div class="reviews__arrows">
                        <p class="reviews__arrow __icon-left_arr"></p>
                        <p class="reviews__arrow __icon-right_arr"></p>
                    </div>
                </div>

                <div class="reviews__slider">
                    <div class="reviews__track">

                        <div class="reviews__block">
                            <div class="reviews__block-head">
                                <img src="../img/user.jpg" class="reviews__image">
                                <div class="reviews__stars">
                                    <p class="reviews__star reviews__star--active __icon-star"></p>
                                    <p class="reviews__star reviews__star--active __icon-star"></p>
                                    <p class="reviews__star reviews__star--active __icon-star"></p>
                                    <p class="reviews__star reviews__star--active __icon-star"></p>
                                    <p class="reviews__star __icon-star"></p>
                                </div>
                            </div>
                            <p class="reviews__headline">Ковальчук Олександр Ігорович</p>
                            <p class="reviews__description">Фізична особа</p>
                            <p class="reviews__review">Наша компанія з великим задоволенням використовує логічну
                                платформу для організації перевезень. Цей інноваційний інструмент дозволяє нам ефективно
                                керувати нашим транспортним парком та знаходити оптимальні маршрути для доставки
                                вантажів. Легка навігація, надійність та зручність взаємодії з іншими учасниками ринку
                                роблять цю платформу незамінною для наших потреб. </p>
                        </div>

                        <div class="reviews__block">
                            <div class="reviews__block-head">
                                <img src="../img/user.jpg" class="reviews__image">
                                <div class="reviews__stars">
                                    <p class="reviews__star reviews__star--active __icon-star"></p>
                                    <p class="reviews__star reviews__star--active __icon-star"></p>
                                    <p class="reviews__star reviews__star--active __icon-star"></p>
                                    <p class="reviews__star reviews__star--active __icon-star"></p>
                                    <p class="reviews__star __icon-star"></p>
                                </div>
                            </div>
                            <p class="reviews__headline">ТОВ “ЛогіСмарт”</p>
                            <p class="reviews__description">Підприємство</p>
                            <p class="reviews__review">Наша компанія з великим задоволенням використовує логічну
                                платформу для організації перевезень. Цей інноваційний інструмент дозволяє нам ефективно
                                керувати нашим транспортним парком та знаходити оптимальні маршрути для доставки
                                вантажів. Легка навігація, надійність та зручність взаємодії з іншими учасниками ринку
                                роблять цю платформу незамінною для наших потреб. </p>
                        </div>

                    </div>
                </div>
            </section> -->
        </main>

        <!-- <footer class="footer">
            <div class="footer__wrapper __container">
                <div class="footer__left">
                    <a href="" class="navbar__logo"><img src="img/logo.svg"></a>
                    <p class="footer__copyright">2024 © HTTP-Logistic Service</p>
                </div>

                <div class="footer__right">
                    <ul class="footer__list">
                        <li class="footer__item-head"><a href="">Головна</a></li>
                        <li class="footer__item"><a href="">Правила платформи</a></li>
                        <li class="footer__item"><a href="">Політика конфіденційності</a></li>
                    </ul>

                    <ul class="footer__list">
                        <li class="footer__item-head">Вантажі</li>
                        <li class="footer__item"><a href="">Біржа вантажів</a></li>
                        <li class="footer__item"><a href="">Додати вантаж</a></li>
                    </ul>

                    <ul class="footer__list">
                        <li class="footer__item-head">Транспорт</li>
                        <li class="footer__item"><a href="">Біржа транспорту</a></li>
                        <li class="footer__item"><a href="">Додати транспорт</a></li>
                    </ul>
                </div>
            </div>
        </footer> -->
    </div>
    <script type="text/javascript" src="../js/script.js"></script>
    <script>
    loading();
    </script>
</body>

</html>