<div class="col-md-3 col-sm-3 col-xs-12 abosDiv hidden-xs widd22">
                <div class="col-md-12 col-sm-12 col-xs-12 bsdivll logoDiv aboshadow hiddSm">
                    <div class="logoSecond" style="float:left;">
                        <img src="<?php echo Yii::$app->user->isGuest ? Yii::getAlias('@web').'/themes/portal-front/images/lorianna-face.png' : Yii::getAlias('@web').'/uploads/demo-man.png'; ?>" />
                    </div>
                    <div class="logoanthrtext">
                        <h1>
						<?php echo Yii::$app->user->isGuest ? 'Lorianna Shedlock' : ucfirst(Yii::$app->user->identity->username); ?> 
						</h1>
                        <p><?php echo Yii::$app->user->isGuest ? 'Vice President, Head of HR & Cultural' : ''; ?></p>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDiv">
                    <div id="wrapper">
                        <div class="header">
                            <div class="calendar"></div>
                        </div>
                    </div>
                    <div class="btmTest">
                        <div class="maiDate">
                            <p>Friday</p>
                            <h2>07</h2>
                            <span>July</span>
                        </div>
                        <div class="DayDesc">
                            <div class="DayDesc12">
                                <div class="dayTime">
                                    10:00 AM
                                </div>
                                <div class="daywork">
                                    <span>Bagels </span>
                                    <span>In main kitchen</span>
                                </div>
                            </div>
                            <div class="DayDesc12">
                                <div class="dayTime">
                                    07:00 AM
                                </div>
                                <div class="daywork">
                                    <span>Happy Hour </span>
                                    <span>At Local Peasant <i class="fa fa-map-marker"></i></span>
                                </div>
                            </div>
                            <a style="cursor:pointer"><img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/arrow-box.jpg'; ?>" id="toggleProfile" class="img-responsive imageArrw" alt="Arrow Icon"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 paddingZ">
                    <div class="col-md-12 col-sm-12 col-xs-12 paddingZ">
                        <img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/people-collect.png'; ?>" class="img-responsive commentbox">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivExt">
                        <div class="col-md-12 col-sm-12 col-xs-12 divinpees">
                            <form>
                                <input type="text" placeholder="" class="inpper1">
                                <input type="submit" value="search" class="inppersbmt">
                            </form>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 paddingZ eklavl">
                            <div class="col-md-4 col-sm-2 col-xs-4 paddingZ sideprofileIm">
                                <i class="fa fa-user userList"></i>
                            </div>
                            <div class="col-md-7 col-sm-5 col-xs-4 nameOfListMmb sideprofileIc">
                                <h3>George De La Cruz</h3>
                                <p>VP, Controller  Finance</p>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 paddingZ eklavl">
                            <div class="col-md-4 col-sm-2 col-xs-4 paddingZ sideprofileIm">
                                <i class="fa fa-user userList"></i>
                            </div>
                            <div class="col-md-7 col-sm-5 col-xs-4 nameOfListMmb sideprofileIc">
                                <h3>Tyy Sams</h3>
                                <p>Executive Assistant, Tom Forman (Executive Office)</p>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 paddingZ eklavl">
                            <div class="col-md-4 col-sm-2 col-xs-4 paddingZ sideprofileIm">
                                <i class="fa fa-user userList"></i>
                            </div>
                            <div class="col-md-7 col-sm-5 col-xs-4 nameOfListMmb sideprofileIc">
                                <h3>Omer Daouk</h3>
                                <p>Executive Assistant, The Jay & Tony Show (POD)</p>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 paddingZ eklavl">
                            <div class="col-md-4 col-sm-2 col-xs-4 paddingZ sideprofileIm">
                                <i class="fa fa-user userList"></i>
                            </div>
                            <div class="col-md-7 col-sm-5 col-xs-4 nameOfListMmb sideprofileIc">
                                <h3>Karry-Kay Wynter</h3>
                                <p>Executive Assistant, Rebacca Rosichan (Casting)</p>
                            </div>
                            <!-- <div class="col-md-4 col-sm-5 col-xs-4 paddingZ">
                                <ul class="IcnListFrm">
                                    <li><a href="#"><i class="fa fa-envelope-o redT"></i></a></li>
                                    <li><a href="#"><i class="fa fa-whatsapp  greenT"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype  blueT"></i></a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 paddingZ">
                    <div class="col-md-12 col-sm-12 col-xs-12 aboshadow caleDivExtLvl">
                        <div class="col-md-12 col-sm-12 col-xs-12 paddingZ">
                            <img src="<?php echo Yii::getAlias('@web').'/themes/portal-front/images/comment-logo.jpg'; ?>" class="img-responsive coomntlogo" alt="">
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 paddingZ">
                            <form class="InForm">
                                <label>Type:</label>
                                <select>
                                    <option>Type1</option>
                                    <option>Type2</option>
                                    <option>Type3</option>
								</select>
								<label>Comment:</label>
								<textarea></textarea>
								<input type="submit" value="Send">
                            </form>
                        </div>
                    </div>
                </div>
            </div>