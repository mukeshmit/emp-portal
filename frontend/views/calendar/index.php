<?php
use yii\widgets\ActiveForm;
use kartik\social\FacebookPlugin;
use kartik\social\TwitterPlugin;
use nirvana\instafeed\Instafeed;
use frontend\models\Newsflash;

$Newsflash = Newsflash::find()->orderBy(['created_at' => SORT_DESC])->limit(3)->all();
// use kmarenov\instagram\InstagramWidget;
/* @var $this yii\web\View */

$this->title = 'Employee Portal - Calendar';



// echo FacebookPlugin::widget(['appId' => '1393509477405036','type'=>FacebookPlugin::POST, 'settings' => ['href'=>'https://www.facebook.com/CriticalContent/posts/1505631216126684']]);

// echo TwitterPlugin::widget([
      // 'screenName' => 'KUMARMku',
      // 'type' => TwitterPlugin::TWEET,
      // 'settings' => ['size' => 'large']
  // ]);
  
 
// die;

// $config = Yii::$app->instafeedConfig;
// var_dump($config);
// die;

// echo Instafeed::widget([
				// 'pluginOptions' => [
					// 'get' => 'user',
					// 'userId' => 'dcf70018fd4f47a7bffeeb3e135cb418',
					// 'accessToken' => '4457192918.1677ed0.520942912c6b491598e3e823cce18c81',
				// ],
			// ]);

?>
<style>
.fb_iframe_widget iframe {
    position: absolute;
    width: 100% !important;
    height: 200px !important;
}
.fb_iframe_widget span {
    display: inline-block;
    position: relative;
    text-align: justify;
    width: 190px !important;
    height: 200px !important;
}
</style>
<div class="col-md-6 col-sm-6 col-xs-12  paddingZ portal-direct caledivexaraa portal-calender1 areapattern1">
	<div class="">
		<ul class="list-inline pull-right mycalender">
		<li class="paddingZ"><button class="refresh1"><i class="fa fa-calendar" aria-hidden="true"></i></button></li>
		<li><button class="refresh"><i class="fa fa-refresh freshicon" aria-hidden="true"></i>Refresh</button></li>
	</div>
	<div class="x_content ">
		<div id='calendar'></div>
	</div>
</div>