<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model SignupForm */

use frontend\models\forms\SignupForm;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Регистрация';
?>

<section class="signup">
    <div class="signup-container">
        <h1 class="signup-title">Создание аккаунта</h1>
        <?php $form = ActiveForm::begin([
                'id' => 'form-signup',
                'options' => ['class' => 'signup-form',]
        ]); ?>

        <div class="signup-row">
            <div class="signup__string">
                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'signup-input']) ?>
            </div>
            <div class="signup__string">
                <?= $form->field($model, 'email')->input('email', ['class' => 'signup-input']) ?>
            </div>
        </div>
        <div class="signup-row">
            <div class="signup__string">
                <?= $form->field($model, 'password')->passwordInput(['class' => 'signup-input']) ?>
            </div>
        </div>
        <div class="signup-row">
            <div class="checkbox__register">
                <?= Html::checkbox('signup-checkbox', true, ['label' => 'Я согласен на обработку персональных данных согласно политике конфиденциальности', 'id' => 'signup-checkbox']) ?>
            </div>
            <?= Html::submitButton('Создать аккаунт', ['class' => 'signup__button', 'name' => 'signup-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</section>