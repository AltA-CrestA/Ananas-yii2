<?php

namespace frontend\controllers;

class UserController extends \yii\web\Controller
{
    public function actionLogin()
    {
        return $this->render('login');
    }

    public function actionSignup()
    {
        return $this->render('signup');
    }

}
