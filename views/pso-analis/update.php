<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PsoAnalisa */

$this->title = 'Update Pso Analisa: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Daftar Pso Analisa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pso-analisa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
