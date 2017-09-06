<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
// use yii\widget\Block;
use yii\helpers\Url;
use kartik\social\FacebookPlugin;
use kartik\social\TwitterPlugin;
use nirvana\instafeed\Instafeed;
// use yii\widgets\Pjax;
// use kartik\grid\GridView;

use yii\widgets\LinkPager;
use yii\data\Pagination;
use frontend\models\Newsflash;
use dosamigos\ckeditor\CKEditor;

$Newsflash = Newsflash::find()->orderBy(['created_at' => SORT_DESC])->limit(3)->all();

?>

<div class="col-md-1 widd6 curareas">
	<div class="col-md-12 col-sm-12 col-xs-12 newsfeed" onclick="return go_to_newsflash()">
		<a href="/news-flash"><img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/mewsflashimges.png'; ?>" class="newsfedd" alt="newsflashimg"></a>
		<div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivExtLvlSide caledivextra portalshow">	
				<?php if(!empty($Newsflash)){ foreach ($Newsflash as $Newsflashes): ?>
						
						<?php 
							if (file_exists(Yii::getAlias('@web').'/uploads/'.$Newsflashes->image)) {
								$imgUrl = Yii::getAlias('@web').'/uploads/'.$Newsflashes->image;
							}else{
								$imgUrl = Yii::getAlias('@web').'/uploads/no-image.jpg';
							}
						?>
						<div class="col-md-12 col-sm-12 col-xs-12 paddingZ m-t-12">
							<div class="col-md-3 col-sm-3 col-xs-12 paddingZ">
								<img src="<?php echo $imgUrl; ?>" alt="grounp1-img" width="73" height="72">
							</div>
							<div class="col-md-9 col-sm-9 col-xs-10 paddingZ">
								<h2 class="portal-section"> <?php echo ucwords($Newsflashes->title).' - '.date('m/d/y H:i A',$Newsflashes->created_at); ?></h2>
								<div class="portal-sectionpara">
									<?php echo substr(ucwords($Newsflashes->body),0,140); ?>
								</div>
							</div>
						</div>
					
				<?php endforeach; } ?>
				<div class="col-md-12 col-sm-12 col-xs-12 paddingZ postorre">
					<a style="cursor:pointer"><img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/arrow-box.jpg'; ?>" id="" class="img-responsive imageArrw1" alt="Arrow Icon"></a> <!-- imageArrw1 toggleProfile1-->
				</div>
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