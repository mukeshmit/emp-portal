<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\social\FacebookPlugin;
use kartik\social\TwitterPlugin;
use nirvana\instafeed\Instafeed;
use frontend\models\Newsflash;

$Newsflash = Newsflash::find()->orderBy('created_at')->orderBy(['created_at' => SORT_DESC])->limit(2)->all();


$this->title = 'Portal Content : Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div> -->

    <!-------------------model window for PDC------------------->
    <div class="modal fade" id="myModal_pdc" role="dialog">
        <div class="modal-dialog-21">
            <div class="redBoreHead">
                <div class="redBore">
                    <div class="redBore1">
                        <h2>Pdc</h2>
                        <h6>Thirsty Thursday</h6>
                        <p>Thursday july 20 <span>th</span></p>
                        <div class="divimg">
                            <img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/cocktail-glasses.jpg'; ?>" class="img-responsive" alt="cocktail glasses">
                            <a href="#">acknowledge</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid paddXsZ paddSmZ">
        <div class="container paddXsZ conposition">
            <div class="col-md-12 col-sm-12 col-xs-12 paddingZ">
                <div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 portal-center paddXsZ" >
                    <div class="col-md-4 col-sm-4 col-xs-12 portal-loogin" style="display:block">
                        <div class="col-md-12 col-sm-12 col-xs-12 logoExtra logins aboshadow">
                            <img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/logo1.png'; ?>" alt="logo image" class="img-responsive">
                            <?php $form = ActiveForm::begin(['id' => 'login-form','options' => [ 'class' => 'logInBest']]); ?>
							<?php //= $form->field($model, 'username')->textInput(['autofocus' => true,'placeholder'=>'Username'])->label(false) ?>
                                <!-- <input class="form-group" placeholder="Email" type="email">-->
							<?= $form->field($model, 'username', [
								'template' => '{input} {error}', // Leave only input (remove label, error and hint)
								'options' => [
									'tag' => null, // Don't wrap with "form-group" div,
								],
								'inputOptions' => [
									'placeholder' => 'Username',
									'class'=>'form-group',
									
								]
							])->input('username') ?>

							<?= $form->field($model, 'password', [
								'template' => '{input} <button type="submit" class="login-buton" name="login-button">Login</button> {error}', // Leave only input (remove label, error and hint)
								'options' => [
									'tag' => null, // Don't wrap with "form-group" div,
								],
								'inputOptions' => [
									'placeholder' => 'Password',
									'class'=>'form-group pas-input',
									
								]
							])->input('password') ?>
							
							<?php
							/* = $form->field($model, 'password', [
									'template' => '
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-key emerald"></i></span>
											{input}
										</div>
										{error}',
									'inputOptions' => [
										'placeholder' => 'Password ...',
										'class'=>'form-control',
									]])->input('password') */
							?>
							<?php //= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password','class'=>'form-group pas-input'])->label(false) ?>
							<?php // =Html::submitButton('Login', ['class' => 'login-buton', 'name' => 'login-button']) ?>
							<?php //= $form->field($model, 'rememberMe')->checkbox() ?>
							<?= Html::a('Forget Password ?', ['site/request-password-reset','class'=>'araealeft']) ?>
                                <!-- <input class="form-group pas-input" placeholder="Password" type="password" > -->
							
								<!-- <button class="login-buton">login</button> -->
                                <!-- <a class="araealeft"></a> -->
                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12 paddingZ portal-login-set">
                        <div class="col-md-12 col-sm-12 col-xs-12  ">
                            <div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivEiiiuur logins-1 portalshow posiImpo everiyr">
                                <div class="col-md-12 col-sm-12 col-xs-12 paddingZ">
                                    <div class="col-md-6 col-sm-6 col-xs-9 paddingZ" style="margin-bottom:15px;">
                                        <img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/newsflashimgesadmin.png'; ?>" class="">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-3 ">
                                        <button class="button-add" data-toggle="modal" data-target="#myModal_pdc">PDC</button>
                                    </div>
                                </div>
								
								<?php if(!empty($Newsflash)){ foreach ($Newsflash as $Newsflashes): ?>
							
									
									<div class="col-md-12 col-sm-12 col-xs-12 paddingZ margintoparea">
										<div class="col-md-1 col-sm-2 col-xs-2 paddingZ areawith12 firinDecv">
											<img src="<?php echo Yii::getAlias('@web').'/uploads/'.$Newsflashes->image; ?>" width="65" height="56">
										</div>
										<div class="col-md-11 col-sm-10 col-xs-9 padd000 padsh5 areawidth66 secinDecv">
											<h2 class="portalheading"><span class="portal-areadesign"><?php echo ucwords($Newsflashes->title); ?> </span><span class="portal-areadate7"> -- <?php echo date('m/d/y H:i A',$Newsflashes->created_at)?> </span></h2>
											<p class="sectiondesign"><?php echo ucwords($Newsflashes->body); ?></p>
										</div>
									</div>
									<!-- 
									<div class="col-md-3 col-sm-3 col-xs-12 paddingZ">
										<img src="<?php echo Yii::getAlias('@web').'/uploads/'.$Newsflashes->image; ?>" width="65" height="56" >
									</div>
									<div class="col-md-9 col-sm-9 col-xs-10 paddingZ m-t-12">
										<h2 class="portal-section"><?php echo ucwords($Newsflashes->title).' - '.date('m/d/y H:i A',$Newsflashes->created_at) ?> </h2>
										<p class="portal-sectionpara"><?php echo substr(ucwords($Newsflashes->body),0,140); ?></p>
									</div> -->
								
							<?php endforeach; } ?>
								
                                
								<!--
                                <div class="col-md-12 col-sm-12 col-xs-12 paddingZ margintoparea">
                                    <div class="col-md-1 col-sm-2 col-xs-12 paddingZ areawith12 firinDecv">
										<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal-group2.png'; ?>">
                                    </div>
                                    <div class="col-md-11 col-sm-10 col-xs-9 padd000 padsh5 areawidth66 secinDecv">
                                        <h2 class="portalheading"><span class="portal-areadesign">TUNE IN: Besties Brunch with Tia SUNDAY!</span><span class="portal-areadate7"> -- 7/12/2017 </span></h2>
                                        <p class="sectiondesign">Be sure to catch the next episode of Tia Mowry at Home on Cooking Channel this Sunday, February 19th at 5:30pm PT | 8:30pm ET. Don’t forget to tune in and set your DVRs!</p>
                                    </div>
                                </div> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 paddingZ marNewCon">
                <div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 portal-center-1 paddXsZ">
                    <div class="col-md-4 col-sm-4 col-xs-12 portal-login-2">
                        <div class="col-md-12 col-sm-12 col-xs-12 faceNewS">
                            <img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/facebook-new.png'; ?>" alt="facebook icon" class="img-responsive">
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 aboshadow faceNewSadd">
                            <div class="col-md-12 col-sm-12 col-xs-12 paddingZ pad0Top">
                              
                                <div class="col-md-9 col-sm-9 col-xs-12 pad0Righ secinDecv">
                                   <?php 
			
										echo FacebookPlugin::widget(['appId' => '1393509477405036','type'=>FacebookPlugin::POST, 'settings' => ['href'=>'https://www.facebook.com/CriticalContent/posts/1505631216126684']]); 
									?>
                                </div>

                            </div>
                            
                        </div>

                </div>
                <div class="col-md-5 col-sm-5 col-xs-12 portal-login-set-2 aboshadow">
                        <div class="col-md-12 col-sm-12 col-xs-12 faceNewS">
                            <img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/twitter-new.png'; ?>" alt="twitter icon" class="img-responsive">
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12  faceNewSadd">
							<?php 
								echo TwitterPlugin::widget(['type'=>TwitterPlugin::TWEET, 'content' => '<blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr"><a href="https://twitter.com/hashtag/TheLoweFiles?src=hash">#TheLoweFiles</a> WED 8/2 on <a href="https://twitter.com/AETV">@AETV</a> <a href="https://t.co/gt8cw48IrV">https://t.co/gt8cw48IrV</a></p>&mdash; Critical Content (@critcalcontent) <a href="https://twitter.com/critcalcontent/status/892096557914349568">July 31, 2017</a></blockquote><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>', 'settings' => ['href'=>'https://twitter.com/critcalcontent']]);
							?>	
					</div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 portal-last aboshadow">
                        <div class="col-md-12 col-sm-12 col-xs-12 faceNewS">
                            <img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/instagram-new.png'; ?>" alt="instagram icon" class="img-responsive">
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12  faceNewSadd">
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
				</div>
			</div>
		</div>
    </div>
<style>
.fb-post.fb_iframe_widget > span > iframe {
  width: 160% !important;
}
</style>