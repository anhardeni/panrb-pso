<?php


use hscstudio\mimin\components\Mimin;
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax; use kartik\export\ExportMenu;
$gridColumns=[['class' => 'yii\grid\SerialColumn'], 
            'asn',
//'daerah',
'jenis_lembaga',
// [
//         'attribute' => 'jenis_lembaga',
//         'label' => 'Jenis Lembaga',
//         'value' => function($model){
//                     //return $model->Jenislembaga->jenis_lembaga;//getPenyajiData1Name()
//                     return $model->getJenisLembaga();
//                 },
//                 'filterType' => GridView::FILTER_SELECT2,
//                 'filter' => $this->jenis_lembaga,
//                  //$model = User::find()->groupBy('usertype')->all();
//                 'filterWidgetOptions' => [
//                  'pluginOptions' => ['allowClear' => true],
//              ],
//              'filterInputOptions' => ['placeholder' => ' jenis lembaga', 'id' => 'grid--jenislembaga']
//          ],
'instansi',
'no_srt_usulan',
'tgl_srt_usulan',
'eksisting_pso_iii',
'eksisting_pso_iv',
'eksisting_pso_v',
'jumlah_eksisting',
'pso_baru_iii',
'pso_baru_iv',
'pso_baru_v',
'jumlah_pso_baru',
'pso_akhir_iii',
'pso_akhir_iv',
'pso_akhir_v',
'jumlah_pso_akhir',
            //'persentase_pso_iii:percent',
[
    'attribute'=>'persentase_pso_iii',
            //'width'=>'50px',
            //'hAlign'=>'right',
    'format'=> ['percent',],
],
            //'persentase_pso_iv',
[
    'attribute'=>'persentase_pso_iv',
            //'width'=>'50px',
            //'hAlign'=>'right',
    'format'=> ['percent',],
],
            //'persentase_pso_v',
[
    'attribute'=>'persentase_pso_v',
            //'width'=>'50px',
            //'hAlign'=>'right',
    'format'=> ['percent',],
],
'analisa',

['class' => 'yii\grid\ActionColumn',   'template' => Mimin::filterActionColumn([
  'update','delete','view'],$this->context->route),    ],    ]; echo ExportMenu::widget(['dataProvider' => $dataProvider,'columns' => $gridColumns]);

/* @var $this yii\web\View */
/* @var $searchModel app\models\RekapPso1Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Rekap Pso1';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekap-pso1-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'showPageSummary' => true,
        'columns' => $gridColumns,
        'panel' => ['type' => 'info', 'heading' => 'REKAPITULASI DATA'],
        'toggleDataContainer' => ['class' => 'btn-group mr-2'],
        'responsive'=>true,
        'hover'=>true,
        'resizableColumns'=>true,    
    ]); ?>
    <?php Pjax::end(); ?>
</div>
