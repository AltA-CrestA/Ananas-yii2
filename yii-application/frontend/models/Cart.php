<?php


namespace frontend\models;


use Yii;

class Cart
{

    public static function addAbonement($id)
    {
        $id = intval($id);

        $abonementInCart = array();

        $session = Yii::$app->session;

        if ($session->has('abonement')) {
            $abonementInCart = $session->get('abonement');
        }

        if (array_key_exists($id, $abonementInCart)) {
            $abonementInCart[$id] ++;
        } else {
            $abonementInCart[$id] = 1;
        }

        $session->set('abonement', $abonementInCart);

        return self::CountAbonement();
    }

    public static function CountAbonement()
    {
        $session = Yii::$app->session;

        if ($session->has('abonement')) {
            $count = 0;
            foreach ($session->get('abonement') as $id => $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        }

        return 0;
    }

    public static function getAbonementFromCart()
    {
        $session = Yii::$app->session;
        if ($session->has('abonement')) {
            return $session->get('abonement');
        }
        return false;
    }

    public static function getTotalPrice($abonement)
    {
        $abonementInCart = self::getAbonementFromCart();
        $total = 0;

        if ($abonementInCart) {
            foreach ($abonement as $item) {
                $total += $item['price'] * $abonementInCart[$item['id']];
            }
        }

        return $total;
    }

    public static function deleteAbonement($id)
    {
        $abonementInCart = self::getAbonementFromCart();

        unset ($abonementInCart[$id]);

        Yii::$app->session['abonement'] = $abonementInCart;
    }

}