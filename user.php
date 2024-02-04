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

    <div class="overlay-review">
        <div class="overlay-review__body">
            <div class="overlay-review__header">
                <p class="overlay-review__headline">Відгук про користувача</p>
                <p class="overlay-review__close overlay__close __icon-close"></p>
            </div>

            <form action="" method="post" class="overlay-review__form">
                <textarea class="overlay-review__input-text"></textarea>

                <p class="overlay-review__star-label">Наскільки ви оцінюєте користувача ?</p>

                <div class="reviews__stars overlay-review__stars">
                    <p class="reviews__star reviews__star--active __icon-star"></p>
                    <p class="reviews__star reviews__star--active __icon-star"></p>
                    <p class="reviews__star reviews__star--active __icon-star"></p>
                    <p class="reviews__star reviews__star--active __icon-star"></p>
                    <p class="reviews__star __icon-star"></p>
                </div>

                <button class="overlay-review__btn" type="submit">Додати відгук</button>

            </form>

        </div>
    </div>

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
            <section class="user main__section-page __container">
                <div class="user__header">
                    <div class="user__about">
                        <img src="../img/user.jpg" class="user__about-image">
                        <div class="user__about-text">
                            <p class="user__about-title">Ковальчук Олександр Ігорович</p>
                            <p class="user__about-subtitle">Фізична особа</p>
                        </div>
                    </div>

                    <p class="user__about-icon __icon-license-user" title="Преміум користувач"></p>
                </div>

                <div class="user__contacts">
                    <div class="user__contact">
                        <p class="user__contact-icon __icon-phone"></p>
                        <a href="" class="user__contact-title">+38(067)-963-08-91</a>
                        <p class="user__contact-subtitle">Контактний номер</p>
                    </div>

                    <div class="user__contact">
                        <p class="user__contact-icon __icon-average-star"></p>
                        <a href="" class="user__contact-title">4,8</a>
                        <p class="user__contact-subtitle">Рейтинг користувача</p>
                    </div>
                </div>

                <div class="user__panel">
                    <p class="user__panel-headline">Панель керування</p>

                    <div class="user__tabs user__tabs--single">
                        <div class="user__tab">
                            <p class="user__tab-icon __icon-cargos-tab"></p>
                            <p class="user__tab-title">Вантажі</p>
                            <p class="user__tab-subtitle">Запрошуємо в захоплюючий світ вантажів цього користувача</p>
                        </div>

                        <div class="user__tab">
                            <p class="user__tab-icon __icon-cars-tab"></p>
                            <p class="user__tab-title">Транспорт</p>
                            <p class="user__tab-subtitle">Запрошуємо в захоплюючий світ транспорту цього користувача</p>
                        </div>

                        <div class="user__tab">
                            <p class="user__tab-icon __icon-reviews-tab"></p>
                            <p class="user__tab-title">Відгуки</p>
                            <p class="user__tab-subtitle">Діліться враженнями та думками для поліпшення сервісу</p>
                        </div>
                    </div>
                </div>

                <!-- <div class="user__content">
                    <p class="user__content-headline">Вантажі користувача</p>

                    <div class="cargos__content">
                        <a href="cargo.php" class="cargos__block">
                            <div class="cargos__block-head">
                                <p class="cargos__block-headline">Сонячні панелі</p>

                                <div class="cargos__block-head-marks">
                                    <p class="cargos__block-head-icon __icon-urgent-cargo"></p>
                                    <p class="cargos__block-head-icon __icon-license-cargo"></p>
                                </div>
                            </div>
                            <div class="cargos__block-middle">

                                <div class="cargos__decor">
                                    <div class="cargos__decor-circle"></div>
                                    <div class="cargos__decor-line"></div>
                                    <div class="cargos__decor-circle"></div>
                                </div>

                                <div class="cargos__block-text">
                                    <p class="cargos__block-text-title">Кременчук</p>
                                    <p class="cargos__block-text-subtitle">Полтавська область</p>
                                </div>

                                <div class="cargos__block-text">
                                    <p class="cargos__block-text-title">06.01.2024</p>
                                    <p class="cargos__block-text-subtitle">Дата завантаження</p>
                                </div>

                                <div class="cargos__block-text">
                                    <p class="cargos__block-text-title">Дніпро</p>
                                    <p class="cargos__block-text-subtitle">Дніпропетровська область</p>
                                </div>

                                <div class="cargos__block-text">
                                    <p class="cargos__block-text-title">16.01.2024</p>
                                    <p class="cargos__block-text-subtitle">Дата розвантаження</p>
                                </div>

                            </div>

                            <div class="cargos__block-footer">
                                <div class="cargos__block-info">
                                    <ul class="cargos__block-info-list">
                                        <li class="cargos__block-info-item">
                                            <p class="cargos__block-info-elem">20 т.</p>
                                            <div class="cargos__block-info-circle"></div>
                                        </li>
                                        <li class="cargos__block-info-item">
                                            <p class="cargos__block-info-elem">Тентований</p>
                                            <div class="cargos__block-info-circle"></div>
                                        </li>
                                        <li class="cargos__block-info-item">
                                            <p class="cargos__block-info-elem">Готівка</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="cargos__block-price">
                                    <p class="cargos__block-price-title">25000₴</p>
                                    <p class="cargos__block-price-subtitle">20,8₴ / км.</p>
                                </div>
                            </div>
                        </a>

                        <a href="" class="cargos__block">
                            <div class="cargos__block-head">
                                <p class="cargos__block-headline">Сонячні панелі</p>

                                <div class="cargos__block-head-marks">
                                    <p class="cargos__block-head-icon __icon-urgent-cargo"></p>
                                    <p class="cargos__block-head-icon __icon-license-cargo"></p>
                                </div>
                            </div>
                            <div class="cargos__block-middle">

                                <div class="cargos__decor">
                                    <div class="cargos__decor-circle"></div>
                                    <div class="cargos__decor-line"></div>
                                    <div class="cargos__decor-circle"></div>
                                </div>

                                <div class="cargos__block-text">
                                    <p class="cargos__block-text-title">Кременчук</p>
                                    <p class="cargos__block-text-subtitle">Полтавська область</p>
                                </div>

                                <div class="cargos__block-text">
                                    <p class="cargos__block-text-title">06.01.2024</p>
                                    <p class="cargos__block-text-subtitle">Дата завантаження</p>
                                </div>

                                <div class="cargos__block-text">
                                    <p class="cargos__block-text-title">Дніпро</p>
                                    <p class="cargos__block-text-subtitle">Дніпропетровська область</p>
                                </div>

                                <div class="cargos__block-text">
                                    <p class="cargos__block-text-title">16.01.2024</p>
                                    <p class="cargos__block-text-subtitle">Дата розвантаження</p>
                                </div>

                            </div>

                            <div class="cargos__block-footer">
                                <div class="cargos__block-info">
                                    <ul class="cargos__block-info-list">
                                        <li class="cargos__block-info-item">
                                            <p class="cargos__block-info-elem">20 т.</p>
                                            <div class="cargos__block-info-circle"></div>
                                        </li>
                                        <li class="cargos__block-info-item">
                                            <p class="cargos__block-info-elem">Тентований</p>
                                            <div class="cargos__block-info-circle"></div>
                                        </li>
                                        <li class="cargos__block-info-item">
                                            <p class="cargos__block-info-elem">Готівка</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="cargos__block-price">
                                    <p class="cargos__block-price-title">25000₴</p>
                                    <p class="cargos__block-price-subtitle">20,8₴ / км.</p>
                                </div>
                            </div>
                        </a>

                    </div>
                </div> -->

                <div class="user__content">
                    <div class="user__content-header">
                        <p class="user__content-headline">Відгуки про користувача</p>

                        <div class="reviews__arrows">
                            <p class="reviews__arrow __icon-left_arr"></p>
                            <p class="reviews__arrow __icon-right_arr"></p>
                        </div>
                    </div>

                    <div class="reviews__slider user__reviews-slider">
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

                    <div class="user__content-header">
                        <p class="user__content-headline">Ваш відгук про користувача</p>

                        <p class="user__content-header-btn">Редагувати відгук</p>
                    </div>

                    <div class="user__current-review">
                        <div class="user__current-review-header">
                            <img src="../img/user.jpg" class="user__current-review-image">
                            <div class="user__current-review-text">
                                <p class="user__current-review-title">ТОВ “ЛогіСмарт”</p>
                                <p class="user__current-review-subtitle">Підприємство</p>
                            </div>
                            <p class="user__current-review-line"></p>

                            <div class="reviews__stars">
                                <p class="reviews__star reviews__star--active __icon-star"></p>
                                <p class="reviews__star reviews__star--active __icon-star"></p>
                                <p class="reviews__star reviews__star--active __icon-star"></p>
                                <p class="reviews__star reviews__star--active __icon-star"></p>
                                <p class="reviews__star __icon-star"></p>
                            </div>
                        </div>

                        <p class="user__current-review-descript">Наша компанія з великим задоволенням використовує
                            логічну платформу для організації перевезень. Цей інноваційний інструмент дозволяє нам
                            ефективно керувати нашим транспортним парком та знаходити оптимальні маршрути для доставки
                            вантажів. Легка навігація, надійність та зручність взаємодії з іншими учасниками ринку
                            роблять цю платформу незамінною для наших потреб. </p>

                        <p class="user__current-review-date">06.05.2023</p>
                    </div>

                    <div class="user__current-review user__empty-review">
                        <p class="user__empty-review-headline">Відгук про платформу відстуній</p>
                        <p class="user__empty-review-subtitle">Розкажіть нам, що вам сподобалося найбільше, як ми вам
                            допомогли або як ми можемо вдосконалити наші сервіси</p>
                        <p class="user__empty-review-btn">Додати відгук</p>
                    </div>

                </div>

            </section>
        </main>

        <footer>Footer</footer>
    </div>
    <script type="text/javascript" src="../js/script.js"></script>
    <script>
    const OverlayR = new Overlay(
        '.overlay-review'
    );
    </script>
</body>

</html>