<!-- head -->
<?php include "App/Views/templates/head.php"; ?>
<!-- ---- -->
 
<!-- header -->
<?php include "App/Views/templates/header.php"; ?>
<!-- ------ -->

<!-- main -->
<main class="main">

    <!-- hello -->
    <section class="hello">
        <div class="container">
            <div class="hello__wrapper">
                <h1 class="hello__title">Кроссовки известных брендов с доставкой по России и СНГ</h1>
                <p class="hello__subtitle">Мы продаем кроссовки брендов Nike, Adidas, Puma, Reebok, Converse и многие другие по низким ценам</p>
                <a href="#" class="btn hello__btn">Перейти к покупкам</a>
            </div>
        </div>
    </section>

    <!-- catalog -->
    <section class="catalog" id="catalog">
        <div class="container">
            <div class="catalog__wrapper">
                <div class="catalog__title">Каталог</div>
                <div class="catalog__content">
                    <div class="catalog__filter-show">
                        Все фильтры 
                    </div>
                    <div class="catalog__filter">
                        
                        <div class="catalog__filter-group">
                            <h3 class="catalog__filter-subtitle">Цена, руб</h3>
                            <div class="catalog__price-inputs">
                            <input type="text" class="catalog__price-input" value="1850">
                            <input type="text" class="catalog__price-input" value="25 768">
                            </div>
                        </div>
                        
                        <div class="catalog__filter-group">
                            <h3 class="catalog__filter-subtitle">Пол</h3>
                            <div class="catalog__gender-options">
                            <label class="catalog__gender-option">
                                <input type="radio" name="gender" class="catalog__radio" checked>
                                <span class="catalog__gender-text">мужской</span>
                            </label>
                            <label class="catalog__gender-option">
                                <input type="radio" name="gender" class="catalog__radio">
                                <span class="catalog__gender-text">женский</span>
                            </label>
                            </div>
                        </div>
                        
                        <div class="catalog__filter-group">
                            <h3 class="catalog__filter-subtitle">Размер</h3>
                            <div class="catalog__sizes">
                            <label class="catalog__size">
                                <input type="checkbox" class="catalog__checkbox">
                                <span class="catalog__size-text">35</span>
                            </label>
                            <label class="catalog__size">
                                <input type="checkbox" class="catalog__checkbox">
                                <span class="catalog__size-text">36</span>
                            </label>
                            <label class="catalog__size">
                                <input type="checkbox" class="catalog__checkbox">
                                <span class="catalog__size-text">37</span>
                            </label>
                            <label class="catalog__size">
                                <input type="checkbox" class="catalog__checkbox">
                                <span class="catalog__size-text">38</span>
                            </label>
                            <label class="catalog__size">
                                <input type="checkbox" class="catalog__checkbox">
                                <span class="catalog__size-text">39</span>
                            </label>
                            <label class="catalog__size">
                                <input type="checkbox" class="catalog__checkbox">
                                <span class="catalog__size-text">40</span>
                            </label>
                            <label class="catalog__size">
                                <input type="checkbox" class="catalog__checkbox">
                                <span class="catalog__size-text">41</span>
                            </label>
                            <label class="catalog__size">
                                <input type="checkbox" class="catalog__checkbox">
                                <span class="catalog__size-text">42</span>
                            </label>
                            <label class="catalog__size">
                                <input type="checkbox" class="catalog__checkbox">
                                <span class="catalog__size-text">43</span>
                            </label>
                            </div>
                        </div>
                        
                        <div class="catalog__filter-buttons">
                            <button class="catalog__filter-button catalog__filter-button_apply">Применить</button>
                            <button class="catalog__filter-button catalog__filter-button_reset">сбросить</button>
                        </div>
                    </div>
                    <div class="catalog__main">
                        <div class="catalog__products">
                            <!-- Карточка товара -->
                            <div class="catalog__product">
                                <div class="catalog__product-image">
                                    <img src="assets/images/Nike.jpg" alt="Кроссовки Nike Air Force 1 '07 OS белые" class="catalog__product-img">
                                </div>
                                <h3 class="catalog__product-title">Кроссовки Nike Air Force 1 '07 OS</h3>
                                <p class="catalog__product-price">11 000 ₽</p>
                            </div>

                            <!-- Повторяем карточки (всего 6) -->
                            <div class="catalog__product">
                                <div class="catalog__product-image">
                                    <img src="assets/images/Nike.jpg" alt="Кроссовки Nike Air Force 1 '07 OS белые" class="catalog__product-img">
                                </div>
                                <h3 class="catalog__product-title">Кроссовки Nike Air Force 1 '07 OS</h3>
                                <p class="catalog__product-price">11 000 ₽</p>
                            </div>

                            <div class="catalog__product">
                                <div class="catalog__product-image">
                                    <img src="assets/images/Nike.jpg" alt="Кроссовки Nike Air Force 1 '07 OS белые" class="catalog__product-img">
                                </div>
                                <h3 class="catalog__product-title">Кроссовки Nike Air Force 1 '07 OS</h3>
                                <p class="catalog__product-price">11 000 ₽</p>
                            </div>

                            <div class="catalog__product">
                                <div class="catalog__product-image">
                                    <img src="assets/images/Nike.jpg" alt="Кроссовки Nike Air Force 1 '07 OS белые" class="catalog__product-img">
                                </div>
                                <h3 class="catalog__product-title">Кроссовки Nike Air Force 1 '07 OS</h3>
                                <p class="catalog__product-price">11 000 ₽</p>
                            </div>

                            <div class="catalog__product">
                                <div class="catalog__product-image">
                                    <img src="assets/images/Nike.jpg" alt="Кроссовки Nike Air Force 1 '07 OS белые" class="catalog__product-img">
                                </div>
                                <h3 class="catalog__product-title">Кроссовки Nike Air Force 1 '07 OS</h3>
                                <p class="catalog__product-price">11 000 ₽</p>
                            </div>

                            <div class="catalog__product">
                                <div class="catalog__product-image">
                                    <img src="assets/images/Nike.jpg" alt="Кроссовки Nike Air Force 1 '07 OS белые" class="catalog__product-img">
                                </div>
                                <h3 class="catalog__product-title">Кроссовки Nike Air Force 1 '07 OS</h3>
                                <p class="catalog__product-price">11 000 ₽</p>
                            </div>
                        </div>
                        <div class="catalog__show-more">
                            <button class="catalog__show-more-btn btn">Показать ещё</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about -->
    <section class="about">
        <div class="container">
            <div class="about__wrapper">
                <div class="about__content">
                    <h2 class="about__title">Пара слов о нас</h2>
                    <p class="about__text">Спорт держит нас в форме. Учит дисциплине. Объединяет нас. Через спорт мы можем менять жизни. В том числе с помощью воодушевляющих историй спортсменов. Чтобы помочь тебе подняться и двигаться вперед.</p>
                    <div class="about__signature">
                        — SneakMax
                    </div>
                </div>
                <div class="about__image">
                    <img src="/assets/images/About-bg.jpg" alt="about bg" class="about__img">
                </div>
            </div>
        </div>
    </section>

    <!-- quiz -->
    <section class="quiz">
        <div class="quiz__container container">
            <div class="quiz__wrapper">
                <div class="quiz__top">
                    <h2 class="quiz__title">Мы подберем идеальную пару для вас</h2>
                    <p class="quiz__description">Ответьте на три вопроса и мы вышлем каталог с самыми подходящими для вас моделями</p>
                </div>
                <div class="quiz__bottom">
                    <h3 class="quiz__question">Какой тип кроссовок рассматриваете?</h3>
                    <div class="quiz__selector">
                        <label class="quiz__card">
                            <div class="quiz__card-image">
                                <img src="/assets/images/Quiz1.jpeg" alt="Кеды" class="quiz__card-img">
                            </div>
                            <div class="quiz__card-option">
                                <input type="checkbox" name="shoe-type" class="quiz__card-checkbox">
                                <span class="checkbox-custom"></span>
                                <span>Кеды</span>
                            </div>
                        </label>
                        <label class="quiz__card">
                            <div class="quiz__card-image">
                                <img src="/assets/images/Quiz2.jpeg" alt="Кроссовки Беговые" class="quiz__card-img">
                            </div>
                            <div class="quiz__card-option">
                                <input type="checkbox" name="shoe-type" class="quiz__card-checkbox">
                                <span class="checkbox-custom"></span>
                                <span>Беговые</span>
                            </div>
                        </label>
                        <label class="quiz__card">
                            <div class="quiz__card-image">
                                <img src="/assets/images/Quiz3.jpeg" alt="Кроссовки Баскетбольные" class="quiz__card-img">
                            </div>
                            <div class="quiz__card-option">
                                <input type="checkbox" name="shoe-type" class="quiz__card-checkbox">
                                <span class="checkbox-custom"></span>
                                <span>Баскетбольные</span>
                            </div>
                        </label>
                        <label class="quiz__card">
                            <div class="quiz__card-image">
                                <img src="/assets/images/Quiz4.jpeg" alt="Кроссовки Лоу-топы" class="quiz__card-img">
                            </div>
                            <div class="quiz__card-option">
                                <input type="checkbox" name="shoe-type" class="quiz__card-checkbox">
                                <span class="checkbox-custom"></span>
                                <span>Лоу-топы</span>
                            </div>
                        </label>
                        <label class="quiz__card">
                            <div class="quiz__card-image">
                                <img src="/assets/images/Quiz5.jpeg" alt="Кроссовки Тренировочные" class="quiz__card-img">
                            </div>
                            <div class="quiz__card-option">
                                <input type="checkbox" name="shoe-type" class="quiz__card-checkbox">
                                <span class="checkbox-custom"></span>
                                <span>Тренировочные</span>
                            </div>
                        </label>
                        <label class="quiz__card">
                            <div class="quiz__card-image">
                                <img src="/assets/images/Quiz6.jpeg" alt="Кроссовки Дизанерские" class="quiz__card-img">
                            </div>
                            <div class="quiz__card-option">
                                <input type="checkbox" name="shoe-type" class="quiz__card-checkbox">
                                <span class="checkbox-custom"></span>
                                <span>Дизайнерские</span>
                            </div>
                        </label>
                    </div>
                    <div class="quiz__pagination">
                        <button class="quiz__pagination-next btn">Следующий шаг</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- our-team -->
    <section class="our-team">
        <div class="our-team__container container">
            <div class="our-team__wrapper">
                <h2 class="our-team__title">Наша команда</h2>
                <ul class="our-team__members">
                    <li class="our-team__member">
                        <div class="our-team__member-photo">
                            <img src="assets/images/Maxim-admin.jpg" alt="Фото сотрудника компании SneakMax" class="our-team__member-img">
                        </div> 
                        <div class="our-team__member-info">
                            <p class="our-team__member-name">Иван Иванов</p>
                            <p class="our-team__member-position">Администратор</p>
                        </div>
                    </li>
                    <li class="our-team__member">
                        <div class="our-team__member-photo">
                            <img src="assets/images/Lily-admin.jpg" alt="Фото сотрудника компании SneakMax" class="our-team__member-img">
                        </div> 
                        <div class="our-team__member-info">
                            <p class="our-team__member-name">Максима Золотарева</p>
                            <p class="our-team__member-position">Администратор</p>
                        </div>
                    </li>
                    <li class="our-team__member">
                        <div class="our-team__member-photo">
                            <img src="assets/images/Diana-admin.jpg" alt="Фото сотрудника компании SneakMax" class="our-team__member-img">
                        </div> 
                        <div class="our-team__member-info">
                            <p class="our-team__member-name">Дарья Иванова</p>
                            <p class="our-team__member-position">Администратор</p>
                        </div>
                    </li>
                    <li class="our-team__member">
                        <div class="our-team__member-photo">
                            <img src="assets/images/German-admin.jpg" alt="Фото сотрудника компании SneakMax" class="our-team__member-img">
                        </div> 
                        <div class="our-team__member-info">
                            <p class="our-team__member-name">Герман Думков</p>
                            <p class="our-team__member-position">Администратор</p>
                        </div>
                    </li>
                    <li class="our-team__member">
                        <div class="our-team__member-photo">
                            <img src="assets/images/Aleksey-admin.jpg" alt="Фото сотрудника компании SneakMax" class="our-team__member-img">
                        </div> 
                        <div class="our-team__member-info">
                            <p class="our-team__member-name">Алексей Панкратов</p>
                            <p class="our-team__member-position">Админисратор</p>
                        </div>
                    </li>
                    <li class="our-team__member">
                        <div class="our-team__member-photo">
                            <img src="assets/images/Polina-admin.jpg" alt="Фото сотрудника компании SneakMax" class="our-team__member-img">
                        </div> 
                        <div class="our-team__member-info">
                            <p class="our-team__member-name">Полина Гагарина</p>
                            <p class="our-team__member-position">Администратор</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- faq -->
    <section class="faq">
        <div class="faq__container container">
            <div class="faq__wrapper">
                <h2 class="faq__title">Часто задаваемые вопросы</h2>
                <ul class="faq__list">
                    <li class="faq__item">
                        <div class="faq__question">Как правильно подобрать размер кроссовок SneakMax, если я заказываю онлайн?</div>
                        <div class="faq__answer">Для точного определения размера: Измерьте стопу вечером (когда нога максимально распущена) Используйте нашу размерную сетку с конвертацией EU/US/UK Учитывайте рекомендации для конкретной модели: Для UltraBoost берите на ½ размера больше Для CourtVintage - размер в размер Бесплатная замена в течение 14 дней при ошибке с размером</div>
                    </li>
                    <li class="faq__item">
                        <div class="faq__question">Как получить доступ к лимитированным коллаборациям и дропам?</div>
                        <div class="faq__answer">Чтобы участвовать в релизах эксклюзивных моделей: Активируйте ранний доступ в личном кабинете Подпишитесь на Telegram-бот @SneakMaxDrop (уведомляет за 15 мин. до старта) Пройдите верификацию аккаунта (требуется для ограниченных партий) Для гарантированного резерва - оформите подписку SneakMax PRO</div>
                    </li>
                    <li class="faq__item">
                        <div class="faq__question">Как проверить подлинность кроссовок SneakMax и защититься от подделок?</div>
                        <div class="faq__answer">Все кроссовки из официальных поставок имеют 3 уровня защиты: QR-чип в стельке → сканируйте через мобильное приложение SneakMax Verify Микрошов на язычке → уникальный узор, видимый под УФ-фонариком (входит в комплект PRO-версий) Сертификат в блокчейне → проверка по ID на сайте через систему SneakChain® Для 100% уверенности: Покупайте только на официальном сайте или у партнёров из раздела «Где купить</div>
                    </li>
                </ul>
            </div>    
        </div>
    </section>

    <!-- contacts -->
    <section class="contacts">
        <div class="contacts__container container">
            <div class="contacts__wrapper">
                <div class="contacts__info">
                    <h2 class="contacts__title">Контакты</h2>
                    <ul class="contacts__offices">
                        <li class="contacts__office">
                            <h4 class="contacts__office">Главный офис</h4>
                            <p class="contacts__phone">+7 800 789 89 89</p>
                            <p class="contacts__address">г. Санкт-Петербург, Комсомольская, 43 к1</p>   
                        </li>
                        <li class="contacts__office">
                            <h4 class="contacts__office">Отдел продаж</h4>
                            <p class="contacts__phone">+7 800 789 89 89</p>
                            <p class="contacts__address">г. Санкт-Петербург, Комсомольская, 43 к1</p>
                    </ul>
                    <div class="contacts__social">
                        <ul class="contacts__social-icons">
                            <li class="contacts__social-icon">
                                <a href="#" class="contacts__social-link"><img src="/assets/images/VK.svg" alt="Vkontakte"></a>
                            </li>
                            <li class="contacts__social-icon">
                                <a href="#" class="contacts__social-link"><img src="/assets/images/Instagram.svg" alt="Instagram"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="contacts__map">
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A45968676160b8b1e601b507b8291595315252d86e32844455e4044536401b71&amp;source=constructor" width="680" height="497" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- insta -->
    <section class="insta">
        <div class="insta__container container">
            <div class="insta__wrapper">
                <form action="#" class="insta__form">
                    <h2 class="insta__form-title">Есть вопросы?</h2>
                    <p class="insta__form-subtitle">Заполните форму и наш <br> менеджер свяжется с вами</p>
                    <input type="text" name="name" class="insta__form-input" placeholder="Ваше имя">
                    <input type="tel" name="tel" class="insta__form-input" placeholder="Номер телефона">
                    <button type="button" class="insta__form-submit btn">Отправить</button>
                </form>
                <div class="insta__content">
                    <img src="/assets/images/insta.png" alt="Instagram logo" class="insta__title">
                    <div class="insta__gallery">
                        <div class="insta__gallery-column">
                            <div class="insta__gallery-image">
                                <img src="/assets/images/insta-img1.jpg" alt="#" class="insta__gallery-img">
                            </div>
                            <div class="insta__gallery-image">
                                <img src="/assets/images/insta-img2.jpg" alt="#" class="insta__gallery-img">
                            </div>
                        </div>
                        <div class="insta__gallery-center">
                            <img src="/assets/images/insta-img3.jpg" alt="#" class="insta__gallery-img">
                        </div>
                        <div class="insta__gallery-column">
                            <div class="insta__gallery-image">
                                <img src="/assets/images/insta-img4.jpg" alt="#" class="insta__gallery-img">
                            </div>
                            <div class="insta__gallery-image">
                                <img src="/assets/images/insta-img5.jpg" alt="#" class="insta__gallery-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- footer -->
<?php include "App/Views/templates/footer.php"; ?>
<!-- ------ -->

<!-- scripts -->
<script src="/assets/js/main.js"></script>
<!-- ------- -->

<!-- </wrapper> -->
</div>
<!-- ---------- -->

</body>
</html>