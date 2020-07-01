<?php


namespace frontend\controllers;


use frontend\controllers\behaviors\AccessBehavior;
use frontend\models\Abonement;
use frontend\models\Cart;
use Yii;
use yii\web\Controller;

class CartController extends Controller
{

    public function behaviors()
    {
        return [
            AccessBehavior::className(),
        ];
    }

    public function actionIndex()
    {

        $abonementInCart = Cart::getAbonementFromCart();

        if ($abonementInCart) {
            $abonementIds = array_keys($abonementInCart);

            $condition = ['status' => Yii::$app->params['enableStatus'], 'id' => $abonementIds];
            $abonement = Abonement::find()->where($condition)->all();

            $totalPrice = Cart::getTotalPrice($abonement);
        }


        return $this->render('index', [
            'abonement' => $abonement,
            'abonementInCart' => $abonementInCart,
            'totalPrice' => $totalPrice,
        ]);
    }

    public function actionAdd($id)
    {
        return Cart::addAbonement($id);
    }

    public function actionDelete($id)
    {
        Cart::deleteAbonement($id);

        return Yii::$app->controller->redirect(['cart/index']);
    }

}