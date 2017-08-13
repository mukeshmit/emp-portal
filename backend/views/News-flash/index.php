<?php
use kartik\grid\GridView;
use yii\helpers\Html;
//use yii\widgets\Pjax;
/* use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax; */
/* @var $this yii\web\View */
/* @var $searchModel app\backend\models\SearchNewsFlash */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Newsflashes');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="newsflash-index">

<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<?php //Pjax::begin(); ?>    

<?php echo GridView::widget([
		'dataProvider'=> $dataProvider,
		'filterModel' => $searchModel,
		
		//'columns' => $gridColumns,
		'columns' => [
		//['class' => 'yii\grid\SerialColumn'],
			'title',
            'body:ntext',
            'image',
            // 'type',
            // 'created_at',
            // 'updated_at',

            [
				'class' => '\kartik\grid\ActionColumn',
				'deleteOptions' => ['label' => '<i class="glyphicon glyphicon-remove"></i>']
			]
		],
		'responsive'=>true,
		'hover'=>true,
		'resizableColumns'=>true,
		'floatHeader'=>true,
		'floatHeaderOptions'=>['scrollingTop'=>'50'],
		'showPageSummary' => true,
		'toolbar' => [
			[
				'content'=>
					Html::a('<i class="glyphicon glyphicon-repeat"></i>', ['index'], [
						'class' => 'btn btn-default', 
						'title' => 'Reset Grid'
					]),
			],
			'{export}',
			'{toggleData}'
		],
		'toggleDataContainer' => ['class' => 'btn-group-sm'],
		'exportContainer' => ['class' => 'btn-group-sm'],
		'panel' => [
			'heading'=>'<h3 class="panel-title"><i class="fa fa-users"></i> '.Html::encode($this->title).'</h3>',
			'type'=>'primary',
			'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i>Create News Flash', ['create'], ['class' => 'btn btn-success']),
			'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
			'footer'=>false
		],
		'pjax'=>true
	]); ?>

<?php //Pjax::end(); ?></div>
