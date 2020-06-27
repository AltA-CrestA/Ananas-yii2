<?php

namespace frontend\controllers;

use frontend\models\forms\LoginForm;
use frontend\models\forms\SignupForm;
use Yii;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionLogin()
    {
        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['abonement/index']);
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionSignup()
    {

        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post()) && $user = $model->save()) {
            Yii::$app->user->login($user);
            return $this->redirect(['abonement/index']);
        }
        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->redirect(['site/index']);
    }

}
