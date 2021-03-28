<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RekapPso1Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rekap-pso1-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'asn') ?>

    <?= $form->field($model, 'jenis_lembaga') ?>

    <?= $form->field($model, 'instansi') ?>

    <?= $form->field($model, 'daerah') ?>

    <?php // echo $form->field($model, 'no_srt_usulan') ?>

    <?php // echo $form->field($model, 'tgl_srt_usulan') ?>

    <?php // echo $form->field($model, 'eksisting_pso_iii') ?>

    <?php // echo $form->field($model, 'eksisting_pso_iv') ?>

    <?php // echo $form->field($model, 'eksisting_pso_v') ?>

    <?php // echo $form->field($model, 'jumlah_eksisting') ?>

    <?php // echo $form->field($model, 'pso_baru_iii') ?>

    <?php // echo $form->field($model, 'pso_baru_iv') ?>

    <?php // echo $form->field($model, 'pso_baru_v') ?>

    <?php // echo $form->field($model, 'jumlah_pso_baru') ?>

    <?php // echo $form->field($model, 'pso_akhir_iii') ?>

    <?php // echo $form->field($model, 'pso_akhir_iv') ?>

    <?php // echo $form->field($model, 'pso_akhir_v') ?>

    <?php // echo $form->field($model, 'persentase_pso_iii') ?>

    <?php // echo $form->field($model, 'persentase_pso_iv') ?>

    <?php // echo $form->field($model, 'persentase_pso_v') ?>

    <?php // echo $form->field($model, 'analisa') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
