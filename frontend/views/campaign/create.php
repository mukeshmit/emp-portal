<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Campaigns */

$this->title = 'Create New Campaigns';
$this->params['breadcrumbs'][] = ['label' => 'Campaigns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campaigns-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
