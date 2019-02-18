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
	    'css/animate.min.css',
	    'css/bootstrap.min.css',
	    'css/font-awesome.min.css',
	    'css/jquery.desoslide.css',
	    'css/jquery.desoslide.min.css',
	    'css/jquery.rateyo.css',
	    'css/jquery.rateyo.min.css',
	    'css/jquery-ui.css',
	    'css/owl.carousel.css',
	    'css/owl.theme.default.css',
	    'css/scrolling-nav.css',
	    'css/style.css',
    ];
    public $js = [
	    'js/bootstrap.js',
	    'js/bootstrap.min.js',
	    'js/isotope.pkgd.min.js',
	    'js/jquery.desoslide.js',
	    'js/jquery.desoslide.min.js',
	    'js/jquery.easing.min.js',
	    'js/jquery.rateyo.min.js',
	    'js/jquery.sticky.js',
	    'js/jquery-ui.js',
	    'js/menumaker.js',
	    'js/menumaker.min.js',
	    'js/multiple-carousel.js',
	    'js/owl.carousel.min.js',
	    'js/scrolling-nav.js',
	    'js/sticky-header.js',
	    'js/showUl.js',
	    'js/script.js',

    ];
//	public function init()
//	{
//		if (\Yii::$app->controller->action->id === 'telephone' || 'notebooke') {
//			$this->js[] = 'js/showUl.js';
//		}
//	}
//toDo
	public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
