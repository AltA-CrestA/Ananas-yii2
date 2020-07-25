<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model SignupForm */

use frontend\models\forms\SignupForm;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use yii\widgets\MaskedInput;

$this->title = 'Регистрация';
?>

<section class="signup">
    <div class="signup__container">
        <h2>Создание аккаунта</h2>
        <div class="signup__container-form">
            <?php $form = ActiveForm::begin([
                    'id' => 'form-signup',
                    'options' => ['class' => 'signup__container-form',]
            ]); ?>

            <div class="signup__container-form-item">
                <div class="signup__container-form-item-string">
                    <?= $form->field($model, 'name')->input('text') ?>
                </div>
                <div class="signup__container-form-item-string">
                    <?= $form->field($model, 'email')->input('email') ?>
                </div>
            </div>
            <div class="signup__container-form-item">
                <div class="signup__container-form-item-string">
                    <?= $form->field($model, 'phone')->widget(MaskedInput::className(), [
                        'mask' => '+9 999 999-99-99',
                    ]) ?>
                </div>
                <div class="signup__container-form-item-string">
                    <?= $form->field($model, 'username')->input('text') ?>
                </div>
            </div>
            <div class="signup__container-form-item">
                <div class="signup__container-form-item-string">
                    <?= $form->field($model, 'password')->passwordInput() ?>
                </div>
                <div class="signup__container-form-item-string">
                    <?= $form->field($model, 'password_repeat')->passwordInput() ?>
                </div>
            </div>
            <div class="signup__container-form-item">
                <div class="signup__container-form-item-string">
                    <?= $form->field($model, 'card')->input('text') ?>
                </div>
            </div>
            <div class="signup__container-form-item">
                <div class="checkbox__register">
                    <label>
                        <input type="checkbox" id="signup-checkbox">
                        <div class="checkbox__div"></div>
                    </label>
                    <p>Я согласен на обработку персональных данных согласно <a href="<?= Url::to(['site/privacy']) ?>">политике конфиденциальности</a>.</p>
                </div>
                <?= Html::submitButton('Создать аккаунт', ['class' => 'signup__button', 'name' => 'signup-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</section>