<?php
use kartik\social\FacebookPlugin;
use kartik\social\TwitterPlugin;
use nirvana\instafeed\Instafeed;
// use kmarenov\instagram\InstagramWidget;
/* @var $this yii\web\View */

$this->title = 'Employee Portal - Home';



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
<div class="col-md-4 col-sm-7 col-xs-12 widd40">
<div class="col-md-12 col-sm-12 col-xs-12 centereDBoxIMSlid">

	<div class="slideValues">
		<div id="myCarousel" class="carousel slide" data-ride="carousel"  data-interval="3000">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li class="sliderLink" data-target="#myCarousel" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">

				<div class="item active">
					<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal_tv_slide_1.png'; ?>" alt="Chicago" style="width:100%;">
					
				</div>

				<div class="item">
					<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal_tv_slide_3.png'; ?>" alt="New York" style="width:100%;">
					
				</div>

				<div class="item">
					<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal_tv_slide_2.png'; ?>" alt="Chicago" style="width:100%;">
				
				</div>	
				<div class="item1">
					<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/tv_start.gif'; ?>" alt="Chicago" style="width:100%;">
				</div>


			</div>

		</div>

	</div>
	<div class="testimo_anthr">
		<h3>John holiaday</h3>
		<p>Strive ot be a succuss, but rather to be value <span>-- Aristotle --</span></p>

	</div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12 aboshadow marSpecl ">
	<h2 class="curHeading">Company Feed</h2>
	<div class="col-md-12 col-sm-12 col-xs-12 paddingZ  ">
		<textarea placeholder="What's happening?" class="happningTearea"> </textarea>
		<div class="sendWithCI">
			<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/emoji.png'; ?>" class="emoji">
			<i class="fa fa-camera"></i>
			<input type="submit" value="Send">
		</div>
	</div>
	<div class="col-md-12 col-sm-12 col-xs-12 paddingZ  martSom">
		<div class="CommmenImg">
			<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/user1.jpg'; ?>" class="img-responsive">
		</div>
		<div class="CommmenBOx">
			<h2><span >Demo</span> commented on their video</h2>
			<div class="divInner">
				<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/youtube.jpg'; ?>">
				<div class="divInner1">
					<h3>Funny Cats - A Funny Cat Videos Compilation 2015</h3>
					<p>Here are some funny cats. ihope these funny cats videos will make you lough or smile. So check out this funny cats compilation</p>
				</div>
			</div>
			<div class="iconDiv">
				<span><i class="iconCoome"></i> 2</span>
				<span><i class="fa fa-heart-o"></i> 0</span>
				<p class="sideThind">46 minuts ago</p>
			</div>
			<div class="cmntSecT">
				<div class="cmntSecTimg">
					<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/user3.jpg'; ?>" class="img-responsive" alt="sue images">
				</div>
				<div class="cmntSecTtext">
					<h5>	Brittany Williams</h5>
					<p> so cute cate !</p>
				</div>
				<div class="cmntSecTtime">
					<span>jun 21'16</span>
				</div>
			</div>
			<div class="cmntSecT">
				<div class="cmntSecTimg">
					<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/user1.jpg'; ?>" class="img-responsive" alt="sue images">
				</div>
				<div class="cmntSecTtext">
					<h5>	Demo</h5>
					<p><img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/emoji.png'; ?>" class="img-responsive" alt="emoji images"> wow</p>
				</div>
				<div class="cmntSecTtime">
					<span>46 minuts ago</span>
				</div>
			</div>
			<div class="cmntSecT">
				<div class="cmntSecTimg">
					<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/user1.jpg'; ?>" class="img-responsive" alt="sue images">
				</div>
				<div class="cmntSecTinp">
					<input type="text" placeholder="comment here....">
					<div class="sendWithCI smthspImg">
						<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/emoji.png'; ?>" class="emoji">
						<i class="fa fa-camera"></i>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="col-md-12 col-sm-12 col-xs-12 paddingZ  martSom">
		<div class="CommmenImg">
			<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/user2.jpg'; ?>" class="img-responsive">
		</div>
		<div class="CommmenBOx">
			<h2><span >Josh Marrison</span> and <span >Demo</span> are now friends</h2>
			<div class="iconDiv">
				<span><i class="iconCoome1"></i> 0</span>
				<span><i class="fa fa-heart-o"></i> 0</span>
				<p class="sideThind">one hours ago</p>
			</div>
		</div>
	</div>
	<div class="col-md-12 col-sm-12 col-xs-12 paddingZ  martSom">
		<div class="CommmenImg">
			<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/user3.jpg'; ?>" class="img-responsive">
		</div>
		<div class="CommmenBOx">
			<h2><span >Brittany Williams</span> and <span >Demo</span> are now friends</h2>
			<div class="iconDiv">
				<span><i class="iconCoome1"></i> 0</span>
				<span><i class="fa fa-heart-o"></i> 0</span>
				<p class="sideThind">one hours ago</p>
			</div>
		</div>
	</div>
