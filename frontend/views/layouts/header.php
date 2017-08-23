<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>
<div class="container-fluid ">
	<div class="container paddXsZ paddSmZ">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="col-md-3 col-sm-3 col-xs-9 hiddSm paddingZ logoDivath hidden-xs">
			<a href="index.html">
				<img src="<?php echo Yii::getAlias('@web').'themes/portal-front/images/logo1.png'; ?>" alt="logo image" class="img-responsive">
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
				<img src="<?php echo Yii::getAlias('@web').'themes/portal-front/images/facebookgroup.png'; ?>" class="img-responsive">				
			</div>
			<div class="sideonMoTabThree">	
				<h2 class="curHeading nwesFlas">News Flash</h2>	
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				<ul>
			</div>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-12 paddingZ logoDiv showSm aboshadow visible-xs">
			<a href="index.html">
				<div class="logoFirst">
					<img src="<?php echo Yii::getAlias('@web').'themes/portal-front/images/logo1.png'; ?>" alt="logo image" class="img-responsive">
					<p>Welcome to Company Portal</p>
				</div>
				<div class="logoSecond">
					<img src="<?php echo Yii::getAlias('@web').'themes/portal-front/images/logo-man-pic.png'; ?>" alt="logo man pic" class="img-responsive">
				</div>
			</a>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12 paddXsZ tablr paddingZ">
			<nav class="navbar navbar-default navBarNew">
				<div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
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
                                    ['/'],
                                    ['class' => '']
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
						<li class="hidden-xs">
							<a class="" id="toggleProfile" href="#">Admins</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</div>
