<?php


namespace frontend\controllers\behaviors;


use Yii;
use yii\base\Behavior;
use yii\web\Controller;

class LoggedUserBehavior extends Behavior
{

    public function events()
    {
        return [
            Controller::EVENT_BEFORE_ACTION => 'LoggedAccess',
        ];
    }

    public function LoggedAccess()
    {
        if (!Yii::$app->user->isGuest) {
            return Yii::$app->controller->redirect(['cabinet/index']);
        }
    }

}