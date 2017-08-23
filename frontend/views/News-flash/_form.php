<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\backend\models\Newsflash */
/* @var $form yii\widgets\ActiveForm */

$model->type= '1';
?>

    <?php $form = ActiveForm::begin(); ?>
	<div class="form-group">
    <?php // = $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['class'=>'form-control','maxlength' => true]) ?>
	</div>
	<br>
	<div class="form-group">
    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
	</div>
	<br>
	<div class="form-group">
    <?= $form->field($model, 'image[]')->fileInput(['multiple'=>'multiple']); ?>
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
