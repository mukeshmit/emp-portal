<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\backend\models\Newsflash */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Newsflash',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Newsflashes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="col-md-12">
          <!-- Input addon -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            </div>
            <div class="box-body">
				<?= $this->render('_form', [
					'model' => $model,
				]) ?>
			
			
              <!-- /input-group -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

</div>
