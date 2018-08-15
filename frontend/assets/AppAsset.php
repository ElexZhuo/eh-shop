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
        'css/site.css',
        'css/font-awesome.min.css',
        'css/bootstrap.min.css',
        'css/slick-1.6.0/slick.css',
        'css/jquery.fancybox.css',
        'css/yith-woocommerce-compare/colorbox.css',
        'css/owl-carousel/owl.carousel.min.css',
        'css/owl-carousel/owl.theme.default.min.css',
        'css/js_composer/js_composer.min.css',
        'css/woocommerce/woocommerce.css',
        'css/yith-woocommerce-wishlist/style.css',
        'css/yith-woocommerce-wishlist/style.css',
        'css/custom.css',
        'css/app-orange.css',
        ['css/app-orange.css', 'id' => 'theme_color'],
        ['','id' => 'rtl'],
        'css/app-responsive.css',
    ];
    public $js = [
//        'js/jquery/jquery.min.js',
        'js/jquery/jquery-migrate.min.js',
        'js/bootstrap.min.js',
        'js/jquery/js.cookie.min.js',
        'js/owl-carousel/owl.carousel.min.js',
        'js/slick-1.6.0/slick.min.js',
        'js/yith-woocommerce-compare/jquery.colorbox-min.js',
        'js/sw_core/isotope.js',
        'js/sw_core/jquery.fancybox.pack.js',
        'js/sw_woocommerce/category-ajax.js',
        'js/sw_woocommerce/jquery.countdown.min.js',
        'js/js_composer/js_composer_front.min.js',
        'js/plugins.js',
        'js/megamenu.min.js',
        'js/main.min.js',
        'js/widget.min.js',
        'js/mouse.min.js',
        'js/slider.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
