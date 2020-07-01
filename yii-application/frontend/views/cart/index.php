<?php

use yii\helpers\Url;

$this->title = 'Корзина — Ананас Shop-sharing';
?>

<main class="cart__box">
    <div class="title__cart">
        <h1>Ваша корзина</h1>
    </div>

    <?php if ($abonementInCart): ?>
        <div class="contetnt__cart">
            <div class="cart__up-main">
                <div class="up__name">
                    <div class="up__title big__title">Наименование</div>
                    <div class="small__title up__title">Наим.</div>
                </div>
                <div class="up__amount">
                    <div class="up__title title__amount">Кол-во</div>
                </div>
                <div class="up__сost">
                    <div class="up__title">Цена</div>
                </div>
            </div>

            <?php foreach ($abonement as $item): ?>
                <div class="cart__up">
                    <div class="up__name">
                        <div class="up__text"><?php echo $item->name; ?></div>
                    </div>
                    <div class="up__amount">
                        <div class="inpute__amount">
                            <div id="res1"><?php echo $abonementInCart[$item->id]; ?></div>
                            <input type="number" id="num1" min="0" class="uk-form-small" name="quantity" value="0">
                        </div>
                    </div>
                    <div class="up__сost">
                        <div class="up__text">
                            <p><?php echo $item->price; ?> руб.</p>
                            <div><a href="<?php echo Url::to(['cart/delete', 'id' => $item->id]); ?>"><img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/cross.png" class="up__text-deite" alt=""></a></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="cart__down">
                <div class="down__total">Стоимость</div>
                <div class="down__cost"><?php echo $totalPrice; ?> рублей</div>
            </div>
        </div>
        <button id="order" type="button">Оформить заказ</button>
    <?php else : ?>
        <div class="cart-empty">Корзина пуста</div>
    <?php endif; ?>
</main>