</div>
</div>

<div class="col-md-2 col-sm-2 col-xs-12  colMddle2 widd15">
	<div class="col-md-12 col-sm-12 col-xs-12 paddXsZ">

		<div class="col-ms-12 col-sm-12 col-xs-12 paddSmZ">
			<div class="col-md-12 col-xs-12 col-sm-12 paddingZ">
				<div class="col-md-12 col-sm-12 col-xs-12 border-red color-red font">
					<h4>Empire</h4>
					<p>Food truc info</p>
					<span class="spanVludiv" style="color:#056598">July 6<span>th</span><span>
</div>	

<div class="col-md-12 col-sm-12 col-xs-12 border-red color-red font" >
	<h4>Empire</h4>
	<p>Big Announcement <br>at 1PM in Cafe</p>
	<span class="spanVludiv" style="color:#056598">July 6<span>th</span><span>
</div>	

<div class="col-md-12 col-sm-12 col-xs-12 border-blue color-blue font" >
	<h4>PDC </h4>
	<p>Photo Day</p>
	<span class="spanVludiv" style="color:#970301">July 6<span>th</span><span>
</div>	

<div class="col-md-12 col-sm-12 col-xs-12 border-green color-green font" >
	<h4>Go Green </h4>
	<p>Recycle Today</p>
	<span class="spanVludiv" style="color:rgb(2,154,3)">July 7<span>th</span><span>
</div>	
</div>
</div>

	<div class="col-ms-12 col-sm-12 col-xs-12 paddingZ tabtypxs tabtypxs12">
		<div class="col-md-12 col-sm-12 col-xs-12 paddingZ">
			<div class="col-md-12 col-sm-12 col-xs-12  paddingZ hidden-xs" style="display:block;">
				<div class="col-md-12 col-sm-12 col-xs-12 user paddingZ" style="display:block;margin: 25px 0px 10px;">
					<h6><b>My Feed</b></h6>
				</div>
			</div>
                        <div class="col-md-12 col-sm-12 col-xs-12 paddingZ pad015">
                            <div class="col-md-5 col-sm-5 col-xs-12 user paddingZ">
                                <h6><b>Users</b></h6>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 color-gray paddingZ hidden-xs">
                                <p>
									<ul class="nav nav-pills">
									  <li><a data-toggle="pill" href="#Online" class="siteonline">Online</a></li>
									  <li>|</li>
									  <li class="active"><a data-toggle="pill" href="#Latest" class="siteonline">Latest</a></li>
									</ul>
								</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 paddingZ tab-content  hidden-xs">
                        <div id="Online" class="col-md-12 col-sm-12 col-xs-12 paddingZ tab-pane fade in active ">
                            <div class="col-md-12 col-sm-12 col-xs-12 paddingZ">
                                <div class="col-md-3 img-margin">
                                    <img class="img-circle " width="30px;" src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal1.jpg'; ?>" alt="img-circle-1"></img>
                                </div>
                                <div class="col-md-3 img-margin">
                                    <img class="img-circle " width="30px;" src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal2.jpg'; ?>"  alt="img-circle-2"></img>
                                </div>
                                <div class="col-md-3 img-margin">
                                    <img class="img-circle " width="30px;" src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal3.jpg'; ?>"  alt="img-circle-3"></img>
                                </div>
                                <div class="col-md-3 img-margin">
                                    <img class="img-circle " width="30px;" src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal4.jpg'; ?>"  alt="img-circle-4"></img>
                                </div>

                                <div class="col-md-3 img-margin">
                                    <img class="img-circle " width="30px;" src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal5.jpg'; ?>"  alt="img-circle-5"></img>
                                </div>
                                <div class="col-md-3 img-margin">
                                    <img class="img-circle " width="30px;" src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal6.jpg'; ?>"  alt="img-circle-6"></img>
                                </div>
                                <div class="col-md-3 img-margin">
                                    <img class="img-circle " width="30px;" src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal7.jpg'; ?>"  alt="img-circle-7"></img>
                                </div>
                                <div class="col-md-3 img-margin">
                                    <img class="img-circle " width="30px;" src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal8.jpg'; ?>"  alt="img-circle-8"></img>
                                </div>
                                <div class="col-md-3 img-margin">
                                    <img class="img-circle " width="30px;" src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal9.jpg'; ?>"  alt="img-circle-9"></img>
                                </div>

                            </div>
                        </div>
                        <div id="Latest" class="col-md-12 col-sm-12 col-xs-12 paddingZ tab-pane fade ">
                            <div class="col-md-12 col-sm-12 col-xs-12 paddingZ">
                                <div class="col-md-3 img-margin">
                                    <img class="img-circle " width="30px;" src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal1.jpg'; ?>" alt="img-circle-1"></img>
                                </div>
                                <div class="col-md-3 img-margin">
                                    <img class="img-circle " width="30px;" src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal2.jpg'; ?>"  alt="img-circle-2"></img>
                                </div>
                                <div class="col-md-3 img-margin">
                                    <img class="img-circle " width="30px;" src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal3.jpg'; ?>"  alt="img-circle-3"></img>
                                </div>
                                <div class="col-md-3 img-margin">
                                    <img class="img-circle " width="30px;" src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal4.jpg'; ?>"  alt="img-circle-4"></img>
                                </div>

                                <div class="col-md-3 img-margin">
                                    <img class="img-circle " width="30px;" src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal5.jpg'; ?>"  alt="img-circle-5"></img>
                                </div>
                                <div class="col-md-3 img-margin">
                                    <img class="img-circle " width="30px;" src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal6.jpg'; ?>"  alt="img-circle-6"></img>
                                </div>
                                <div class="col-md-3 img-margin">
                                    <img class="img-circle " width="30px;" src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal7.jpg'; ?>"  alt="img-circle-7"></img>
                                </div>
                                <div class="col-md-3 img-margin">
                                    <img class="img-circle " width="30px;" src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal8.jpg'; ?>"  alt="img-circle-8"></img>
                                </div>
                                <div class="col-md-3 img-margin">
                                    <img class="img-circle " width="30px;" src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal9.jpg'; ?>"  alt="img-circle-9"></img>
                                </div>

                            </div>
                        </div>
                    </div>
                    </div>
	<div class="col-ms-12 col-sm-12 col-xs-12 paddingZ tabtypxs" style="padding-top:30px;">
		<div class="col-md-12 col-sm-12 col-xs-12 font paddingZ">
			<div class="col-md-5 col-sm-5 col-xs-12 user paddingZ">
				<h6><b>Building</b></h6>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 marginZ hidden-xs" style="margin-top: 10px; ">
				<p>PDC</p>
				<p>Empire</p>
			</div>
		</div>
	</div>
	<div class="col-ms-12 col-sm-12 col-xs-12 paddingZ tabtypxs" style="padding-top:30px;">
		<div class="col-md-12 col-sm-12 col-xs-12 paddingZ">
			<div class="col-md-6 col-sm-6 col-xs-12 user paddingZ">
				<h6><b>Department</b></h6>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 marginZ font  hidden-xs" style="margin-top: 10px;">
				<p>Human Resourses</p>
				<p>Legal</p>	
				<p>Production</p>	
				<p>Post</p>	
				<p>Accounting</p>	
				<p>IT</p>
				<p>Executive Office</p>
				<p></p>
				<p></p>
			</div>
		</div>
	</div>
