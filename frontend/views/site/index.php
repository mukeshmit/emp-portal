﻿<?php
use yii\widgets\ActiveForm;
use kartik\social\FacebookPlugin;
use kartik\social\TwitterPlugin;
use nirvana\instafeed\Instafeed;
use frontend\models\Newsflash;
// use kmarenov\instagram\InstagramWidget;
/* @var $this yii\web\View */

$this->title = 'Employee Portal - Home';

$Newsflash = Newsflash::find()->orderBy('created_at')->limit(2)->all();



// echo "<pre>";
// print_r($Newsflash);
// die;
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
		<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel"  data-interval="10000">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="itmeeee  active"></li>
				<li data-target="#myCarousel" data-slide-to="1" class="itmeeee1"></li>
				<li data-target="#myCarousel" data-slide-to="2" class="itmeeee1"></li>
				<li data-target="#myCarousel" data-slide-to="3" class="itmeeee1"></li>
				<li data-target="#myCarousel" data-slide-to="4" class="itmeeee1"></li>
		<!--	<li data-target="#myCarousel" data-slide-to="5" style="opacity:0;"></li>
				<li class="sliderLink" ></li> --> 
			</ol>
<script>
	setTimeout(
    function() {
      var a=document.getElementById('abcde').src;
      document.getElementById('abcd').src=a;
    }, 10000);
