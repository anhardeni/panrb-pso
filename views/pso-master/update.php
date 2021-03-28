<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PsoMaster */

$this->title = 'Update Pso Master: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Daftar Pso Master', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pso-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
