<?php

?>

<?php include "App/Views/templates/head.php" ?>
<?php include "App/Views/templates/header.php" ?>
<div class="main">
    <section class="hello">
        <div class="container">
            <div class="hello__wrapper">
                <h1 class="hello__title">Кроссовки известных брендов с доставкой по России и СНГ</h1>
                <p class="hello__subtitle">Мы продаем кроссовки брендов Nike, Adidas, Puma, Reebok, Converse и многие другие по низким ценам</p>
                <a href="#" class="btn hello__btn">Перейти к покупкам</a>
                <div class="hello__back-text">SneakMax</div>
            </div>
        </div>
    </section>
    <section class="catalog" id="catalog">
        <div class="container">
            <div class="catalog__wrapper">
                <div class="catalog__title">Каталог</div>
                <div class="catalog__content">
                    <div class="catalog__filter">
                        <h2 class="catalog__filter-title">Подбор по параметрам</h2>
                        
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
    <section class="about">
        <div class="about__container container">
            <h2 class="about__title">Пара слов о нас</h2>

            <p class="about__text">Спорт держит нас в форме. Учит дисциплине. Объединяет нас. Через спорт мы можем менять жизни. В том числе с помощью воодушевляющих историй спортсменов. Чтобы помочь тебе подняться и двигаться вперед.</p>

            <div class="about__signature">
                <div class="about__dash"></div>
                <span>SneakMax</span>
            </div>
        </div>
    </section>
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
                                <img src="/assets/images/Quiz.jpg" alt="Кроссовки Nike Air Force 1 '07 OS белые" class="quiz__card-img">
                            </div>
                            <div class="quiz__card-option">
                                <input type="checkbox" name="shoe-type" class="quiz__card-checkbox">
                                <span class="checkbox-custom"></span>
                                <span>Кеды</span>
                            </div>
                        </label>
                        <label class="quiz__card">
                            <div class="quiz__card-image">
                                <img src="/assets/images/Quiz.jpg" alt="Кроссовки Nike Air Force 1 '07 OS белые" class="quiz__card-img">
                            </div>
                            <div class="quiz__card-option">
                                <input type="checkbox" name="shoe-type" class="quiz__card-checkbox">
                                <span class="checkbox-custom"></span>
                                <span>Кеды</span>
                            </div>
                        </label>
                        <label class="quiz__card">
                            <div class="quiz__card-image">
                                <img src="/assets/images/Quiz.jpg" alt="Кроссовки Nike Air Force 1 '07 OS белые" class="quiz__card-img">
                            </div>
                            <div class="quiz__card-option">
                                <input type="checkbox" name="shoe-type" class="quiz__card-checkbox">
                                <span class="checkbox-custom"></span>
                                <span>Кеды</span>
                            </div>
                        </label>
                        <label class="quiz__card">
                            <div class="quiz__card-image">
                                <img src="/assets/images/Quiz.jpg" alt="Кроссовки Nike Air Force 1 '07 OS белые" class="quiz__card-img">
                            </div>
                            <div class="quiz__card-option">
                                <input type="checkbox" name="shoe-type" class="quiz__card-checkbox">
                                <span class="checkbox-custom"></span>
                                <span>Кеды</span>
                            </div>
                        </label>
                        <label class="quiz__card">
                            <div class="quiz__card-image">
                                <img src="/assets/images/Quiz.jpg" alt="Кроссовки Nike Air Force 1 '07 OS белые" class="quiz__card-img">
                            </div>
                            <div class="quiz__card-option">
                                <input type="checkbox" name="shoe-type" class="quiz__card-checkbox">
                                <span class="checkbox-custom"></span>
                                <span>Кеды</span>
                            </div>
                        </label>
                        <label class="quiz__card">
                            <div class="quiz__card-image">
                                <img src="/assets/images/Quiz.jpg" alt="Кроссовки Nike Air Force 1 '07 OS белые" class="quiz__card-img">
                            </div>
                            <div class="quiz__card-option">
                                <input type="checkbox" name="shoe-type" class="quiz__card-checkbox">
                                <span class="checkbox-custom"></span>
                                <span>Кеды</span>
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
</div>
</body>
</html>