<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RekapPso1 */

$this->title = 'Rekap Pso1 Baru';
$this->params['breadcrumbs'][] = ['label' => 'Daftar Rekap Pso1', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekap-pso1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
