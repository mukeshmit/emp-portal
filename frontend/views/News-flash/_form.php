<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\backend\models\Newsflash */
/* @var $form yii\widgets\ActiveForm */

// $model->type= '1';
$model->type = $model->isNewRecord ?1:2;
?>

    <?php $form = ActiveForm::begin(); ?>
	<div class="form-group">
    <?php // = $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['class'=>'form-control','maxlength' => true]) ?>
	</div>
	<br>
	<div class="form-group">
	<?= $form->field($model, 'body')->widget(CKEditor::className(), [ 'options' => ['rows' => 6],
    'preset' => 'basic',
    'clientOptions' => [
        'allowedContent' => true,
    ]]) ?>
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
