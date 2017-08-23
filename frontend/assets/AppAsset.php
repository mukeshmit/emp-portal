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
	// 
    public $css = [
        // 'css/site.css',
        'themes/portal-front/css/bootstrap.min.css',
        'themes/portal-front/css/cast.css',
        'themes/portal-front/font-awesome-4.7.0/css/font-awesome.min.css',
        'https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two',
        'themes/portal-front/demo/css/calendar-style.css',
        'themes/portal-front/dist/css/pignose.calendar.css',
        'themes/portal-front/css/fullcalendar.min.css',
        'themes/portal-front/css/fullcalendar.print.css',
        
    ];
	
    public $js = [
		'themes/portal-front/demo/js/jquery.latest.min.js',
		'themes/portal-front/demo/js/moment.latest.min.js',
		'themes/portal-front/dist/js/pignose.calendar.js',
		'themes/portal-front/js/bootstrap.min.js',		
		'themes/portal-front/js/custom-common.js',
		'themes/portal-front/js/fullcalendar.min.js',
		'themes/portal-front/js/custom.min.js',
		
    ];
	
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
