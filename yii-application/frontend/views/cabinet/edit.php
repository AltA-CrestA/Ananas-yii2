<?php

/* @var $this yii\web\View */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\widgets\MaskedInput;

$this->title = 'Редактировать данные — Ананас Shop-sharing';
?>

<main>
    <div class="edit-wrapper">
        <section class="edit">
            <div class="edit-title">Редактировать персональные данные</div>

            <?php $form = ActiveForm::begin([
                'options' => ['class' => 'edit-inputs',]
            ]); ?>
                <div class="edit-inputs__input">
                    <?= $form->field($model, 'name')->input('text', ['value' => Yii::$app->user->identity->name]) ?>
                </div>
                <div class="edit-inputs__input">
                    <?= $form->field($model, 'email')->input('email') ?>
                </div>
                <div class="edit-inputs__input">
                    <?= $form->field($model, 'phone')->widget(MaskedInput::className(), [
                        'mask' => '+9 999 999-99-99',
                    ])->input('tel', ['value' => Yii::$app->user->identity->phone]) ?>
                </div>
                <div class="edit-inputs__input">
                    <?= $form->field($model, 'username')->input('text', ['value' => Yii::$app->user->identity->username]) ?>
                </div>
                <div class="edit-buttons">
                    <?= Html::submitButton('Изменить данные', ['class' => 'edit-buttons__link', 'name' => 'do_edit']) ?>
                </div>
            <?php ActiveForm::end(); ?>

        </section>
    </div>
</main>
