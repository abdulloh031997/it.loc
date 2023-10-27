<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "css/owl.carousel.min.css",
        "css/owl.theme.default.css",
        "css/materialdesignicons.min.css",
        "css/aos.css",
        "css/style.min.css",
        "css/site.css",

    ];
    public $js = [
        "js/jquery.min.js",
        "js/bootstrap.min.js",
        "js/owl.carousel.min.js",
        "js/aos.js",
        "js/landingpage.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
