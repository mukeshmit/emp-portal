<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\LoginForm;

$model = new LoginForm();
?>
<div class="divFixed">
	<a class="divFixedAn"> Chat</a>
	<form>
		<p>Sorry, we aren't online at the moment. Leave a message and we'll get back to you.</p>
		<label>Name*:</label>
		<input type="text" required="">
		<label>Email*:</label>
		<input type="email" required="">
		<input type="submit" value="send">
	</form>
</div>
<div class="container">
	<div class="profile">
		<div class="profile__form">
			<h3 class="loginpa">Login</h3>
			<a class="closs">&times;</a>
			<div class="profile__fields">
				 <?php $form = ActiveForm::begin([
                'id' => $model->formName(),
                'enableAjaxValidation' => true,
            ]); ?>
                <fieldset>
                    <?= $form->field($model, 'username', [
                        'inputOptions' => [
                            'placeholder' => $model->getAttributeLabel('username'),
                        ],
                    ])->label(false); ?>

                    <?= $form->field($model, 'password', [
                        'inputOptions' => [
                            'placeholder' => $model->getAttributeLabel('password'),
                        ],
                    ])->label(false)->passwordInput() ?>

                    <?= $form->field($model, 'rememberMe')->checkbox() ?>

                    <?= Html::submitButton('Login', ['class' => 'btn btn-lg btn-success btn-block', 'name' => 'login-button']) ?>
                </fieldset>
            <?php ActiveForm::end(); ?>
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
	alert('asas');
	$('#myform').on('ajaxBeforeSend', function (event, jqXHR, settings) {
		// Activate waiting label
	}).on('ajaxComplete', function (event, jqXHR, textStatus) {
		// Deactivate waiting label
	});
	
});
</script>