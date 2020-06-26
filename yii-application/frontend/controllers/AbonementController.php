<?php


namespace frontend\controllers;


use frontend\models\Abonement;
use yii\web\Controller;

class AbonementController extends Controller
{

    public function actionIndex()
    {
        $abonementList = Abonement::find()->orderBy('id')->all();

        return $this->render('index', [
            'abonementList' => $abonementList,
        ]);
    }

}