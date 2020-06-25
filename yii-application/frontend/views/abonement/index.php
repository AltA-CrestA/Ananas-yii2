<?php

/* @var $this yii\web\View */

$this->title = 'Абонементы — Ананас Shop-sharing';
?>

<main class="season-ticket">

<!--    --><?php //foreach ($latestTickets as $ticketItem): ?>
<!--        <section class="st-item" id="--><?php //echo $ticketItem['id']; ?><!--">-->
<!--            <div class="st-col1">-->
<!--                <div class="st__title">--><?php //echo $ticketItem['name']; ?><!--</div>-->
<!--                <div class="st__text">--><?php //echo $ticketItem['description']; ?><!--</div>-->
<!--                <div class="st__icon">-->
<!--                    <div class="st__icon-box">-->
<!--                        <img class="st__icons" src="/app/template/img/ticket/calender-schedule-time-management-control-day_83408.svg" alt="">-->
<!--                        <h2>--><?php //echo $ticketItem['duration']?><!-- мес.</h2>-->
<!--                    </div>-->
<!--                    <div class="st__icon-box">-->
<!--                        <img class="st__icons" src="/app/template/img/ticket/clock_icon-icons.com_54407.svg" alt="">-->
<!--                        <h2>Ежемесячно</h2>-->
<!--                    </div>-->
<!--                    <div class="st__icon-box">-->
<!--                        <img class="st__icons" src="/app/template/img/ticket/clothes.svg" alt="">-->
<!--                        <h2>--><?php //echo $ticketItem['item']?><!-- вещи</h2>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="st-col2">-->
<!--                <div class="st__price">--><?php //echo $ticketItem['price']; ?><!-- ₽</div>-->
<!---->
<!--                --><?php //if (!User::isGuest()): ?>
<!--                    <a href="#" data-id="--><?php //echo $ticketItem['id']; ?><!--" class="st__button add-to-cart">Купить</a>-->
<!--                --><?php //else: ?>
<!--                    <a href="/user/login/" class="st__button">Купить</a>-->
<!--                --><?php //endif; ?>
<!---->
<!--            </div>-->
<!---->
<!--        </section>-->
<!--    --><?php //endforeach; ?>
        
    <section class="st-item" id="1">
        <div class="st-col1">
            <div class="st__title">Абонемент №1</div>
            <div class="st__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at atque autem excepturi ipsam nemo nesciunt nostrum tempore ut voluptatum?</div>
            <div class="st__icon">
                <div class="st__icon-box">
                    <img class="st__icons" src="<?php echo Yii::getAlias('@imgFrontEnd')?>/ticket/calender-schedule-time-management-control-day_83408.svg" alt="">
                    <h2>6 мес.</h2>
                </div>
                <div class="st__icon-box">
                    <img class="st__icons" src="<?php echo Yii::getAlias('@imgFrontEnd')?>/ticket/clock_icon-icons.com_54407.svg" alt="">
                    <h2>Ежемесячно</h2>
                </div>
                <div class="st__icon-box">
                    <img class="st__icons" src="<?php echo Yii::getAlias('@imgFrontEnd')?>/ticket/clothes.svg" alt="">
                    <h2>4 вещи</h2>
                </div>
            </div>
        </div>
        <div class="st-col2">
            <div class="st__price">4000 ₽</div>
            <a href="#" data-id="1" class="st__button add-to-cart">Купить</a>
        </div>
    </section>
    <section class="st-item" id="2">
        <div class="st-col1">
            <div class="st__title">Абонемент №1</div>
            <div class="st__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at atque autem excepturi ipsam nemo nesciunt nostrum tempore ut voluptatum?</div>
            <div class="st__icon">
                <div class="st__icon-box">
                    <img class="st__icons" src="<?php echo Yii::getAlias('@imgFrontEnd')?>/ticket/calender-schedule-time-management-control-day_83408.svg" alt="">
                    <h2>6 мес.</h2>
                </div>
                <div class="st__icon-box">
                    <img class="st__icons" src="<?php echo Yii::getAlias('@imgFrontEnd')?>/ticket/clock_icon-icons.com_54407.svg" alt="">
                    <h2>Ежемесячно</h2>
                </div>
                <div class="st__icon-box">
                    <img class="st__icons" src="<?php echo Yii::getAlias('@imgFrontEnd')?>/ticket/clothes.svg" alt="">
                    <h2>4 вещи</h2>
                </div>
            </div>
        </div>
        <div class="st-col2">
            <div class="st__price">4000 ₽</div>
            <a href="#" data-id="2" class="st__button add-to-cart">Купить</a>
        </div>
    </section>
    <section class="st-item" id="3">
        <div class="st-col1">
            <div class="st__title">Абонемент №1</div>
            <div class="st__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at atque autem excepturi ipsam nemo nesciunt nostrum tempore ut voluptatum?</div>
            <div class="st__icon">
                <div class="st__icon-box">
                    <img class="st__icons" src="<?php echo Yii::getAlias('@imgFrontEnd')?>/ticket/calender-schedule-time-management-control-day_83408.svg" alt="">
                    <h2>6 мес.</h2>
                </div>
                <div class="st__icon-box">
                    <img class="st__icons" src="<?php echo Yii::getAlias('@imgFrontEnd')?>/ticket/clock_icon-icons.com_54407.svg" alt="">
                    <h2>Ежемесячно</h2>
                </div>
                <div class="st__icon-box">
                    <img class="st__icons" src="<?php echo Yii::getAlias('@imgFrontEnd')?>/ticket/clothes.svg" alt="">
                    <h2>4 вещи</h2>
                </div>
            </div>
        </div>
        <div class="st-col2">
            <div class="st__price">4000 ₽</div>
            <a href="#" data-id="3" class="st__button add-to-cart">Купить</a>
        </div>
    </section>
    <section class="st-item" id="4">
        <div class="st-col1">
            <div class="st__title">Абонемент №1</div>
            <div class="st__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at atque autem excepturi ipsam nemo nesciunt nostrum tempore ut voluptatum?</div>
            <div class="st__icon">
                <div class="st__icon-box">
                    <img class="st__icons" src="<?php echo Yii::getAlias('@imgFrontEnd')?>/ticket/calender-schedule-time-management-control-day_83408.svg" alt="">
                    <h2>6 мес.</h2>
                </div>
                <div class="st__icon-box">
                    <img class="st__icons" src="<?php echo Yii::getAlias('@imgFrontEnd')?>/ticket/clock_icon-icons.com_54407.svg" alt="">
                    <h2>Ежемесячно</h2>
                </div>
                <div class="st__icon-box">
                    <img class="st__icons" src="<?php echo Yii::getAlias('@imgFrontEnd')?>/ticket/clothes.svg" alt="">
                    <h2>4 вещи</h2>
                </div>
            </div>
        </div>
        <div class="st-col2">
            <div class="st__price">4000 ₽</div>
            <a href="#" data-id="4" class="st__button add-to-cart">Купить</a>
        </div>
    </section>


</main>