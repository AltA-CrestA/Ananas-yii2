<?php

/* @var $this yii\web\View */

use frontend\widgets\categoryList\CategoryList;
use yii\helpers\Url;

/* @var $prductList frontend\models\Product */

$this->title = 'Категория ??? — Ананас Shop-sharing';
?>

<?php echo CategoryList::widget(); ?>

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

                    <?php if ($category == 'women'): ?>
                        <?php foreach ($productListWomen as $productWomen): ?>
                            <div class="catalog__box">
                                <div class="img__product">
                                    <picture class="image__wrapper">
                                        <img src="<?php echo Yii::getAlias('@imgFrontEnd')?>/catalog_jpg/<?php echo $productWomen->image; ?>" alt="" class="minimized">
                                    </picture>
                                </div>
                                <h2><?php echo $productWomen->name; ?></h2>
                                <p class="textforproduct">Размер: <?php echo $productWomen->size; ?> | Цвет: <?php echo $productWomen->color; ?></p>
                                <div class="product__button">

                                    <?php if (Yii::$app->user->isGuest): ?>
                                        <a href="<?php echo Url::to(['user/login']); ?>" class="btn mark">
                                            <i class="far fa-star star1"></i><span class="button__text">Добавить в закладки</span>
                                        </a>
                                    <?php else : ?>
                                        <a href="<?php echo Url::to(['favorite/add', 'id' => $productWomen->id]); ?>" class="btn mark">
                                            <i class="far fa-star star1"></i><span class="button__text">Добавить в закладки</span>
                                        </a>
                                    <?php endif; ?>

                                </div>
                            </div >
                        <?php endforeach; ?>
                    <?php elseif ($category == 'men'): ?>
                        <?php foreach ($productListMen as $productMen): ?>
                            <div class="catalog__box">
                                <div class="img__product">
                                    <picture class="image__wrapper">
                                        <img src="<?php echo Yii::getAlias('@imgFrontEnd')?>/catalog_jpg/<?php echo $productMen->image; ?>" alt="" class="minimized">
                                    </picture>
                                </div>
                                <h2><?php echo $productMen->name; ?></h2>
                                <p class="textforproduct">Размер: <?php echo $productMen->size; ?> | Цвет: <?php echo $productMen->color; ?></p>
                                <div class="product__button">

                                    <?php if (Yii::$app->user->isGuest): ?>
                                        <a href="<?php echo Url::to(['user/login']); ?>" class="btn mark">
                                            <i class="far fa-star star1"></i><span class="button__text">Добавить в закладки</span>
                                        </a>
                                    <?php else : ?>
                                        <a href="<?php echo Url::to(['favorite/add', 'id' => $productMen->id]); ?>" class="btn mark">
                                            <i class="far fa-star star1"></i><span class="button__text">Добавить в закладки</span>
                                        </a>
                                    <?php endif; ?>

                                </div>
                            </div >
                        <?php endforeach; ?>
                    <?php elseif (($category == 'bisex')): ?>
                        <?php foreach ($productListBisex as $productBisex): ?>
                            <div class="catalog__box">
                                <div class="img__product">
                                    <picture class="image__wrapper">
                                        <img src="<?php echo Yii::getAlias('@imgFrontEnd')?>/catalog_jpg/<?php echo $productBisex->image; ?>" alt="" class="minimized">
                                    </picture>
                                </div>
                                <h2><?php echo $productBisex->name; ?></h2>
                                <p class="textforproduct">Размер: <?php echo $productBisex->size; ?> | Цвет: <?php echo $productBisex->color; ?></p>
                                <div class="product__button">

                                    <?php if (Yii::$app->user->isGuest): ?>
                                        <a href="<?php echo Url::to(['user/login']); ?>" class="btn mark">
                                            <i class="far fa-star star1"></i><span class="button__text">Добавить в закладки</span>
                                        </a>
                                    <?php else : ?>
                                        <a href="<?php echo Url::to(['favorite/add', 'id' => $productBisex->id]); ?>" class="btn mark">
                                            <i class="far fa-star star1"></i><span class="button__text">Добавить в закладки</span>
                                        </a>
                                    <?php endif; ?>

                                </div>
                            </div >
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>