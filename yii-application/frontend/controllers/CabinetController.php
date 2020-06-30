<?php


namespace frontend\controllers;


use frontend\controllers\behaviors\AccessBehavior;
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

}