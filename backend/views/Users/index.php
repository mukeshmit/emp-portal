<?php
use kartik\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchUser */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">
	<?php echo GridView::widget([
		'dataProvider'=> $dataProvider,
		'filterModel' => $searchModel,
		//'columns' => $gridColumns,
		'columns' => [
			'username',
			'email',
			'status',
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
			'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Create User', ['create'], ['class' => 'btn btn-success']),
			'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
			'footer'=>false
		],
		'pjax'=>true,
		'pjaxSettings'=>[
			'neverTimeout'=>true,
			'options'=>[
                'id'=>'kv-unique-id-1',
            ]
		]
	]); ?>
</div>
