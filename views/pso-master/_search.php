<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PsoMasterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pso-master-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'jns_srt_usulan') ?>

    <?= $form->field($model, 'id_instansi') ?>

    <?= $form->field($model, 'no_srt_usulan') ?>

    <?= $form->field($model, 'tgl_srt_usulan') ?>

    <?php // echo $form->field($model, 'eksisting_pso_iii') ?>

    <?php // echo $form->field($model, 'eksisting_pso_iv') ?>

    <?php // echo $form->field($model, 'eksisting_pso_v') ?>

    <?php // echo $form->field($model, 'pso_baru_iii') ?>

    <?php // echo $form->field($model, 'pso_baru_iv') ?>

    <?php // echo $form->field($model, 'pso_baru_v') ?>

    <?php // echo $form->field($model, 'pso_akhir_iii') ?>

    <?php // echo $form->field($model, 'pso_akhir_iv') ?>

    <?php // echo $form->field($model, 'pso_akhir_v') ?>

    <?php // echo $form->field($model, 'flag1_analisa_usulan') ?>

    <?php // echo $form->field($model, 'ket_analisa') ?>

    <?php // echo $form->field($model, 'id_analis') ?>

    <?php // echo $form->field($model, 'src_filename') ?>

    <?php // echo $form->field($model, 'web_filename') ?>

    <?php // echo $form->field($model, 'dok_filename') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
