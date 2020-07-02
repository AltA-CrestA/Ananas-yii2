<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\SiteAsset;
use frontend\models\Cart;
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
    <div class="header__container">
        <div class="header__container__body">
            <div class="header__container__body-logo">
                <a href="/">
                    <picture>
                        <source srcset="<?php echo Yii::getAlias('@imgFrontEnd')?>/01.webp" type="image/webp">
                        <img src="<?php echo Yii::getAlias('@imgFrontEnd')?>/01.png" alt="">
                    </picture>
                </a>
            </div>
            <nav class="header__container__body-menu">
                <ul>
                    <li>
                        <a href="<?php echo Url::to(['catalog/index']); ?>">Каталог</a>
                    </li>
                    <li>
                        <a href="<?php echo Url::to(['abonement/index']); ?>">Абонементы</a>
                    </li>
                    <li>
                        <a href="/#about">О нас</a>
                    </li>
                    <li>
                        <a href="<?php echo Url::to(['site/contact']); ?>">Контакты</a>
                    </li>

                </ul>
            </nav>
            <div class="header-login steal__big">
                <?php if (Yii::$app->user->isGuest): ?>
                    <a href="<?php echo Url::to(['user/login']); ?>" class="login__button">Войти</a>
                <?php else: ?>
                <div class="header__buttons">
                    <div class="header-user">
                        <a href="#" class="dropbtn">
                            <i class="fas fa-user"></i>
                            <span class="small__user">Личный кабинет</span>
                        </a>
                        <div class="dropdown-content">
                            <a href="<?php echo Url::to(['cabinet/index']); ?>">Мой профиль</a>
                            <a href="<?php echo Url::to(['favorite/index']); ?>">Мои закладки
                                <!--                                    (<span id="like-count">-->
                                <!--                                        --><?php //echo Like::countItems(); ?>
                                <!--                                    </span>)</a>-->
                            <a><?php echo Html::beginForm(['user/logout'], 'post');
                                    echo Html::submitButton('Выйти (' . Yii::$app->user->identity->username . ')', ['class' => 'login__button']);
                                    echo Html::endForm(); ?>
                            </a>
                        </div>
                    </div>
                    <a href="<?php echo Url::to(['cart/index']); ?>">
                        <div id="cart" class="header-cart">
                            <i class="fas fa-shopping-cart"></i>
                            <div class="icon__cart-basket">
                                <span id="cart-count"><?php echo Cart::CountAbonement(); ?></span>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endif; ?>
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
