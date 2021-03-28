<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PsoMaster */

$this->title = 'Pso Master Baru';
$this->params['breadcrumbs'][] = ['label' => 'Daftar Pso Master', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pso-master-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
