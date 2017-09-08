<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
// use yii\widget\Block;
use yii\helpers\Url;
use yii\bootstrap\Button;
use kartik\social\FacebookPlugin;
use kartik\social\TwitterPlugin;
use nirvana\instafeed\Instafeed;
// use yii\widgets\Pjax;
// use kartik\grid\GridView;

use yii\widgets\LinkPager;
use yii\data\Pagination;
use frontend\models\Newsflash;
use dosamigos\ckeditor\CKEditor;

// $model = new Newsflash();
global $Newsflash;
$Newsflash = Newsflash::find()->orderBy(['created_at' => SORT_DESC])->limit(3)->all();
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
button.newsFlashEditModel {
  background: transparent !important;
  border: 0 none !important;
  width: 29px !important;
}
.ribonsection {
  margin-bottom: 0;
  margin-top: 14px;
  max-width: 100%;
}
</style>
<!-------------------model window for skup------------------->


<?php 
	Modal::begin([
		'header' => '<div class="col-md-12 col-sm-12 col-xs-12 paddingZ"><img src="'.Yii::getAlias('@web').'/themes/portal-front/images/ribbon.jpg" class="ribonsection ribbonarea"><p class="WinDheader2">Submit News Flash</p></div>',
		'id'=>'newsFlashModelAdd',
		'size'=>'modal-lg'
	]);
	echo "<div id='modelCOntent' style='overflow:hidden;'></div>";
	Modal::end();
	
	Modal::begin([
		'header' => '<div class="col-md-12 col-sm-12 col-xs-12 paddingZ"><img src="'.Yii::getAlias('@web').'/themes/portal-front/images/ribbon.jpg" class="ribonsection ribbonarea"><p class="WinDheader2">Create a new campaign</p></div>',
		'id'=>'newsFlashCampaign',
		'size'=>'modal-lg'
	]);
	echo "<div id='modelCOntent' style='overflow:hidden;'></div>";
	Modal::end();
?>

<div class="col-md-6 col-sm-6 col-xs-12 paddingZ portal-direct areapattern">
	<div class="col-md-12 col-sm-12 col-xs-12 abosDiv ">
		<div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivEiiiuur portalshow">
				<div class="col-md-12 col-sm-12 col-xs-12 paddingZ">
					<div class="col-md-6 col-sm-6 col-xs-9 paddingZ" style="margin-bottom:15px!important">
						<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/newsflashimgesadmin.png'; ?>" class="">
					</div>
					<div class="col-md-6 col-sm-6 col-xs-3 ">
						<?= Html::button(Yii::t('app', 'ADD'), ['value'=>Url::to('create'),'class'=>'button-add','id'=>'newsFlashModel']) ?>
						<?= Html::button(Yii::t('app', 'Create Campaign'), ['value'=>Url::to('createcampaign'),'class'=>'button-add','id'=>'createcamp']) ?>
						<!-- <button class="button-add" data-toggle="modal" data-target="#myModal2">ADD</button> -->
					</div>
				</div>
				<?php if(!empty($modelDatas)){ foreach ($modelDatas as $modelData): ?>
						<div class="col-md-12 col-sm-12 col-xs-12 paddingZ margintoparea">
							<div class="col-md-2 col-sm-3 col-xs-5 paddingZ pointerclass flash ">
								<a href="<?php echo Url::to('delete?id='.$modelData->id); ?>" title="Delete">
									<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/work1.jpg'; ?>">
								</a>
								<a class="" href="<?php echo Url::to('copy?id='.$modelData->id); ?>" title="Delete">
									<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/work2.jpg'; ?>">
								</a>
								<button type="button" class="newsFlashEditModel" value="<?php echo Url::to('update?id='.$modelData->id); ?>">
									<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/work3.jpg'; ?>">
								</button>
								
								
								<!--
								<a href="javascript:;" id="newsFlashEditModel" value="<?php echo Url::to('update?id='.$modelData->id); ?>" title="Update">
									<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/work3.jpg'; ?>">
								</a> -->
							</div>
							<div class="col-md-1 col-sm-2 col-xs-2 paddingZ areawith12">
								<?php 
								$headers = get_headers(Url::to('@web/uploads/'.$modelData->image, 1));
									// var_dump($headers[0] == "HTTP/1.1 200 OK");
									if ($headers[0] == "HTTP/1.1 200 OK") {
										$imgUrl = Yii::getAlias('@web').'/uploads/'.$modelData->image;
									}else{
										$imgUrl = Yii::getAlias('@web').'/uploads/no-image.jpg';
									}
								?>
								<img src="<?php echo $imgUrl; ?>" width="65" height="56" >
							</div>
							<div class="col-md-9 col-sm-7 col-xs-12 padd000 padsh5 areawidth66">
								<h2 class="portalheading"><span class="portal-areadesign"><?php echo ucwords($modelData->title); ?></span><span class="portal-areadate7"> -- <?php echo date('m/d/y H:i A',$modelData->created_at); ?> </span></h2>
								<div class="sectiondesign"><?php echo ucwords($modelData->body); ?></div>
								<!-- <p class="sectiondesign" ></p> -->
							</div>
						</div>					
				<?php endforeach; }else{
					echo "No news flash created by you.";
				} ?>
				
			<?php echo LinkPager::widget(['pagination' => $pagination]); ?>	
		</div>			
	</div>
</div>
	
