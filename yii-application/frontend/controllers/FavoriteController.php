<?php

namespace frontend\controllers;

use frontend\controllers\behaviors\AccessBehavior;
use frontend\models\Product;
use frontend\models\User;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;

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

    public function actionAdd()
    {
        /* @var $currentUser User */
        $currentUser = Yii::$app->user->identity;
        $id = Yii::$app->request->post('id');

        $product = $this->findProductById($id);

        $currentUser->addFavorite($product);

        Yii::$app->response->format = Response::FORMAT_JSON;

        return [
            'success' => true,
            'favoriteCount' => $currentUser->countFavorite(),
        ];
    }

    public function actionDelete()
    {
        /* @var $currentUser User */
        $currentUser = Yii::$app->user->identity;
        $id = Yii::$app->request->post('id');

        $product = $this->findProductById($id);

        $currentUser->deleteFavorite($product);

        Yii::$app->response->format = Response::FORMAT_JSON;

        return [
            'success' => true,
            'favoriteCount' => $currentUser->countFavorite(),
        ];
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
