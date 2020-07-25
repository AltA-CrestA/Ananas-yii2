<?php


namespace frontend\controllers;


use frontend\controllers\behaviors\AccessBehavior;
use Yii;
use yii\web\Controller;

class CabinetController extends Controller
{

    public function behaviors()
    {
        return [
            AccessBehavior::className(),
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionEdit()
    {
        $user = Yii::$app->user->identity;

        return $this->render('edit', [
            'user' => $user,
        ]);
    }

}