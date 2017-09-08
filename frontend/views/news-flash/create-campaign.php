<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\backend\models\Newsflash */

$this->title = Yii::t('app', 'Create Campaign');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', ''), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-md-12">
	<div class="box box-info">
		<div class="box-body">
			<?php $form = ActiveForm::begin(); ?>
				<div class="form-group">
				<?php // = $form->field($model, 'user_id')->textInput() ?>

				<?= $form->field($model, 'title')->textInput(['class'=>'form-control','maxlength' => true]) ?>
				</div>
				<br>
				<div class="form-group">
				<?= $form->field($model, 'body')->widget(CKEditor::className(), [
					'options' => ['rows' => 6],
					'preset' => 'full'
				]) ?>
				<?php //= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
				</div>
				<br>
				<div class="form-group">
					<?= $form->field($model, 'image')->fileInput(); ?>
					<?php 
						if(!empty($model->image)){
					?>
						<img src="<?php echo Yii::getAlias('@web').'/uploads/'.$model->image; ?>" class="responsive" height="250" width="250" />
					<?php
						}else{
					?>
						<img src="<?php echo Yii::getAlias('@web').'/uploads/no-image.jpg'; ?>" class="responsive" height="250" width="250" />
					<?php
						}
					?> 
				</div>
				<br>
				<div class="form-group">
				<?= $form->field($model, 'type')->radioList([1 => 'Private',2 => 'Public']); ?>
				</div>
				<br>
				<?php //= $form->field($model, 'created_at')->textInput() ?>

				<?php //= $form->field($model, 'updated_at')->textInput() ?>

				<div class="form-group">
					<?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
				</div>

				<?php ActiveForm::end(); ?>
		
		
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

