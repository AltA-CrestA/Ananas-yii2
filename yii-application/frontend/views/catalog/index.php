<?php

/* @var $this yii\web\View */

use frontend\widgets\categoryList\CategoryList;

/* @var $prductList frontend\models\Product */

$this->title = 'Каталог — Ананас Shop-sharing';
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

                    <?php foreach ($productList as $product): ?>
                        <div  class="catalog__box">
                            <div class="img__product">
                                <picture class="image__wrapper">
                                    <img src="<?php echo Yii::getAlias('@imgFrontEnd')?>/catalog_jpg/<?php echo $product->image; ?>" alt="" class="minimized">
                                </picture>
                            </div>
                            <h2><?php echo $product->name; ?></h2>
                            <p class="textforproduct">Размер: <?php echo $product->size; ?> | Цвет: <?php echo $product->color; ?></p>
                            <div class="product__button">
                                <a href="#" data-id="1" class="btn mark add-to-like">
                                    <i class="far fa-star star1"></i><span class="button__text">Добавить в закладки</span>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</section>