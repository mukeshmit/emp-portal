<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this \yii\web\View */
/* @var $content string */
// $baseUrlimg = Yii::app()->request->baseUrl;

?>
<style>
.logoutbutton{
	background: transparent;
	border: 0 none;
	border-bottom: 2px solid transparent;
    margin: 6px;
    transition: all 0.4s ease 0s;
}
nav{
	background:#99A5A8 !important;
}
.logoDiv {
  margin-top: !important;
}
</style>
<div class="container-fluid ">
	<div class="container paddXsZ paddSmZ">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="col-md-3 col-sm-3 col-xs-9 hiddSm paddingZ logoDivath hidden-xs">
			<a href="/">
				<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/logo1.png'; ?>" alt="logo image" class="img-responsive">
			</a>
		</div>
		<div class="sideonMoTab">
			<div class="sideonMoTabOne">
				<h2 class="portal-section">TUNE IN: Tie Season Finale SUNDAY!</h2>
				<p class="portal-sectionpara">Gather 'round and raise a toast to the final episode of the season! The season three finale 
							of Tia mowry at Home airs this Sunday, February 26th at 5:30pm PT I 8:30pm ET on Cooking Channel.
						</p>
			</div>
			<div class="sideonMoTabTwo">
				<img src="<?php echo Yii::getAlias('@web').'//themes/portal-front/images/facebookgroup.png'; ?>" class="img-responsive">				
			</div>
			<div class="sideonMoTabThree">	
				<h2 class="curHeading nwesFlas">News Flash</h2>	
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-12 paddingZ logoDiv showSm aboshadow visible-xs">
			<a href="index.html">
				<div class="logoFirst">
					<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/logo1.png'; ?>" alt="logo image" class="img-responsive">
					<p>Welcome to Company Portal</p>
				</div>
				<div class="logoSecond">
					<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/nouser.jpg'; ?>" alt="logo man pic" class="img-responsive">
				</div>
			</a>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12 paddXsZ tablr paddingZ">
			<nav class="navbar navbar-default navBarNew">
				<div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right <?php if (\Yii::$app->user->isGuest) { echo "hidden"; } ?>">
						<li>
							<?= Html::a(
                                    'Dashboard',
                                    ['/'],
                                    ['class' => $this->context->action->controller->id=='site'?'active':'']
                                ) ?>
						<!-- <a href="index.html" class="active"></a> --></li>
						<li class="hidden-xs">
							<?= Html::a(
                                    'IT',
                                    ['/'],
                                    ['class' => '']
                                ) ?>
						</li>
						<li>
							<?= Html::a(
                                    'Resource',
                                    ['/'],
                                    ['class' => '']
                                ) ?>
						</li>
						<li>
							<?= Html::a(
                                    'Directory',
                                    ['/directory/'],
                                    ['class' => $this->context->action->controller->id=='directory'?'active':'']
                                ) ?>
						</li>
						<li class="hidden-xs">
							<?= Html::a(
                                    'Calendar',
                                    ['/calendar/'],
                                    ['class' => $this->context->action->controller->id=='calendar'?'active':'']
                                ) ?>
						</li>
						<li>
							<?= Html::a(
                                    'Gallery',
                                    ['/'],
                                    ['class' => '']
                                ) ?>
						</li>                            
						<li>
							<?= Html::a(
                                    'Contest/Games',
                                    ['/'],
                                    ['class' => '']
                                ) ?>
						</li>
						
							<?php 								
								echo Yii::$app->user->isGuest ? (
										''
									) : ('<li class="hidden-xs">'.Html::beginForm(['/site/logout'], 'post', ['class' => ''])
										. Html::submitButton(
											'Logout (' . Yii::$app->user->identity->username . ')',
											['class' => 'logoutbutton']
										)
										. Html::endForm()
									.'</li>')
								
							?>
						
					</ul>
				</div>
			</nav>
		</div>
	</div>
</div>
