<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\PsoMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pso-master-user-form">

     <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]);?>

    <?= $form->errorSummary($model) ?> <!-- ADDED HERE -->


<div class="row">
        <div class="col-sm-2">
           <?= $form->field($model, 'jns_srt_usulan')->dropDownList([ 'baru' => 'Baru', 'revisi ke-1' => 'Revisi ke-1', 'revisi ke-2' => 'Revisi ke-2', 'revisi ke-3' => 'Revisi ke-3', ],['options'=>['baru'=>['Selected'=>true]]]) ?>
       </div>

       <div class="col-sm-6">
        <?= $form->field($model, 'id_instansi')->widget(\kartik\widgets\Select2::classname(), ['data' => \yii\helpers\ArrayHelper::map(\app\models\User::find()->where(['status' => 10])->andWhere(['id' => Yii::$app->user->id])->andWhere(['not', ['instansi' => null]])->orderBy('id')->asArray()->all(), 'id','instansi'),
            'options' => ['placeholder' => 'pilih Instansi Asal'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>
    </div>

</div>

<div class="row">

    <div class="col-sm-4">
        <?= $form->field($model, 'no_srt_usulan')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-sm-2">
        <?= $form->field($model, 'tgl_srt_usulan')->widget(\kartik\datecontrol\DateControl::classname(), [
            'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
            'saveFormat' => 'php:Y-m-d',
            'ajaxConversion' => FALSE,
            'options' => [
                'pluginOptions' => [
                    'placeholder' => 'klik pilih tgl surat',
                    'autoclose' => true
                ]
            ],
        ]); ?>
    </div>
</div>

<div class="row">
<?= $form->field($model, 'eksisting_pso_iii')->textInput() ?>

<?= $form->field($model, 'eksisting_pso_iv')->textInput() ?>

<?= $form->field($model, 'eksisting_pso_v')->textInput() ?>

</div>

<div class="row">
<?= $form->field($model, 'pso_baru_iii')->textInput() ?>

<?= $form->field($model, 'pso_baru_iv')->textInput() ?>

<?= $form->field($model, 'pso_baru_v')->textInput() ?>
</div>


<div class="row">
   
<?= $form->field($model, 'pso_akhir_iii')->textInput()->input('disabledTextInput',
                    ['disabled' => true, ]) ?>

<?= $form->field($model, 'pso_akhir_iv')->textInput()->input('disabledTextInput',
                    ['disabled' => true,   
                    ] )?>

<?= $form->field($model, 'pso_akhir_v')->textInput()->input('disabledTextInput',
                    ['disabled' => true,   
                    ] )?>
   
</div>


 
<?= $form->field($model, 'image1b')->widget(FileInput::classname(), [
              'options' => ['accept' => '*/*'],
               'pluginOptions'=>['allowedFileExtensions'=>['pdf'],'showUpload' => false,],
          ]);   ?>
<!-- 
    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
