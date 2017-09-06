<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\backend\models\Newsflash */

$this->title = Yii::t('app', 'Create News Flash');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', ''), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-md-12">
	<div class="box box-info">
		<div class="box-body">
			<?= $this->render('_form', [
					'model' => $model,
				]) ?>
		</div>
	</div>
</div>

<!--
<div class="col-md-12">
        
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            </div>
            <div class="box-body">
				<?php 
					// = $this->render('_form', [
						// 'model' => $model,
					// ])
				?>
            </div>
          </div>
</div> -->