</script>
			<!-- Wrapper for slides --> 
			<div class="carousel-inner">
				<div class="item itmeeee active"   data-interval="11000" >
					<img class="loaders" id="abcd" src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/start.gif'; ?>" alt="portal slide image" style="width:100%;">
					<div class="slideDivSechead">
						<div class="slideDivSec marB25">
							<div class="slideImgDiv ">
								<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/slide1-img1.png'; ?>" alt="portal slide image"  >
							</div>
							<div class="slideConDiv">
								<h4> The Lowe Files | 10pm | A&E </h4>
								<p>Rob and the boys travel to Phoenix, Arizona to find the truth about crop circles, abductions, and flying saucers. </p>
							</div>
						</div>
						<div class="slideDivSec marB25">
							<div class="slideImgDiv ">
								<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/slide1-img2.png'; ?>" alt="portal slide image"  >
							</div>
							<div class="slideConDiv">
								<h4> Catfish | 10/9 | MTV </h4>
								<p>Who is Jasmine’s mysterious friend and how do Nev and Max know him? </p>
							</div>
						</div>
						<div class="slideDivSec marB25">
							<div class="slideImgDiv ">
								<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/slide1-img3.png'; ?>" alt="portal slide image"  >
							</div>
							<div class="slideConDiv">
								<h4> The Great Food Truck Race | 9/8c | Food Newwork </h4>
								<p> One team is eliminated and six make it closer to the finish line and the grand prize of $50,000. </p>
							</div>
						</div>
						<div class="slideDivSec ">
							<div class="slideImgDiv ">
								<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/slide1-img4.png'; ?>" alt="portal slide image"  >
							</div>
							<div class="slideConDiv">
								<h4> Carbbiean Pirate Treasure | 10/8c | Travel Channel </h4>
								<p> Philippe and Ashlan Cousteau head to St. Thomas to learn more about Jean Hamlin</p>
							</div>
						</div>
					</div>
				</div>

				<div class="item"  data-interval="11000">
					<img class="loaders" id="abcde" src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/transition.gif'; ?>" alt="portal slide image" style="width:100%;">
					
					<div class="slideDivSechead ">
						<div class="slideDivSec ">
							<div class="slideImgDiv slideImgDiv1 ">
								<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/slide2-img.png'; ?>" alt="portal slide image"  >
							</div>
							<div class="slideConDiv slideConDiv1">
								<h4> The Lowe Files</h4>
								<h3> 10pm | A&E </h3>
								<p> Rob and the boys travel to Phoenix, Arizona, a noted UFO hot spot, to find the truth about crop circles, abductions, and flying 
								saucers. Before venturing off the grid, they meet with notable alien abductee Travis Walton and local fulgurite specialist Dr. B.
								Later, they're off to set up camp in the Superstition Mountains where family friend Shaman John claims he can help them open an
								interdimensional portal to find humanity's cosmic neighbors.</p>
								<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/slide2_logo.png'; ?>" alt="portal slide image" >
							</div>
						</div>
					</div>
				</div>

				<div class="item"  data-interval="11000">
					<img class="loaders" src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/transition.gif'; ?>" alt="portal slide image" style="width:100%;">
				
					<div class="slideDivSechead ">
						<div class="slideDivSec ">
							<div class="slideImgDiv slideImgDiv1 ">
								<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/slide3-img.png'; ?>" alt="portal slide image"  >
							</div>
							<div class="slideConDiv slideConDiv1">
								<h4> Catfish</h4>
								<h3> 10/9 | MTV </h3>
								<p>  "Jasmine writes to Nev and Max asking for help for a “friend.” But they’re perplexed when Jasmine drops a bombshell
								revelation: they’ve helped her friend before! Who is Jasmine’s mysterious friend and how do Nev and Max know him?"  </p>
								<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/slide3_logo.png'; ?>" alt="portal slide image" >
							</div>
						</div>
					</div>
				</div>	
				<div class="item"  data-interval="11000">
				<img class="loaders" src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/transition.gif'; ?>" alt="portal slide image" style="width:100%;">
					
					
				
					<div class="slideDivSechead ">
						<div class="slideDivSec ">
							<div class="slideImgDiv slideImgDiv1 ">
								<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/slide4-img.png'; ?>" alt="portal slide image"  >
							</div>
							<div class="slideConDiv slideConDiv1">
								<h4> The Great Food Truck Race </h4>
								<h3> 9/8c | Food Newwork</h3>
								<p> Seven teams with dreams of running their own food trucks arrive in the streets of the French Quarter in New Orleans where
								they meet host Tyler Florence. For their first challenge, the teams must create their own version of a beignet and sell it in 
								the French Market in a challenge called "Dough for Dough." Whatever money they earn, they get to add to their seed money. Next, 
								the teams shop and hit the streets to sell, and find out that running a food truck is harder than they thought! In the second
								challenge, the teams must impress ...</p>
								<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/slide4_logo.png'; ?>" alt="portal slide image" >
							</div>
						</div>
					</div>
				</div>	
				<div class="item" data-interval="11000" >
					<img class="loaders" src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/transition.gif'; ?>" alt="portal slide image" style="width:100%;">
					
					<div class="slideDivSechead ">
						<div class="slideDivSec ">
							<div class="slideImgDiv slideImgDiv1 ">
								<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/slide5-img.png'; ?>" alt="portal slide image"  >
							</div>
							<div class="slideConDiv slideConDiv1">
								<h4> Carbbiean Pirate Treasure </h4>
								<h3> 10/8c | Travel Channel </h3>
								<p> Philippe and Ashlan Cousteau head to St. Thomas to learn more about Jean Hamlin, a sadistic pirate who may have left a vast
								fortune on the sea floor. Their investigation uncovers a secret society of divers who lead them to a shocking discovery. </p>
								<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/slide5_logo.png'; ?>" alt="portal slide image" class="imagesLogoS">
							</div>
						</div>
					</div>
				</div>	

				<!-- <div class="item1"  data-interval="1000">			
					<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/start.gif'; ?>" alt="portal slide image" style="width:100%;">
					
				</div>
 -->

			</div>

		</div>

	</div>
	<div class="testimo_anthr">
		<h3>John holiaday</h3>
		<p>Strive ot be a succuss, but rather to be value <span>-- Aristotle --</span></p>

	</div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12 aboshadow marSpecl ">
	<h2 class="curHeading">Critical Wall</h2>
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
	<div class="col-md-12 col-sm-12 col-xs-12 paddingZ">

		<div class="col-md-12 col-sm-12 col-xs-12 paddingZ">
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

