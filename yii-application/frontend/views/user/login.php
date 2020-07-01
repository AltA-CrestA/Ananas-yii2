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

<section class="login">
<div class="login__content">
    <div class="login__content-top">
        <div class="login__content-top-title">Войти в личный кабинет</div>
            <div class="login__content-top-text">Нет личного кабинета?
                <a href="<?php echo Url::to(['user/signup']); ?>" class="login__link">Зарегистрируйтесь</a>
            </div>
        </div>
        <?php $form = ActiveForm::begin(['id' => 'login-form', 'options' => ['class' => 'login__content-form',]]); ?>
            <div class="login__content-form-item">
                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'login__input']) ?>
            </div>
            <div class="login__content-form-item">
                <?= $form->field($model, 'password')->passwordInput(['class' => 'login__input']) ?>
            </div>
            <div class="login__content-form-checkbox">
                <label>
                    <input type="checkbox" name="remember" value="1">
                    <div class="checkbox__div"></div>
                </label>
                <p>Запомнить меня</p>
            </div>
            <div id="active" class="login-bottom">
                <?= Html::submitButton('Войти', ['name' => 'button__login']) ?>
            </div>

        <?php ActiveForm::end(); ?>
    </div>
</section>
