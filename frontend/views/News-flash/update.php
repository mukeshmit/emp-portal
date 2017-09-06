<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\social\FacebookPlugin;
use kartik\social\TwitterPlugin;
use nirvana\instafeed\Instafeed;
// use kartik\grid\GridView;

use yii\widgets\LinkPager;
use yii\data\Pagination;
use frontend\models\Newsflash;
use dosamigos\ckeditor\CKEditor;

// $model = new Newsflash();

$Newsflash = Newsflash::find()->orderBy(['created_at' => SORT_DESC])->limit(3)->all();
//use yii\widgets\Pjax;
/* use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax; */
/* @var $this yii\web\View */
/* @var $searchModel app\backend\models\SearchNewsFlash */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Portal Content : Admin News Flash');
$this->params['breadcrumbs'][] = $this->title;

// echo Instafeed::widget([
    // 'pluginOptions' => [
        // 'get' => 'user',
        // 'userId' => 'dcf70018fd4f47a7bffeeb3e135cb418',
        // 'accessToken' => '4457192918.1677ed0.520942912c6b491598e3e823cce18c81',
    // ],
// ]);

$model->type= '1';

/* @var $this yii\web\View */
/* @var $model app\backend\models\Newsflash */

// $this->title = Yii::t('app', 'Update {modelClass}: ', [
    // 'modelClass' => 'Newsflash',
// ]) . $model->title;
/* $this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Newsflashes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update'); */
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
<div class="col-md-12">
	<div class="box box-info">
		<div class="box-body">
			<?= $this->render('_form', [
					'model' => $model,
				]) ?>
		</div>
	</div>
</div>