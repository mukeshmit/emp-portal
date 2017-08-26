<?php
// die('asdasd');
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
	<!----------------------my model window for whatsapp--------------------->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
		<!-- Modal content-->
		<div class=" areapopup paddingZ">
			<div class="contct-details">
				<div class="contact-left">
					<form action="#" method="post">
						<div class="col-md-12 col-sm-12 col-xs-12 paddingZ">
							<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal-directory-text-banner.png'; ?>" class="ribonsection">
								<p class="WinDheader">Text Select Users</p>
								<a href="#" class="closeWin" type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></a>
						</div>
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12 text-center colorDfffrnt">
								<label for="search55" >To:</label>
								<input name="Name" class="sectionarea11" id="search55"  required="" type="text" placeholder=" Shervin Taheri, Jason Mehrvarz,David Kianfar"  style="color: #8f8f91;">
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12  text-center colorDfffrnt">
								<label for="searcharea" class="bodyarea">Body:</label>
								<textarea id="searcharea" name="Message" class="contmil90" placeholder="Testing "></textarea>
								<span class="sapnarea">--Send form Portal--</span>
							</div>								
							<div class="submitWinBtn">
								<button class="button-section1">SEND</button>
							</div>
							<div class="clearfix"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
		</div>
	</div>
	<!----------------------my model window for mail--------------------->		
	<div class="modal fade" id="myModal1" role="dialog">
		<div class="modal-dialog">
		<!-- Modal content-->
			<div class=" areapopup paddingZ">
				<div class="contct-details">
					<div class="contact-left">
						<form action="#" method="post">
							<div class="col-md-12 col-sm-12 col-xs-12 paddingZ">
								<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal-directory-emai-bannerl.png'; ?>" class="ribonsection">
								<a href="#" class="closeWin" type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></a>
								<p class="WinDheader">Email Selected Users</p>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12 text-center">
									<label for="search55" >To:</label>
									<input name="Name" class="sectionarea11" id="search55"  required="" type="text" placeholder=" Shervin Taheri, Jason Mehrvarz,David Kianfar"  style="color: #8f8f91;">
								</div>
									<div class="clearfix"></div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12 text-center">
									<label for="search56" >Subject:</label>
									<input name="Name" class="sectionarea11" id="search56"  required="" type="text" placeholder=" Testing"  >
								</div>
									<div class="clearfix"></div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12  text-center">
									<label for="searcharea" class="bodyarea">Body:</label>
										<textarea id="searcharea" name="Message" class="contmil90" placeholder="Testing "></textarea>
									<span class="sapnarea">--Send form Portal--</span>
								</div>
								
								<div class="submitWinBtn">
								<button class="button-section1">SEND</button>
								</div>
								<div class="clearfix"></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="col-md-6 col-sm-6 col-xs-12 paddingZ portal-direct alletarea">
			<div class="col-md-5 col-sm-5 col-xs-12 paddingZ areaportal">
				<div class="col-md-12 col-sm-12 col-xs-12 abosDiv ">
					<div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleareaasire portalshow">
						<div class="col-md-12 col-sm-12 col-xs-12 portal-direct-img">
							<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal-direct1.jpg'; ?>" class="img-responsive imageuser" >
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="contct-details">
									<div class="contact-right">
										<form action="#" method="post">
										<div class="row">
											<div class="col-md-12 col-sm-12 col-xs-12 row-rigid areaform namearea">
											<label for="search16" >Name:</label>
											<input name="Name" id="search16"  required="" type="text" placeholder="First Or Last" class="input-name pad005">
											
											</div>
												
											<div class="clearfix"></div>
										</div>
											<div class="row">
											<div class="col-md-12 col-sm-12 col-xs-12 row-rigid areaform pordel-dirct-title">
											<label for="search17" >Title:</label>
											<input name="Name" id="search17"  required="" type="text" >
											
											</div>
												
											<div class="clearfix"></div>
										</div>
											<div class="row">
											<div class="col-md-12 col-sm-12 col-xs-12 row-rigid paddingZ department">
											<label for="search18" >Department:</label>
											<select name="search" id="search18" class="option-contact" type="text">
								 <option value="">Information Technology </option>
								 
								</select>
											</div>
												
											<div class="clearfix"></div>
										</div>
											<div class="row">
											<div class="col-md-12 col-sm-12 col-xs-12 row-rigid areaform pordel-dirct-office">
											<label for="search19" >Office:</label>
											<select name="search" id="search19" class="option-contact1 " type="text">
								 <option value="">Select</option>
								 
								</select>
											
											</div>
												
											<div class="clearfix"></div>
										</div>
										<div class="row">
											<div class="col-md-12 col-sm-12 col-xs-12 row-rigid areaform pordel-dirct-mobile">
											<label for="search20" >Mobile:</label>
											<input name="Name" id="search20" class="directwidth" required=""  type="text">
											
											</div>
												
											<div class="clearfix"></div>
										</div>
										<div class="row">
											<div class="col-md-12 col-sm-12 col-xs-12 row-rigid areaform pordel-dirct-tel">
											<label for="search21" >Tel:</label>
											<input name="Name" id="search21"  class="directwidth" required="" type="text">
											
											</div>
												
											<div class="clearfix"></div>
										</div>
										<div class="row text-center">
										<button class="button-section">SEARCH</button>
										</div>
									</div>
								</div>
							</div>
					</div>
				</div>
			</div>
		   <div class="col-md-7 col-sm-7 col-xs-12 portal700 paddingZ">
				<div class="col-md-12 col-sm-12 col-xs-12 abosDiv padright">
					<div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleareaasire portalshow">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<h2 class="diecttable"><span class="tableseclet">Select</span><span class="tablename">Name</span><span class="tablecontact">Contact</span><span>Action</span></h2>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 m-b-25">
						<div class="col-md-2 col-sm-2 col-xs-12 paddingZ areacheck" >
							<div class="squaredTwo checkboxset">
								<fieldset>
									  <legend class="hidden-section">checkbox </legend>
										<input value="None" id="squaredTwo1" name="check" checked="" type="checkbox">
										<label for="squaredTwo1" class="hidden-section">cheackbox</label>
								</fieldset>
							</div>
							<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/man-1.jpg'; ?>" class="m-l-22 img-responsive">
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12 tbletechnique paddingZ margin12">
							<p>Alan Pekarsky</p>
							<p>It Assistant</p>
							<p>Information Technology</p>
							<p>Empire</p>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12 dirctcontact tbletechnique1 paddingZ">
							<p><span>O:</span> (424) 230-5914</p>
							<p><span>C:</span> (424) 230-5915</p>
							<p class="id-margin"><span>E:</span> ITAsst@criticalcontect.com</p>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-12 paddingZ alliconwidth">
							<p><span class="whatappdirect"><i class="fa fa-whatsapp" aria-hidden="true"  ></i></span>
							<span class="evelopdirect"><i class="fa fa-envelope-o" aria-hidden="true" ></i></span>
							<span class="slpyedirect"><i class="fa fa-skype" aria-hidden="true" ></i></span></p>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 m-b-25">
						<div class="col-md-2 col-sm-2 col-xs-12 paddingZ areacheck" >
							<div class="squaredTwo checkboxset">
								<fieldset>
									  <legend class="hidden-section">checkbox </legend>
										<input value="None" id="squaredTwo" name="check" checked="" type="checkbox">
										<label for="squaredTwo" class="hidden-section">cheackbox</label>
								</fieldset>
							</div>
							<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/man-2.jpg'; ?>" class="m-l-22 img-responsive">
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12 tbletechnique paddingZ margin12">
							<p>David Kianfar</p>
							<p>IT Technician</p>
							<p>Information Technology</p>
							<p>PDC</p>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12 dirctcontact tbletechnique1 paddingZ">
							<p><span>O:</span> (424) 230-5915</p>
							<p><span>C:</span> (818) 605-5872</p>
							<p class="id-margin-1"><span>E:</span> David.Kianfar@criticalcontect.com</p>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-12 paddingZ alliconwidth">
							<p><span class="whatappdirect"><i class="fa fa-whatsapp" aria-hidden="true"></i></span>
							<span class="evelopdirect"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
							<span class="slpyedirect"><i class="fa fa-skype" aria-hidden="true"></i></span></p>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 m-b-25">
						<div class="col-md-2 col-sm-2 col-xs-12 paddingZ areacheck" >
							<div class="squaredTwo checkboxset">
								<fieldset>
									  <legend class="hidden-section">checkbox </legend>
										<input value="None" id="squaredTwo2" name="check" checked="" type="checkbox">
										<label for="squaredTwo2" class="hidden-section">cheackbox</label>
								</fieldset>
							</div>
							<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/man-3.jpg'; ?>" class="m-l-22 img-responsive">
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12 tbletechnique paddingZ margin12">
							<p>Jason Mehrvarz</p>
							<p>IT Technician</p>
							<p>Information Technology</p>
							<p>PDC</p>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12 dirctcontact tbletechnique1 paddingZ">
							<p><span>O:</span> (424) 230-5913</p>
							<p><span>C:</span> (818) 481-2524</p>
							<p class="id-margin-1"><span>E:</span> jasonmehrvarz@criticalcontect.com</p>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-12 paddingZ alliconwidth">
							<p><span class="whatappdirect"><i class="fa fa-whatsapp" aria-hidden="true"></i></span>
							<span class="evelopdirect"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
							<span class="slpyedirect"><i class="fa fa-skype" aria-hidden="true"></i></span></p>
						</div>
					</div>
						<div class="col-md-12 col-sm-12 col-xs-12 m-b-25">
						<div class="col-md-2 col-sm-2 col-xs-12 paddingZ areacheck" >
							<div class="squaredTwo checkboxset">
								<fieldset>
									  <legend class="hidden-section">checkbox </legend>
										<input value="None" id="squaredTwo3" name="check" checked="" type="checkbox">
										<label for="squaredTwo3" class="hidden-section">cheackbox</label>
								</fieldset>
							</div>
							<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/man1.jpg'; ?>" class="m-l-22 img-responsive">
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12 tbletechnique paddingZ margin12">
							<p>Shervin Taheri</p>
							<p>IT Technician</p>
							<p>Information Technology</p>
							<p>PDC</p>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12 dirctcontact tbletechnique1 paddingZ">
							<p><span>O:</span> (424) 230-5912</p>
							<p><span>C:</span> (818) 481-5080</p>
							<p class="id-margin-1"><span>E:</span> Shervin.Taheri@criticalcontect.com</p>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-12 paddingZ alliconwidth">
							<p><span class="whatappdirect"><i class="fa fa-whatsapp" aria-hidden="true"></i></span>
							<span class="evelopdirect"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
							<span class="slpyedirect"><i class="fa fa-skype" aria-hidden="true"></i></span></p>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="col-md-6 col-sm-6 col-xs-12 diecttable1">
						<p data-toggle="modal" data-target="#myModal"><img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/meassanger.jpg'; ?>"></i>Text messege selected</p>
						<p data-toggle="modal" data-target="#myModal1" class="directiconmes"><i class="fa fa-envelope-o direct-iconemail" aria-hidden="true"></i>Email Selected</p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 diecttable1 pull-right">
							<p class="pull-right">4 Record Found . page 1 of 1</p>
						</div>
					</div>
	   </div>
	   
	   </div>
		</div>
	</div>
       
	<div class="col-md-1 col-sm-1 col-xs-1 widd6">
		<div class="col-md-12 col-sm-12 col-xs-12 newsfeed">
			<a href="/news-flash"><img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/mewsflashimges.png'; ?>" class="newsfedd" alt="newsflashimg"></a>
			<div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivExtLvlSide caledivextra portalshow">
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

			<div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivExtLvlSide1 caledivextra">
				<?php 
					echo FacebookPlugin::widget(['appId' => '1393509477405036','type'=>FacebookPlugin::POST, 'settings' => ['href'=>'https://www.facebook.com/CriticalContent/posts/1505631216126684']]); 
				?>
			</div>
		</div>
		<div class="col-md-12 col-sm-12 col-xs-12 newsfeed">
			<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/twiiter1.png'; ?>" class="newsfedd2">
			<div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivExtLvlSide2 caledivextra">
				<?php 
					echo TwitterPlugin::widget(['type'=>TwitterPlugin::TWEET, 'content' => '<blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr"><a href="https://twitter.com/hashtag/TheLoweFiles?src=hash">#TheLoweFiles</a> WED 8/2 on <a href="https://twitter.com/AETV">@AETV</a> <a href="https://t.co/gt8cw48IrV">https://t.co/gt8cw48IrV</a></p>&mdash; Critical Content (@critcalcontent) <a href="https://twitter.com/critcalcontent/status/892096557914349568">July 31, 2017</a></blockquote><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>', 'settings' => ['href'=>'https://twitter.com/critcalcontent']]);
				?>
			</div>
		</div>
		<div class="col-md-12 col-sm-12 col-xs-12 newsfeed">
			<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/instagram1.png'; ?>" class="newsfedd3">
			<div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivExtLvlSide3 caledivextra areasectionWide">
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