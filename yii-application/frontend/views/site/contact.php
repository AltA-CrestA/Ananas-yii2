<?php

/* @var $this yii\web\View */

$this->title = 'Контакты — Ананас Shop-sharing';
?>

<main class="contact">
    <section class="contact__box">
        <section class="contact__let">
            <div class="contact__title">Ждем вас в гости</div>
            <div class="contact__round">
                <div class="contact__block">
                    <div class="block__icon">
                        <img src="<?php echo Yii::getAlias('@imgFrontEnd')?>/contact/where.svg" class="contact__icon" alt="">
                    </div>
                    <div class="block__text">
                        <p><span class="text__stil">Мы находимся:</span> г. Красноярск ул. Карла Маркса 102Б</p>
                    </div>
                </div>
                <div class="contact__block">
                    <div class="block__icon">
                        <img src="<?php echo Yii::getAlias('@imgFrontEnd')?>/contact/smartphone_mobile_icon.svg" class="contact__icon" alt="">
                    </div>
                    <div class="block__text">
                        <p><span class="text__stil">Ждем ваших звонков:</span> <a href="tel:8 800 555 33 55"> 8 800 555 33 55</a></p>
                    </div>
                </div>
                <div class="contact__block">
                    <div class="block__icon">
                        <img src="<?php echo Yii::getAlias('@imgFrontEnd')?>/contact/Office.svg" class="contact__icon" alt="">
                    </div>
                    <div class="block__text">
                        <p><span class="text__stil">Мы работаем:</span> с 12:00 - 22:00</p>
                    </div>
                </div>
                <div class="contact__block">
                    <div class="block__icon">
                        <img src="<?php echo Yii::getAlias('@imgFrontEnd')?>/contact/newsletter.svg" class="contact__icon" alt="">
                    </div>
                    <div class="block__text">
                        <p><span class="text__stil">Будем рады вашим письмам:</span> <a href="#">info@ananaskras.ru</a></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact__map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A582aaf246c4dd761b40b9152f2972b14d5ba597bb175e610af457990200217bc&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
        </section>
</main>