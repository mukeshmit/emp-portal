<?php

/* @var $this \yii\web\View */
/* @var $content string */
/* $this->context->action->controller->id = controller name */
/* $this->context->action->controller->id = controller name */

use yii\helpers\Html;
// use yii\bootstrap\Nav;
// use yii\bootstrap\NavBar;
// use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;
use kartik\social\FacebookPlugin;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    	<meta charset="utf-8">
    	<meta content="width=1370, initial-scale=1, maximum-scale=1, user-scalable=yes" name="viewport">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>	
<?php 
	// check action and controller and action and then loviewport
	
	$headerView = "header.php";
	$leftView = "";
	$rightView = "";
	$controller = $this->context->action->controller->id;
	$controlleract = $this->context->action->id;
	switch($controller){
		case 'calendar' : 
				$leftView  = "leftcalender.php";
				$rightView = "";
				; break;
		case 'site' : 
				if($controlleract=='login'){ 
					$headerView  = "";
					$leftView  = "";
					$rightView = ""; 
				}else{
					$leftView  = "left.php";
					$rightView = ""; 
				} ; 
				
				break;
		default: 
				$leftView  = "left.php";
				$rightView = "";
	}
?>


	<?php if(!empty($headerView)){ echo $this->render('header.php'); }  ?>
	<?php 
		// echo "<pre>";
		// print_r($this->context->action->id);
		// die;
	?>
	<div class="container-fluid paddXsZ paddSmZ">
        <div class="container paddXsZ conposition">  
			
			<?php if(!empty($leftView)){ echo $this->render($leftView); }  ?>
			<?= $content ?>		
        </div>
    </div>	
	<?= $this->render('footer.php') ?>
<?php $this->endBody() ?>
<script>
$(document).ready(function(){
	
	$('#LoginForm').on('ajaxBeforeSend', function (event, jqXHR, settings) {
		// Activate waiting label
		// alert('sending');
	}).on('ajaxComplete', function (event, jqXHR, textStatus) {
		// Deactivate waiting label
		
	});
	
	
	/* $('#Newsflash').on('ajaxBeforeSend', function (event, jqXHR, settings) {
		// Activate waiting label
		
	}).on('ajaxComplete', function (event, jqXHR, textStatus) {
		// Deactivate waiting label
	}); */
	
	$(document).on('click','.newsfeed',function(){
		window.location = "<?php echo \Yii::$app->request->BaseUrl .'/news-flash'; ?>";
	})
});
</script>
<script>
         //<![CDATA[
        $(document).ready(function() {
            $('#wrapper .version strong').text('v' + $.fn.pignoseCalendar.ComponentVersion);

            function onSelectHandler(date, context) {
                /**
                 * @date is an array which be included dates(clicked date at first index)
                 * @context is an object which stored calendar interal data.
                 * @context.calendar is a root element reference.
                 * @context.calendar is a calendar element reference.
                 * @context.storage.activeDates is all toggled data, If you use toggle type calendar.
                 * @context.storage.events is all events associated to this date
                 */

                var $element = context.element;
                var $calendar = context.calendar;
                var $box = $element.siblings('.box').show();
                var text = 'You choose date ';

                if (date[0] !== null) {
                    text += date[0].format('YYYY-MM-DD');
                }

                if (date[0] !== null && date[1] !== null) {
                    text += ' ~ ';
                } else if (date[0] === null && date[1] == null) {
                    text += 'nothing';
                }

                if (date[1] !== null) {
                    text += date[1].format('YYYY-MM-DD');
                }

                $box.text(text);
            }

            function onApplyHandler(date, context) {
                /**
                 * @date is an array which be included dates(clicked date at first index)
                 * @context is an object which stored calendar interal data.
                 * @context.calendar is a root element reference.
                 * @context.calendar is a calendar element reference.
                 * @context.storage.activeDates is all toggled data, If you use toggle type calendar.
                 * @context.storage.events is all events associated to this date
                 */

                var $element = context.element;
                var $calendar = context.calendar;
                var $box = $element.siblings('.box').show();
                var text = 'You applied date ';

                if (date[0] !== null) {
                    text += date[0].format('YYYY-MM-DD');
                }

                if (date[0] !== null && date[1] !== null) {
                    text += ' ~ ';
                } else if (date[0] === null && date[1] == null) {
                    text += 'nothing';
                }

                if (date[1] !== null) {
                    text += date[1].format('YYYY-MM-DD');
                }

                $box.text(text);
            }

            // Default Calendar
            $('.calendar').pignoseCalendar({
                select: onSelectHandler
            });

            // Input Calendar
            $('.input-calendar').pignoseCalendar({
                select: onSelectHandler,
                apply: onApplyHandler,
                buttons: true, // It means you can give bottom button controller to the modal which be opened when you click.
            });

            // Calendar modal
            var $btn = $('.btn-calendar').pignoseCalendar({
                select: onSelectHandler,
                apply: onApplyHandler,
                modal: true, // It means modal will be showed when you click the target button.
                buttons: true
            });

            // Color theme type Calendar
            $('.calendar-dark').pignoseCalendar({
                theme: 'dark', // light, dark, blue
                select: onSelectHandler
            });

            // Blue theme type Calendar
            $('.calendar-blue').pignoseCalendar({
                theme: 'blue', // light, dark, blue
                select: onSelectHandler
            });

            // Schedule Calendar
            $('.calendar-schedules').pignoseCalendar({
                scheduleOptions: {
                    colors: {
                        holiday: '#2fabb7',
                        seminar: '#5c6270',
                        meetup: '#ef8080'
                    }
                },
                schedules: [{
                    name: 'holiday',
                    date: '2017-02-08'
                }, {
                    name: 'holiday',
                    date: '2017-02-16'
                }, {
                    name: 'holiday',
                    date: '2017-03-01',
                }, {
                    name: 'holiday',
                    date: '2017-03-05'
                }, {
                    name: 'holiday',
                    date: '2017-03-18',
                }, {
                    name: 'seminar',
                    date: '2017-02-14'
                }, {
                    name: 'seminar',
                    date: '2017-03-01',
                }, {
                    name: 'meetup',
                    date: '2017-02-16'
                }, {
                    name: 'meetup',
                    date: '2017-03-01',
                }, {
                    name: 'meetup',
                    date: '2017-03-18'
                }, {
                    name: 'meetup',
                    date: '2017-04-04',
                }, {
                    name: 'meetup',
                    date: '2017-05-01'
                }, {
                    name: 'meetup',
                    date: '2017-06-19',
                }],
                select: function(date, context) {
                    
                }
            });

        });
        //]]>
</script>

<script>

$(document).ready(function(){
	setInterval(function(){
		$('.loaders').addClass('loaded');
	}, 2000);

 });
 </script>
 <script>
$(document).ready(function() {
$('#myCarousel').carousel({
	interval: 12000,
	wrap: true,
	pause: false
});
});
 </script>


<script>

$(document).ready(function(){
	setInterval(function(){
    $('.itmeeee').addClass('itmeeeeAc');
},15000);

 });
 </script>


<script>

$(document).ready(function(){
	setInterval(function(){
    $('.itmeeee.itmeeeeAc.active').removeClass('itmeeeeAc');
},800);

 });
 </script>

 

 
</body>
</html>
<?php $this->endPage() ?>