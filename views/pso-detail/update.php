<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PsoDetail */

$this->title = 'Update Pso Detail: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Daftar Pso Detail', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pso-detail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
