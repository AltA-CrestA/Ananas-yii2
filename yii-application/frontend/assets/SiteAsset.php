<?php


namespace frontend\assets;


use yii\web\AssetBundle;

/**
 * Class SiteAsset
 * @package frontend\assets
 */
class SiteAsset extends AssetBundle
{

    public $css = [
        'css/style.css',
    ];

    public $js = [
        'js/wow.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.5.1/snap.svg-min.js',
        'js/main.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];

}