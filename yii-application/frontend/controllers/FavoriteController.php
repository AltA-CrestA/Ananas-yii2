<?php

namespace frontend\controllers;

use frontend\controllers\behaviors\AccessBehavior;
use frontend\models\Product;
use frontend\models\User;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class FavoriteController extends Controller
{

    public function behaviors()
    {
        return [
            AccessBehavior::className(),
        ];
    }

    public function actionIndex()
    {
        $user = Yii::$app->user->identity;

        return $this->render('index', [
            'user' => $user,
        ]);
    }

    public function actionAdd($id)
    {
        /* @var $currentUser User */
        $currentUser = Yii::$app->user->identity;

        $product = $this->findProductById($id);

        $currentUser->addFavorite($product);

        return $this->redirect(['favorite/index']);
    }

    public function actionDelete($id)
    {
        /* @var $currentUser User */
        $currentUser = Yii::$app->user->identity;

        $product = $this->findProductById($id);

        $currentUser->deleteFavorite($product);

        return $this->redirect(['favorite/index']);
    }

    /**
     * @param $id
     * @return Product| int || null
     * @throws NotFoundHttpException
     */
    public function findProductById($id)
    {
        if ($product = Product::findOne($id)) {
            return $product;
        }
        throw new NotFoundHttpException();
    }

}
