<?php
use yii\widgets\ActiveForm;
use kartik\social\FacebookPlugin;
use kartik\social\TwitterPlugin;
use nirvana\instafeed\Instafeed;
use frontend\models\Newsflash;

$Newsflash = Newsflash::find()->orderBy('created_at')->limit(2)->all();
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

echo Instafeed::widget([
				'pluginOptions' => [
					'get' => 'user',
					'userId' => 'dcf70018fd4f47a7bffeeb3e135cb418',
					'accessToken' => '4457192918.1677ed0.520942912c6b491598e3e823cce18c81',
				],
			]);

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
<div class="col-md-1 col-sm-1 col-xs-1 widd6 newdare">
		<div class="col-md-12 col-sm-12 col-xs-12 newsfeed">
			<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/mewsflashimges.png'; ?>" class="newsfedd" alt="newsflashimg">					
			<div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivExtLvlSide caledivextra portalshow">
				<?php if(!empty($Newsflash)){ foreach ($Newsflash as $Newsflashes): ?>
							
						<div class="col-md-3 col-sm-3 col-xs-12 paddingZ">
							<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal-group1.png'; ?>" >
						</div>
						<div class="col-md-9 col-sm-9 col-xs-10 paddingZ m-t-12">
							<h2 class="portal-section"><?php echo ucwords($Newsflashes->title).' - '.date('m/d/y H:i A',$Newsflashes->created_at) ?> </h2>
							<p class="portal-sectionpara"><?php echo substr(ucwords($Newsflashes->body),0,140); ?></p>
						</div>
					
				<?php endforeach; } ?>
			</div>
		</div>
		<div class="col-md-12 col-sm-12 col-xs-12 newsfeed">
			<img  src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/facebookimg.png'; ?>" class="newsfedd1" alt="facebook">
			
			<div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivExtLvlSide1 caledivextra facestybook">
				<?php 
			
					echo FacebookPlugin::widget(['appId' => '1393509477405036','type'=>FacebookPlugin::POST, 'settings' => ['href'=>'https://www.facebook.com/CriticalContent/posts/1505631216126684']]); 
					
				?>
			</div>
		</div>
		<div class="col-md-12 col-sm-12 col-xs-12 newsfeed">
			<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/twiiter1.png'; ?>" class="newsfedd2" alt="twitter">
			<div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivExtLvlSide2 caledivextra facestybook1">
				<?php 
					echo TwitterPlugin::widget(['type'=>TwitterPlugin::TWEET, 'content' => '<blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr"><a href="https://twitter.com/hashtag/TheLoweFiles?src=hash">#TheLoweFiles</a> WED 8/2 on <a href="https://twitter.com/AETV">@AETV</a> <a href="https://t.co/gt8cw48IrV">https://t.co/gt8cw48IrV</a></p>&mdash; Critical Content (@critcalcontent) <a href="https://twitter.com/critcalcontent/status/892096557914349568">July 31, 2017</a></blockquote><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>', 'settings' => ['href'=>'https://twitter.com/critcalcontent']]);
				?>	
			</div>
		</div>
		<div class="col-md-12 col-sm-12 col-xs-12 newsfeed">
			<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/instagram1.png'; ?>" class="newsfedd3" alt="intragram">
			<div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivExtLvlSide3 caledivextra areasectionWide facestybook2">
			</div>
		</div>
</div>