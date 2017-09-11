<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Newsflash;
use yii\helpers\ArrayHelper;
use sammaye\mailchimp\mailchimp;
/* @var $this yii\web\View */
/* @var $model frontend\models\Campaigns */
/* @var $form yii\widgets\ActiveForm */
$Newsflash = Newsflash::find()->orderBy(['created_at'=>SORT_DESC])->all();
$data = array();
if(isset($Newsflash) && !empty($Newsflash)){
	foreach ($Newsflash as $modelData){
		$data[$modelData->id] = $modelData->title . ' - '. date('d-m-Y H:i A',$modelData->created_at); 
		
	}
}

$mc = new Mailchimp(['apikey' => 'a3cbd818e258031efe11591b96fa3fcc-us16','opts'=>['verify_ssl'=>false]]);
// $mc = new Mailchimp(['apikey' => '5562acdeed1bf2ee829a71b7e6428c5a-us15','opts'=>['verify_ssl'=>false]]);
// $this->opts = false;

$userList = $mc->lists->getList();
$listsdata = [];
if(isset($userList['data']) && !empty($userList['data'])){
	foreach ($userList['data'] as $userListData){
		
		$listsdata[$userListData['id']] = $userListData['name']; 
		
	}
}

// echo "<pre>";
// print_r($listsdata);
// die;

?>

<div class="campaigns-form">
    <?php $form = ActiveForm::begin(); ?>
	<div class="form-group">
        <?= $form->field($model, 'news_flash_id')->dropDownList($data, ['prompt' => 'Select a news flash'])->label(false); ?>
    </div>
    
	<div class="form-group">
        <?= $form->field($model, 'mc_camp_list_id')->dropDownList($listsdata, ['prompt' => 'Select a mailchimp list'])->label(false); ?>
    </div>
    <?= $form->field($model, 'campaignname')->textInput()->input('campaignname', ['placeholder' => "Enter campaign name"])->label(false); ?>

    <?php //= $form->field($model, 'mc_camp_id')->textInput()->label(false); ?>

    <?php //= $form->field($model, 'created_by')->textInput()->label(false); ?>

    <?php //= $form->field($model, 'created_at')->textInput()->label(false); ?>

    <?php //= $form->field($model, 'updated_at')->textInput()->label(false); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
