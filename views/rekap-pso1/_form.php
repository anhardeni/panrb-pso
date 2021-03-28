<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RekapPso1 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rekap-pso1-form">

    <?php $form = ActiveForm::begin(); ?>
        <?= $form->errorSummary($model) ?> <!-- ADDED HERE -->

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'asn')->dropDownList([ 'Pusat' => 'Pusat', 'Daerah' => 'Daerah', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jenis_lembaga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instansi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'daerah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_srt_usulan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_srt_usulan')->textInput() ?>

    <?= $form->field($model, 'eksisting_pso_iii')->textInput() ?>

    <?= $form->field($model, 'eksisting_pso_iv')->textInput() ?>

    <?= $form->field($model, 'eksisting_pso_v')->textInput() ?>

    <?= $form->field($model, 'jumlah_eksisting')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pso_baru_iii')->textInput() ?>

    <?= $form->field($model, 'pso_baru_iv')->textInput() ?>

    <?= $form->field($model, 'pso_baru_v')->textInput() ?>

    <?= $form->field($model, 'jumlah_pso_baru')->textInput() ?>

    <?= $form->field($model, 'pso_akhir_iii')->textInput() ?>

    <?= $form->field($model, 'pso_akhir_iv')->textInput() ?>

    <?= $form->field($model, 'pso_akhir_v')->textInput() ?>

    <?= $form->field($model, 'persentase_pso_iii')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'persentase_pso_iv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'persentase_pso_v')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'analisa')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