</div>
</div><div class="col-md-1 col-sm-1 col-xs-1 widd6 newdare">
				<div class="col-md-12 col-sm-12 col-xs-12 newsfeed">
					<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/mewsflashimges.png'; ?>" class="newsfedd" alt="newsflashimg">
					
					<div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivExtLvlSide caledivextra portalshow">
						<div class="col-md-3 col-sm-3 col-xs-12 paddingZ">
							<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal-group1.png'; ?>" >
						</div>
						<div class="col-md-9 col-sm-9 col-xs-10 paddingZ">
							<h2 class="portal-section">TUNE IN: Tie Season Finale SUNDAY!</h2>
							<p class="portal-sectionpara">Gather 'round and raise a toast to the final episode of the season! The season three finale 
								of Tia mowry at Home airs this Sunday, February 26th at 5:30pm PT I 8:30pm ET on Cooking Channel.
							</p>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 paddingZ m-t-12">
							<div class="col-md-3 col-sm-3 col-xs-12 paddingZ">
								<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal-group2.png'; ?>" >
							</div>
							<div class="col-md-9 col-sm-9 col-xs-10 paddingZ">
								<h2 class="portal-section">TUNE IN: Besties Brunch with Tia SUNDAY!</h2>
									<p class="portal-sectionpara">Be sure to catch the next episode of Tie Mowry at Home on Cooking Channel this Sunday.
											February 19th at 5:30pm PT I 8:30pm ET. Don’t  forget to tune in and set your DVRs! 
									</p>
							</div>
						</div>

					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 newsfeed">
					<img  src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/facebookimg.png'; ?>" class="newsfedd1" alt="facebook">
					
					<div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivExtLvlSide1 caledivextra facestybook">
						<?php 
							echo FacebookPlugin::widget(['appId' => '1393509477405036','type'=>FacebookPlugin::POST, 'settings' => ['href'=>'https://www.facebook.com/CriticalContent/posts/1505631216126684']]); ?>
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
<div class="col-md-3 col-sm-3 col-xs-12 hidden-xs hiddSm widd23">	

	<div class="col-md-12 col-sm-12 col-xs-12 abosDiv ">	



	</div>
</div> 
