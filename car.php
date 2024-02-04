<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/iconsfont.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <title>Інформація про вантаж</title>
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
            <section class="car main__section-page __container">
                <div class="info__header">
                    <div class="info__name-wrap">
                        <h2 class="info__name">Volkswagen Crafter 2019</h2>
                        <div class="info__descript-wrap">
                            <p class="info__price">500₴</p>
                            <p class="info__subprice">Ціна за добу</p>
                        </div>
                    </div>

                    <div class="info__marks">
                        <p class="info__mark-icon __icon-license-car" title="Преміум транспорт"></p>
                    </div>
                </div>

                <div class="car__slider">
                    <div class="car__slider-track">
                        <img src="../img/car1.webp" class="car__slider-item">
                        <img src="../img/car2.webp" class="car__slider-item">
                        <img src="../img/car3.webp" class="car__slider-item">
                        <img src="../img/car4.webp" class="car__slider-item">
                    </div>
                </div>

                <div class="car__subslider">
                    <div class="car__subslider-point">
                        <p class="car__subslider-icon __icon-map"></p>
                        <div class="car__subslider-text">
                            <p class="car__subslider-title">Кременчук</p>
                            <p class="car__subslider-subtitle">Полтавська область</p>
                        </div>
                    </div>

                    <div class="car__control">
                        <p class="car__control-text"><span id="car__slider-counter">2</span> / 12</p>
                        <div class="car__control-arrows">
                            <p class="car__control-icon __icon-left_arr __prev"></p>
                            <p class="car__control-icon __icon-right_arr __next"></p>
                        </div>
                    </div>
                </div>

                <div class="car__info">
                    <p class="car__info-headline">Технічні характеристики</p>
                    <div class="car__info-list">
                        <div class="car__info-item">
                            <p class="car__info-icon __icon-wheel-mode"></p>
                            <div class="car__info-text">
                                <p class="car__info-title">Передній</p>
                                <p class="car__info-subtitle">Привід</p>
                            </div>
                        </div>

                        <div class="car__info-item">
                            <p class="car__info-icon __icon-type-body"></p>
                            <div class="car__info-text">
                                <p class="car__info-title">Рефрижератор</p>
                                <p class="car__info-subtitle">Тип кузову</p>
                            </div>
                        </div>

                        <div class="car__info-item">
                            <p class="car__info-icon __icon-engine"></p>
                            <div class="car__info-text">
                                <p class="car__info-title">2.0</p>
                                <p class="car__info-subtitle">Об’єм двигуна</p>
                            </div>
                        </div>

                        <div class="car__info-item">
                            <p class="car__info-icon __icon-power"></p>
                            <div class="car__info-text">
                                <p class="car__info-title">159 к.с</p>
                                <p class="car__info-subtitle">Потужність</p>
                            </div>
                        </div>

                        <div class="car__info-item">
                            <p class="car__info-icon __icon-gearbox"></p>
                            <div class="car__info-text">
                                <p class="car__info-title">Механічна</p>
                                <p class="car__info-subtitle">Тип КПП</p>
                            </div>
                        </div>

                        <div class="car__info-item">
                            <p class="car__info-icon __icon-info-edit"></p>
                            <div class="car__info-text">
                                <p class="car__info-title">152700 км.</p>
                                <p class="car__info-subtitle">Пробіг</p>
                            </div>
                        </div>

                        <div class="car__info-item">
                            <p class="car__info-icon __icon-info-edit"></p>
                            <div class="car__info-text">
                                <p class="car__info-title">Газ/Бензин</p>
                                <p class="car__info-subtitle">Тип двигуна</p>
                            </div>
                        </div>

                        <div class="car__info-item">
                            <p class="car__info-icon __icon-weight"></p>
                            <div class="car__info-text">
                                <p class="car__info-title">10000 кг.</p>
                                <p class="car__info-subtitle">Тонажність</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="cargo__block car__description">
                    <p class="cargo__block-headline">Опис транспорту</p>
                    <p class="cargo__block-description">Замовлення перевезення наших бетонних плит - це швидкий та
                        безпечний спосіб доставки будівельного матеріалу на будь-яку будівельну площадку. Незалежно
                        від розміру чи обсягу вашого проекту, наші плити готові до перевезення в найкращому стані,
                        забезпечуючи безперебійне використання для вашої будівлі чи інфраструктурного об'єкту. </p>
                </div>

                <div class="user__block">
                    <a href="user.php" class="user__block-item">
                        <img src="../img/user.jpg" alt="" class="user__block-image">
                        <div class="user__block-text">
                            <p class="user__block-name">Ковальчук Олександр Ігорович</p>
                            <p class="user__block-subtitle">Фізична особа</p>
                        </div>
                    </a>

                    <p class="user__block-line"></p>

                    <div class="user__block-item">
                        <p class="user__block-icon __icon-phone"></p>
                        <div class="user__block-text">
                            <a href="tel:" class="user__block-title">+38(067)-963-08-91</a>
                            <p class="user__block-subtitle">Контактний номер</p>
                        </div>
                    </div>

                    <p class="user__block-line"></p>

                    <div class="user__block-item">
                        <p class="user__block-icon __icon-average-star"></p>
                        <div class="user__block-text">
                            <p class="user__block-title">5,4</p>
                            <p class="user__block-subtitle">Рейтинг користувача</p>
                        </div>
                    </div>

                </div>

                <section class="main__section reviews">
                    <div class="reviews__head">
                        <div class="reviews__head-text">
                            <h3>Відгуки про платформу</h3>
                            <p class="main__subheadline">Відгуки про користувача – це не просто слова, а реальні
                                враження та
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
                                    платформу для організації перевезень. Цей інноваційний інструмент дозволяє нам
                                    ефективно
                                    керувати нашим транспортним парком та знаходити оптимальні маршрути для доставки
                                    вантажів. Легка навігація, надійність та зручність взаємодії з іншими учасниками
                                    ринку
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
                                    платформу для організації перевезень. Цей інноваційний інструмент дозволяє нам
                                    ефективно
                                    керувати нашим транспортним парком та знаходити оптимальні маршрути для доставки
                                    вантажів. Легка навігація, надійність та зручність взаємодії з іншими учасниками
                                    ринку
                                    роблять цю платформу незамінною для наших потреб. </p>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="main__section qr-code">
                    <div class="qr-code__header">
                        <h3>Діліться транспортом з легкістю та QR-магією</h3>
                        <p class="qr-code__subtitle">Діліться транспортом з легкістю, створюючи QR-коди, які надають
                            миттєвий доступ до необхідної інформації</p>
                    </div>

                    <img src="../img/qr.png" class="qr-code__image">
                </section>

            </section>
        </main>

        <footer>Footer</footer>
    </div>
    <script type="text/javascript" src="../js/script.js"></script>
    <script>
    const Slider = new slider(
        $('.car__slider-track'),
        $('.car__slider'),
        $('.__prev'),
        $('.__next'),
        $('.car__slider-item'),
        2,
        1,
        30,
        [{
            width: '992',
            count: '2'
        }, ]
    );

    console.log(Slider.counter);
    </script>
</body>

</html>