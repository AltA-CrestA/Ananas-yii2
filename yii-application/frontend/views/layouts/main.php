<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\SiteAsset;
use yii\helpers\Html;
use common\widgets\Alert;
use yii\helpers\Url;

SiteAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a92d3a3d23.js" crossorigin="anonymous"></script>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header class="header">
    <div class="container">
        <div class="header__body">
            <a href="/" class="header__logo">
                <picture>
                    <source srcset="<?php echo Yii::getAlias('@imgFrontEnd')?>/01.webp" type="image/webp">
                    <img src="<?php echo Yii::getAlias('@imgFrontEnd')?>/01.png" alt="">
                </picture>
            </a>
            <nav class="header__menu">
                <ul class="header__list">
                    <li>
                        <a href="<?php echo Url::to(['catalog/index']); ?>" class="header__link">Каталог</a>
                    </li>
                    <li>
                        <a href="<?php echo Url::to(['abonement/index']); ?>" class="header__link">Абонементы</a>
                    </li>
                    <li>
                        <a href="/#about" class="header__link">О нас</a>
                    </li>
                    <li>
                        <a href="<?php echo Url::to(['site/contact']); ?>" class="header__link">Контакты</a>
                    </li>

                </ul>
            </nav>
            <div class="header-login steal__big">
                <a href="<?php echo Url::to(['user/signup']); ?>" class="login__button">Войти</a>
            </div>
            <div class="header__burger">
                <span></span>
            </div>
        </div>
    </div>
</header>

        <?= Alert::widget() ?>
        <?= $content ?>

<footer>
    <div class="footer-content">
        <div class="footer-col-1">
            <div class="footer-title">
                <div class="logo"><b>А<span>на</span>на<span>с</span></b></div>
                <div class="title__forname">Shopsharing</div>
            </div>
            <div class="footer-subtitle">
                <div class="subtitle__name">г. Красноярск</div>
                <div class="subtitle__forname">ул. Карла Маркса 102Б</div>
            </div>
        </div>
        <div class="footer-col-2">
            <div class="footer-menu">
                <a href="/" class="footer-menu__item">Главная</a>
                <a href="<?php echo Url::to(['catalog/index']); ?>" class="footer-menu__item">Каталог</a>
            </div>
            <div class="footer-menu">
                <a href="<?php echo Url::to(['abonement/index']); ?>" class="footer-menu__item">Купить абоменент</a>
                <a href="<?php echo Url::to(['site/contact']); ?>" class="footer-menu__item">Контакты</a>
            </div>
        </div>
        <div class="footer-col-3">
            <a href="https://www.instagram.com/ananas_krsk/" class="social__item">
                <i class="fab fa-instagram"></i>&nbsp;Instagram
            </a>
            <a href="https://vk.com/ananas_krsk" class="social__item">
                <i class="fab fa-vk"></i>&nbsp;ВКонтакте
            </a>
        </div>
    </div>
</footer>
<a class="button__up"></a>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
