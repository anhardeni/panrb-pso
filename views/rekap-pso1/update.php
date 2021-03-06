<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RekapPso1 */

$this->title = 'Update Rekap Pso1: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Daftar Rekap Pso1', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rekap-pso1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
