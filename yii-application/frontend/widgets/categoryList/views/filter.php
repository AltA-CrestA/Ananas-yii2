<?php
/* @var $categoryWomenList frontend\models\Category */

use yii\helpers\Url;

/* @var $categoryMenList frontend\models\Category */
/* @var $categoryBisexList frontend\models\Category */
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

                            <?php foreach ($categoryWomenList as $categoryWomen): ?>
                                <li>
                                    <a href="<?php echo Url::to(['catalog/category', 'category' => 'women', 'id' => $categoryWomen['id']]); ?>"><?php echo $categoryWomen['name']; ?></a>
                                </li>
                            <?php endforeach; ?>

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

                            <?php foreach ($categoryMenList as $categoryMen): ?>
                                <li>
                                    <a href="<?php echo Url::to(['catalog/category', 'category' => 'men', 'id' => $categoryMen['id']]); ?>"><?php echo $categoryMen['name']; ?></a>
                                </li>
                            <?php endforeach; ?>

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

                            <?php foreach ($categoryBisexList as $categoryBisex): ?>
                                <li>
                                    <a href="<?php echo Url::to(['catalog/category', 'category' => 'bisex', 'id' => $categoryBisex['id']]); ?>"><?php echo $categoryBisex['name']; ?></a>
                                </li>
                            <?php endforeach; ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>