<div class="col-md-12 col-sm-12 col-xs-12 border-blue color-blue font"  data-toggle="modal" data-target="#myModal_pdc">
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

	<div class="col-md-12 col-sm-12 col-xs-12 paddingZ tabtypxs tabtypxs12">
		<div class="col-md-12 col-sm-12 col-xs-12 paddingZ">
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
	<div class="col-md-12 col-sm-12 col-xs-12 paddingZ tabtypxs" style="padding-top:30px;">
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
	<div class="col-md-12 col-sm-12 col-xs-12 paddingZ tabtypxs" style="padding-top:30px;">
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
					
						<!-- <div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivExtLvlSide caledivextra portalshow">
						<?php if(!empty($Newsflash)){ foreach ($Newsflash as $Newsflashes): ?>
							
								<div class="col-md-3 col-sm-3 col-xs-12 paddingZ">
									<img src="<?php echo Yii::getAlias('@web').'/uploads/'.$Newsflashes->image; ?>" width="65" height="56" >
								</div>
								<div class="col-md-9 col-sm-9 col-xs-10 paddingZ m-t-12">
									<h2 class="portal-section"><?php echo ucwords($Newsflashes->title).' - '.date('m/d/y H:i A',$Newsflashes->created_at) ?> </h2>
									<p class="portal-sectionpara"><?php echo substr(ucwords($Newsflashes->body),0,140); ?></p>
								</div>
							
						<?php endforeach; } ?>
						</div> -->
						<div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivExtLvlSide caledivextra portalshow">
						
						<div class="col-md-3 col-sm-3 col-xs-12 paddingZ">
							<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal-group1.png'; ?>" alt="grounp1-img">
						</div>
						<div class="col-md-9 col-sm-9 col-xs-10 paddingZ">
							<h2 class="portal-section">TUNE IN: Tie Season Finale SUNDAY!</h2>
							<p class="portal-sectionpara">Gather 'round and raise a toast to the final episode of the season! The season three finale 
								of Tia mowry at Home airs this Sunday, February 26th at 5:30pm PT I 8:30pm ET on Cooking Channel.
							</p>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 paddingZ m-t-12">
							<div class="col-md-3 col-sm-3 col-xs-12 paddingZ">
								<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal-group2.png'; ?>" alt="poral-grounp2">
							</div>
							<div class="col-md-9 col-sm-9 col-xs-10 paddingZ">
								<h2 class="portal-section">TUNE IN: Besties Brunch with Tia SUNDAY!</h2>
									<p class="portal-sectionpara">Be sure to catch the next episode of Tie Mowry at Home on Cooking Channel this Sunday.
											February 19th at 5:30pm PT I 8:30pm ET. Don’t  forget to tune in and set your DVRs! 
									</p>
							</div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 paddingZ m-t-12">
							<div class="col-md-3 col-sm-3 col-xs-12 paddingZ">
									<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/portal-group3.png'; ?>" alt="grounp3">
							</div>
							<div class="col-md-9 col-sm-9 col-xs-10 paddingZ">
								<h2 class="portal-section">TUNE IN: Tie Season Finale SUNDAY!</h2>
								<p class="portal-sectionpara">Gather 'round and raise a toast to the final episode of the season! The season three finale 
									of Tia mowry at Home airs this Sunday, February 26th at 5:30pm PT I 8:30pm ET on Cooking Channel.
								</p>
							</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12 paddingZ postorre">
							<a style="cursor:pointer"><img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/arrow-box.jpg'; ?>" id="" class="img-responsive imageArrw1" alt="Arrow Icon"></a> <!-- imageArrw1 toggleProfile1-->
						</div>

					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 newsfeed">
					<img  src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/facebookimg.png'; ?>" class="newsfedd1" alt="facebook">
					<!-- <div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivExtLvlSide1 caledivextra facestybook">
						<?php 
							echo FacebookPlugin::widget(['appId' => '1393509477405036','type'=>FacebookPlugin::POST, 'settings' => ['href'=>'https://www.facebook.com/CriticalContent/posts/1505631216126684']]); ?>
					</div> -->
					<div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivExtLvlSide1 caledivextra">
						<div class="col-md-12 col-sm-12 col-xs-12 paddingZ pad0Top">
							<div class="col-md-3 col-sm-3 col-xs-12 paddingZ">
								<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/tv-show.png'; ?>" alt="tv-show" class="img-responsive">
							</div>
							<div class="col-md-9 col-sm-9 col-xs-12 pad0Righ">
								<h2 class="tv-show">Catfish: The TV Show's photo.</h2>
								<p class="show-para">It's the day we've all been waiting for! Tag a friend in the comments to let them know Catfish: The TV Show is back tonight!</p>
								<div class="col-md-3 col-sm-3 col-xs-12 paddingZ">
									<p class="like"><i class="fa fa-thumbs-up facebook-icon" aria-hidden="true"></i>like</p>
								</div>
								<div class="col-md-5 col-sm-5 col-xs-12 paddingZ">
									<p class="like"><img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/comment.png'; ?>" class="facebook-icon" alt="comment1">comment</p>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12 paddingZ">
									<p class="like"><i class="fa fa-share facebook-icon" aria-hidden="true"></i>share</p>
								</div>
							</div>
						

						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 paddingZ pad0Top">

							<div class="col-md-3 col-sm-3 col-xs-12 paddingZ">	
							<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/facebookgroup.png'; ?>" alt="tv-show1" class="img-responsive">
							
							</div>
							<div class="col-md-9 col-sm-9 col-xs-12 pad0Righ">
								<h2 class="tv-show">Tia Mowry At Home</h2>
								<p class="show-para">It's the season 3 FINALE of #TiaMowryAtHome TODAY 2/26 at 5:30pPT|8:30pET with Tia Mowry on Cooking Channel</p>
								<div class="col-md-3 col-sm-3 col-xs-12 paddingZ">
									<p class="like"><i class="fa fa-thumbs-up facebook-icon" aria-hidden="true"></i>like</p>
								</div>
								<div class="col-md-5 col-sm-5 col-xs-12 paddingZ">
									<p class="like"><img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/comment.png'; ?>" class="facebook-icon" alt="comment1">comment</p>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12 paddingZ">
									<p class="like"><i class="fa fa-share facebook-icon" aria-hidden="true"></i>share</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 newsfeed">
					<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/twiiter1.png'; ?>" class="newsfedd2" alt="twitter">
					<!-- <div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivExtLvlSide2 caledivextra facestybook1">
						<?php 
							echo TwitterPlugin::widget(['type'=>TwitterPlugin::TWEET, 'content' => '<blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr"><a href="https://twitter.com/hashtag/TheLoweFiles?src=hash">#TheLoweFiles</a> WED 8/2 on <a href="https://twitter.com/AETV">@AETV</a> <a href="https://t.co/gt8cw48IrV">https://t.co/gt8cw48IrV</a></p>&mdash; Critical Content (@critcalcontent) <a href="https://twitter.com/critcalcontent/status/892096557914349568">July 31, 2017</a></blockquote><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>', 'settings' => ['href'=>'https://twitter.com/critcalcontent']]);
						?>							
                    </div> -->
					<div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivExtLvlSide2 caledivextra">

							
						<div class="col-md-12 col-sm-12 col-xs-12 paddingZ twitter">
							<div class="col-md-2 col-sm-2 col-xs-12 paddingZ">
							<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/demoman.png'; ?>" class="img-responsive" alt="default">
							</div>
							<div class="col-md-10 col-sm-10 col-xs-12 paddingZ">
							<p class="content"><img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/share.png'; ?>" alt="share" class="img-responsive">critical content relweeted</p>
							<p><span class="catfish1">catfish</span> <img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/fbmessanger.png'; ?>" alt="fbmessager"><span class="catfish2">catfish Mtv .mar1</span></p>
                                <p class="seasonrelated">THREE HOUR UNTIL THE NEW SEASON OF I</p>

                            </div>

                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 paddingZ m-l-45">
                            <ul class="list-inline twitterimage">
                                <li>
                                    <p class="like"><i class="fa fa-share facebook-icon likeisd" aria-hidden="true"></i></p>
                                </li>
                                <li>
                                    <p class="like"><i class="fa fa-retweet" aria-hidden="true"></i>22</p>
                                </li>
                                <li>
                                    <p class="like"><i class="fa fa-star" aria-hidden="true"></i>7</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 paddingZ twitter1">
                            <div class="col-md-2 col-sm-2 col-xs-12 paddingZ">
								<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/demoman.png'; ?>" class="img-responsive" alt="default">
							  </div>
                            <div class="col-md-10 col-sm-10 col-xs-12 paddingZ">
                                <p class="content"><img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/share.png'; ?>" alt="share" class="img-responsive">critical content relweeted</p>
                                <p><span class="catfish1">catfish</span> <img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/fbmessanger.png'; ?>" alt="fbmessager"><span class="catfish2">catfish Mtv .mar1</span></p>
                                <p class="seasonrelated">Did Someone Say........Two hour Until #catfish ?!</p>

                            </div>

                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 paddingZ m-l-45">
                            <ul class="list-inline twitterimage">
                                <li>
                                    <p class="like"><i class="fa fa-share facebook-icon likeisd" aria-hidden="true"></i></p>
                                </li>
                                <li>
                                    <p class="like"><i class="fa fa-retweet" aria-hidden="true"></i>22</p>
                                </li>
                                <li>
                                    <p class="like"><i class="fa fa-star" aria-hidden="true"></i>7</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 paddingZ twitter">
                            <div class="col-md-2 col-sm-2 col-xs-12 paddingZ">
								<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/demoman.png'; ?>" class="img-responsive" alt="default">
							 </div>
                            <div class="col-md-10 col-sm-10 col-xs-12 paddingZ">
                                <p class="content"><img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/share.png'; ?>" alt="share" class="img-responsive">critical content relweeted</p>
                                <p><span class="catfish1">catfish</span> <img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/fbmessanger.png'; ?>" alt="fbmessager"><span class="catfish2">catfish Mtv .mar1</span></p>
                                <p class="seasonrelated">THREE HOUR UNTIL THE NEW SEASON OF I</p>

                            </div>

                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 paddingZ m-l-45">
                            <ul class="list-inline twitterimage">
                                <li>
                                    <p class="like"><i class="fa fa-share facebook-icon likeisd" aria-hidden="true"></i></p>
                                </li>
                                <li>
                                    <p class="like"><i class="fa fa-retweet" aria-hidden="true"></i>22</p>
                                </li>
                                <li>
                                    <p class="like"><i class="fa fa-star" aria-hidden="true"></i>7</p>
                                </li>
                            </ul>
                        </div>
                    </div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 newsfeed">
					<img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/instagram1.png'; ?>" class="newsfedd3" alt="intragram">
						<!-- <div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivExtLvlSide3 caledivextra areasectionWide facestybook2">
                        
						</div> -->
						<div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivExtLvlSide3 caledivextra areasectionWide">
                        
                        <div class="col-md-12 col-sm-12 col-xs-12 paddingZ ">

                            <div class="col-md-12 col-sm-12 col-xs-12 paddingZ">
                                <ul class="list-inline linelitForim marBimg">
                                    <li><img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/intagram1.png'; ?>" class="img-responsive" alt="intragram1"></li>
                                    <li><img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/intagram2.png'; ?>"" class="img-responsive" alt="intragram2"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 paddingZ">
                            <div class="col-md-12 col-sm-12 col-xs-12 paddingZ">
                                <ul class="list-inline linelitForim">
                                    <li><img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/intagram3.png'; ?>"" class="img-responsive" alt="intragram3"></li>
                                    <li><img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/intagram4.png'; ?>"" class="img-responsive" alt="intragram4"></li>
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
