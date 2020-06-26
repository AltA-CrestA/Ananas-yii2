<?php


namespace frontend\models;


use Yii;
use yii\base\Model;

class Category extends Model
{

    public static function getMenCategory()
    {
        $sql = 'SELECT * FROM category_men WHERE status = ' . Yii::$app->params['enableStatus'];
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

    public static function getWomenCategory()
    {
        $sql = 'SELECT * FROM category_women WHERE status = ' . Yii::$app->params['enableStatus'];
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

    public static function getBisexCategory()
    {
        $sql = 'SELECT * FROM category_bisex WHERE status = ' . Yii::$app->params['enableStatus'];
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

}