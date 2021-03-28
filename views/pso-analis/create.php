<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PsoAnalisa */

$this->title = 'Pso Analisa Baru';
$this->params['breadcrumbs'][] = ['label' => 'Daftar Pso Analisa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pso-analisa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
