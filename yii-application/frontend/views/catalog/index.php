<?php

/* @var $this yii\web\View */

$this->title = 'Каталог — Ананас Shop-sharing';
?>

<div class="filter__box-mini">
    <div class="title__box-mini">
        <p>Фильтры и сортировка</p>
        <i class="fas fa-times"></i>
    </div>
    <div class="contetnt__filter">
        <div class="catalog__nav-filter">
            <div id="category" class="catalog__filter">
                <div class="list__filter-dress">
                    <div class="title__box">
                        <p>Женское</p>
                        <img src="<?php echo Yii::getAlias('@imgFrontEnd')?>/chevron-right-solid.svg" class="catalog__icon" alt="">
                    </div>
                    <div class="list__link">
                        <ul>
                            <li>
                                <a href="/category/1">Тряпка</a>
                            </li>
                            <li>
                                <a href="/category/1">Тряпка</a>
                            </li>
                            <li>
                                <a href="/category/1">Тряпка</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="list__filter-dress">
                    <div class="title__box">
                        <p>Мужское</p>
                        <img src="<?php echo Yii::getAlias('@imgFrontEnd')?>/chevron-right-solid.svg" class="catalog__icon" alt="">
                    </div>
                    <div class="list__link">
                        <ul>
                            <li>
                                <a href="/category/1">Тряпка</a>
                            </li>
                            <li>
                                <a href="/category/1">Тряпка</a>
                            </li>
                            <li>
                                <a href="/category/1">Тряпка</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="list__filter-dress">
                    <div class="title__box">
                        <p>Не знаю кто я</p>
                        <img src="<?php echo Yii::getAlias('@imgFrontEnd')?>/chevron-right-solid.svg" class="catalog__icon" alt="">
                    </div>
                    <div class="list__link">
                        <ul>
                            <li>
                                <a href="/category/1">Тряпка</a>
                            </li>
                            <li>
                                <a href="/category/1">Тряпка</a>
                            </li>
                            <li>
                                <a href="/category/1">Тряпка</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="howthiswork">
    <div class="how__wrapper">
        <div class="how__box">
            <div class="how__item">
                <div class="how__border">
                    <i class="fas fa-tshirt how__icon"></i>
                </div>
                <h2 class="how__text">Выбирайте понравившуюся<br>вам вещь</h2>
            </div>
            <div class="hom__item how__arrow">
                <i class="fas fa-chevron-right"></i>
            </div>
            <div class="how__item">
                <div class="how__border">
                    <i class="fas fa-credit-card how__icon"></i>
                </div>
                <h2 class="how__text">Приобретите абонемент и носите<br>понравившиеся вещи</h2>
            </div>
            <div class="hom__item how__arrow">
                <i class="fas fa-chevron-right"></i>
            </div>
            <div class="how__item">
                <div class="how__border">
                    <i class="fas fa-shopping-bag how__icon"></i>
                </div>
                <h2 class="how__text">Носите любимые вещи<br>в свое удовольствие</h2>
            </div>
        </div>
    </div>
</div>
<section class="catalogall">
    <!-- тело товаров -->
    <div class="catalog">
        <div class="catalog__wrapper">
            <div class="filter__button">
                <button id="buttonFilterMini">Фильтры и сортировка</button>
            </div>
            <div class="catalog__item">
                <div class="catalog__products">
                    <div  class="catalog__box">
                        <div class="img__product">
                            <picture class="image__wrapper">
                                <img src="<?php echo Yii::getAlias('@imgFrontEnd')?>/catalog_jpg/1.jpg" alt="" class="minimized">
                            </picture>
                        </div>
                        <h2>Мама сшила мне штаны</h2>
                        <p class="textforproduct">Размер: из берёзовой коры | Цвет: чтобы попа не потела, не кусали комары</p>
                        <div class="product__button">
                            <a href="#" data-id="1" class="btn mark add-to-like">
                                <i class="far fa-star star1"></i><span class="button__text">Добавить в закладки</span>
                            </a>
                        </div>
                    </div>
                    <div  class="catalog__box">
                        <div class="img__product">
                            <picture class="image__wrapper">
                                <img src="<?php echo Yii::getAlias('@imgFrontEnd')?>/catalog_jpg/2.jpg" alt="" class="minimized">
                            </picture>
                        </div>
                        <h2>Мама сшила мне штаны</h2>
                        <p class="textforproduct">Размер: из берёзовой коры | Цвет: чтобы попа не потела, не кусали комары</p>
                        <div class="product__button">
                            <a href="#" data-id="1" class="btn mark add-to-like">
                                <i class="far fa-star star1"></i><span class="button__text">Добавить в закладки</span>
                            </a>
                        </div>
                    </div>
                    <div  class="catalog__box">
                        <div class="img__product">
                            <picture class="image__wrapper">
                                <img src="<?php echo Yii::getAlias('@imgFrontEnd')?>/catalog_jpg/3.jpg" alt="" class="minimized">
                            </picture>
                        </div>
                        <h2>Мама сшила мне штаны</h2>
                        <p class="textforproduct">Размер: из берёзовой коры | Цвет: чтобы попа не потела, не кусали комары</p>
                        <div class="product__button">
                            <a href="#" data-id="1" class="btn mark add-to-like">
                                <i class="far fa-star star1"></i><span class="button__text">Добавить в закладки</span>
                            </a>
                        </div>
                    </div>
                    <div  class="catalog__box">
                        <div class="img__product">
                            <picture class="image__wrapper">
                                <img src="<?php echo Yii::getAlias('@imgFrontEnd')?>/catalog_jpg/4.jpg" alt="" class="minimized">
                            </picture>
                        </div>
                        <h2>Мама сшила мне штаны</h2>
                        <p class="textforproduct">Размер: из берёзовой коры | Цвет: чтобы попа не потела, не кусали комары</p>
                        <div class="product__button">
                            <a href="#" data-id="1" class="btn mark add-to-like">
                                <i class="far fa-star star1"></i><span class="button__text">Добавить в закладки</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>