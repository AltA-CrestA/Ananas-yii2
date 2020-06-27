<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model SignupForm */

use frontend\models\forms\SignupForm;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Авторизация';
?>

<section class="login-content">
    <div class="login-container">
        <div class="login-top">
            <div class="login-title">Войти в личный кабинет</div>
            <div class="login-text">Нет личного кабинета?
                <a href="<?php echo Url::to(['user/signup']); ?>" class="login__link">Зарегистрируйтесь</a>
            </div>
        </div>
        <?php $form = ActiveForm::begin(['id' => 'login-form', 'options' => ['class' => 'login-form',]]); ?>
            <div class="login__string">
                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'login__input']) ?>
            </div>
            <div class="login__string">
                <?= $form->field($model, 'password')->passwordInput(['class' => 'login__input']) ?>
            </div>
            <div class="checkbox__login">
                <?= Html::checkbox('checkbox__input', true, ['label' => 'Запомнить меня', 'id' => 'checkbox__input']) ?>
            </div>
            <div id="active" class="login-bottom">
                <?= Html::submitButton('Создать аккаунт', ['class' => 'button__login', 'name' => 'button__login']) ?>
            </div>

        <?php ActiveForm::end(); ?>
    </div>
</section>
