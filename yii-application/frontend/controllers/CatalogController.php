<?php


namespace frontend\controllers;


use frontend\models\Product;
use Yii;
use yii\web\Controller;

class CatalogController extends Controller
{

    public function actionIndex()
    {
        $condition = ['status' => Yii::$app->params['enableStatus']];
        $productList = Product::find()->where($condition)->orderBy('id')->all();
        $currentUser = Yii::$app->user->identity;

        return $this->render('index', [
            'productList' => $productList,
            'currentUser' => $currentUser
        ]);
    }

   public function actionCategory($category, $id)
   {
       $currentUser = Yii::$app->user->identity;

       if ($category == 'women') {
           $conditionWomen = [
               'status' => Yii::$app->params['enableStatus'],
               'category' => Yii::$app->params['womenCategory'],
               'category_id' => $id,
           ];
           $productListWomen = Product::find()->where($conditionWomen)->all();
       } elseif ($category == 'men') {
           $conditionMen = [
               'status' => Yii::$app->params['enableStatus'],
               'category' => Yii::$app->params['menCategory'],
               'category_id' => $id,
           ];
           $productListMen = Product::find()->where($conditionMen)->all();
       } elseif ($category == 'bisex') {
           $conditionBisex = [
               'status' => Yii::$app->params['enableStatus'],
               'category_bisex_id' => $id,
           ];
           $productListBisex = Product::find()->where($conditionBisex)->all();
       }

       return $this->render('category', [
           'productListWomen' => $productListWomen,
           'productListMen' => $productListMen,
           'productListBisex' => $productListBisex,
           'category' => $category,
           'currentUser' => $currentUser,
       ]);
   }

}