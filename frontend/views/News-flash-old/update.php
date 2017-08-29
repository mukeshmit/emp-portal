<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\social\FacebookPlugin;
use kartik\social\TwitterPlugin;
use nirvana\instafeed\Instafeed;
// use kartik\grid\GridView;

use yii\widgets\LinkPager;
use yii\data\Pagination;
use frontend\models\Newsflash;
use dosamigos\ckeditor\CKEditor;

// $model = new Newsflash();

$Newsflash = Newsflash::find()->orderBy('created_at')->limit(2)->all();
//use yii\widgets\Pjax;
/* use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax; */
/* @var $this yii\web\View */
/* @var $searchModel app\backend\models\SearchNewsFlash */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Portal Content : Admin News Flash');
$this->params['breadcrumbs'][] = $this->title;

echo Instafeed::widget([
    'pluginOptions' => [
        'get' => 'user',
        'userId' => 'dcf70018fd4f47a7bffeeb3e135cb418',
        'accessToken' => '4457192918.1677ed0.520942912c6b491598e3e823cce18c81',
    ],
]);

$model->type= '1';

/* @var $this yii\web\View */
/* @var $model app\backend\models\Newsflash */

// $this->title = Yii::t('app', 'Update {modelClass}: ', [
    // 'modelClass' => 'Newsflash',
// ]) . $model->title;
/* $this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Newsflashes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update'); */
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
<!-------------------model window for skup------------------->

<div class="col-md-6 col-sm-6 col-xs-12 paddingZ portal-direct areapattern">
	<div class="col-md-12 col-sm-12 col-xs-12 abosDiv ">
		<div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivEiiiuur portalshow">
				<div class="col-md-12 col-sm-12 col-xs-12 paddingZ">
					<div class="col-md-6 col-sm-6 col-xs-9 paddingZ" style="margin-bottom:15px!important">
						<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/newsflashimgesadmin.png'; ?>" class="">
					</div>
					<div class="col-md-6 col-sm-6 col-xs-3 ">
						<a class="button-add" href="/news-flash">Back</a>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 paddingZ margintoparea">
					<?= $this->render('_form', [
										'model' => $model,
									]) ?>
				</div>
		</div>	
	</div>
</div>
	
			<div class="col-md-1 widd6 curareas">
				<div class="col-md-12 col-sm-12 col-xs-12 newsfeed">
					<a href="/news-flash"><img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/mewsflashimges.png'; ?>" class="newsfedd" alt="newsflashimg"></a>
					<div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivExtLvlSide caledivextra portalshow areaheadinaas">
						<?php if(!empty($Newsflash)){ foreach ($Newsflash as $Newsflashes): ?>
							
								<div class="col-md-3 col-sm-3 col-xs-12 paddingZ">
									<img src="<?php echo Yii::getAlias('@web').'/uploads/'.$Newsflashes->image; ?>" width="65" height="56" >
								</div>
								<div class="col-md-9 col-sm-9 col-xs-10 paddingZ m-t-12">
									<h2 class="portal-section"><?php echo ucwords($Newsflashes->title).' - '.date('m/d/y H:i A',$Newsflashes->created_at) ?> </h2>
									<p class="portal-sectionpara"><?php echo substr(ucwords($Newsflashes->body),0,140); ?></p>
								</div>
							
						<?php endforeach; } ?>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 newsfeed">
					<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/facebookimg.png'; ?>" class="newsfedd1">
					<div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivExtLvlSide1 caledivextra fixsecton">
						<?php 
							echo FacebookPlugin::widget(['appId' => '1393509477405036','type'=>FacebookPlugin::POST, 'settings' => ['href'=>'https://www.facebook.com/CriticalContent/posts/1505631216126684']]); ?>
						
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 newsfeed">
					<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/twiiter1.png'; ?>" class="newsfedd2">
					<div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivExtLvlSide2 caledivextra fixsecton">
						<?php 
							echo TwitterPlugin::widget(['type'=>TwitterPlugin::TWEET, 'content' => '<blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr"><a href="https://twitter.com/hashtag/TheLoweFiles?src=hash">#TheLoweFiles</a> WED 8/2 on <a href="https://twitter.com/AETV">@AETV</a> <a href="https://t.co/gt8cw48IrV">https://t.co/gt8cw48IrV</a></p>&mdash; Critical Content (@critcalcontent) <a href="https://twitter.com/critcalcontent/status/892096557914349568">July 31, 2017</a></blockquote><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>', 'settings' => ['href'=>'https://twitter.com/critcalcontent']]);
						?>	
                    </div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 newsfeed">
					<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/instagram1.png'; ?>" class="newsfedd3">
                    <div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivExtLvlSide3 caledivextra areasectionWide fixsecton">
                        <div class="col-md-12 col-sm-12 col-xs-12 paddingZ ">
                            <div class="col-md-12 col-sm-12 col-xs-12 paddingZ">
                                <ul class="list-inline linelitForim marBimg">
                                    <li><img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/intagram1.png'; ?>" class="img-responsive"></li>
                                    <li><img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/intagram2.png'; ?>" class="img-responsive"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 paddingZ">
                            <div class="col-md-12 col-sm-12 col-xs-12 paddingZ">
                                <ul class="list-inline linelitForim">
                                    <li><img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/intagram3.png'; ?>" class="img-responsive"></li>
                                    <li><img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/intagram4.png'; ?>" class="img-responsive"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12 hidden-xs hiddSm widd23">	
				<div class="col-md-12 col-sm-12 col-xs-12 abosDiv ">	
                </div>
            </div>