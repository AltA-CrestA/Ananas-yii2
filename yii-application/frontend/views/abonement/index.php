<?php

/* @var $this yii\web\View */

$this->title = 'Абонементы — Ананас Shop-sharing';
?>

<main class="season-ticket">

    <?php foreach ($abonementList as $abonement): ?>
        <section class="st-item" id="<?php echo $abonement->id; ?>">
            <div class="st-col1">
                <div class="st__title"><?php echo $abonement->name; ?></div>
                <div class="st__text"><?php echo $abonement->description; ?></div>
                <div class="st__icon">
                    <div class="st__icon-box">
                        <img class="st__icons" src="<?php echo Yii::getAlias('@imgFrontEnd')?>/ticket/calender-schedule-time-management-control-day_83408.svg" alt="">
                        <h2><?php echo $abonement->duration; ?> мес.</h2>
                    </div>
                    <div class="st__icon-box">
                        <img class="st__icons" src="<?php echo Yii::getAlias('@imgFrontEnd')?>/ticket/clock_icon-icons.com_54407.svg" alt="">
                        <h2>Ежемесячно</h2>
                    </div>
                    <div class="st__icon-box">
                        <img class="st__icons" src="<?php echo Yii::getAlias('@imgFrontEnd')?>/ticket/clothes.svg" alt="">
                        <h2><?php echo $abonement->item; ?> вещи</h2>
                    </div>
                </div>
            </div>
            <div class="st-col2">
                <div class="st__price"><?php echo $abonement->price; ?> ₽</div>
                <a href="#" data-id="1" class="st__button add-to-cart">Купить</a>
            </div>
        </section>
    <?php endforeach; ?>

</main>