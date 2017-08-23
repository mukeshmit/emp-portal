<?php
use kartik\social\FacebookPlugin;
use kartik\social\TwitterPlugin;
use nirvana\instafeed\Instafeed;
// use kartik\grid\GridView;
use yii\helpers\Html;
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
<div class="modal fade" id="myModal2" role="dialog">
	<div class="modal-dialog-1">
	<!-- Modal content-->
		<div class=" areapopup-1 paddingZ">
			<div class="contct-details">
				<div class="contact-left">
					<form action="#" method="post">
						<div class="col-md-12 col-sm-12 col-xs-12 paddingZ">
							<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/ribbon.jpg'; ?>" class="ribonsection ribbonarea">
							<a href="#" class="closeWin-1" type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></a>
							<p class="WinDheader2">Submit News Flash</p>
						</div>
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12 text-center">
								<label for="search55" >To:</label>
								<select name="search" class="sectionarea12 option-contact-area" id="search55"  class="" type="text">
									<option value="">All Critical Show ; All Critical Content</option>
								</select>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12  text-center">
								<label for="searcharea" class="bodyarea">Body:</label>
								<div class="msoffice">
									<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/msoffice.jpg'; ?>" class="office">
								</div>
							</div>
							<div class="">
								<button class="button-section5">SEND</button>
							</div>
							<div class="clearfix"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 paddingZ portal-direct areapattern">
	<div class="col-md-12 col-sm-12 col-xs-12 abosDiv ">
		<div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivEiiiuur portalshow">
				<div class="col-md-12 col-sm-12 col-xs-12 paddingZ">
					<div class="col-md-6 col-sm-6 col-xs-9 paddingZ">
						<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/News-flash.png'; ?>" class="">
					</div>
					<div class="col-md-6 col-sm-6 col-xs-3 ">
						<button class="button-add" data-toggle="modal" data-target="#myModal2">ADD</button>
					</div>
				</div>
				
				<div class="col-md-12 col-sm-12 col-xs-12 paddingZ margintoparea">
					<div class="col-md-2 col-sm-3 col-xs-5 paddingZ pointerclass flash ">
						<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/work1.jpg'; ?>">
						<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/work2.jpg'; ?>">
						<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/work3.jpg'; ?>">
					</div>
					<div class="col-md-1 col-sm-2 col-xs-2 paddingZ areawith12">
						<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal-group1.png'; ?>">
					</div>
					<div class="col-md-9 col-sm-7 col-xs-12 padd000 padsh5 areawidth66">
					<h2 class="portalheading"><span class="portal-areadesign">TUNE IN: Tia Season Finale SUNDAY!</span><span class="portal-areadate7"> -- 7/17/2017 </span></h2>
					<p class="sectiondesign" >Gather 'round and raise a toast to the final episode of the season! The 
					season three finale of Tia Mowry at Home airs this Sunday, February 26th at 5:30pm PT | 
					8:30pm ET on Cooking Channel.</p>
					</div>
				</div>
				
				<div class="col-md-12 col-sm-12 col-xs-12 paddingZ margintoparea">
					<div class="col-md-2 col-sm-3 col-xs-5 paddingZ pointerclass  flash">
						<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/work1.jpg'; ?>">
						<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/work2.jpg'; ?>">
						<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/work3.jpg'; ?>">
					</div>
					<div class="col-md-1 col-sm-2 col-xs-2 paddingZ areawith12">
						<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal-group2.png'; ?>">
					</div>
					<div class="col-md-9 col-sm-7 col-xs-12 padd000 padsh5 areawidth66">
						<h2 class="portalheading"><span class="portal-areadesign">TUNE IN: Besties Brunch with Tia SUNDAY!</span><span class="portal-areadate7"> -- 7/12/2017 </span></h2>
						<p class="sectiondesign" >Be sure to catch the next episode of Tia Mowry at Home on Cooking Channel 
					this Sunday, February 19th at 5:30pm PT | 8:30pm ET. Don’t forget to tune in and set your DVRs!</p>
					</div>
				</div>
			</div>
			
		</div>
</div>
	
				<div class="col-md-1 widd6 curareas">
				<div class="col-md-12 col-sm-12 col-xs-12 newsfeed">
					<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/mewsflashimges.png'; ?>" class="newsfedd" alt="newsflashimg">
				<div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivExtLvlSide caledivextra portalshow areaheadinaas">
						
						<div class="col-md-3 col-sm-3 col-xs-12 paddingZ">
							<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal-group1.png'; ?>" >
						</div>
						<div class="col-md-9 col-sm-9 col-xs-10 paddingZ">
							<h2 class="portal-section">TUNE IN: Tie Season Finale SUNDAY!</h2>
							<p class="portal-sectionpara">Gather 'round and raise a toast to the final episode of the season! The season three finale 
								of Tia mowry at Home airs this Sunday, February 26th at 5:30pm PT I 8:30pm ET on Cooking Channel.
							</p>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 paddingZ m-t-12 margintoparea">
							<div class="col-md-3 col-sm-3 col-xs-12 paddingZ">
								<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal-group2.png'; ?>" >
							</div>
							<div class="col-md-9 col-sm-9 col-xs-10 paddingZ ">
								<h2 class="portal-section">TUNE IN: Besties Brunch with Tia SUNDAY!</h2>
									<p class="portal-sectionpara">Be sure to catch the next episode of Tie Mowry at Home on Cooking Channel this Sunday.
											February 19th at 5:30pm PT I 8:30pm ET. Don’t  forget to tune in and set your DVRs! 
									</p>
							</div>
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