<?php


use hscstudio\mimin\components\Mimin;
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax; use kartik\export\ExportMenu;
$gridColumns=[['class' => 'yii\grid\SerialColumn'], 
            //'jns_srt_usulan',
           // 'id_instansi',
            [
        'attribute' => 'id_instansi',
        'label' => 'Instansi',
        'value' => function($model){
                    return $model->instansi->instansi;//getPenyajiData1Name()
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\User::find()->asArray()->all(), 'id','instansi'),
                'filterWidgetOptions' => [
                 'pluginOptions' => ['allowClear' => true],
             ],
             'filterInputOptions' => ['placeholder' => ' Nama Instansi', 'id' => 'grid--link_tema']
         ],
            'no_srt_usulan',
            'tgl_srt_usulan',
            // 'eksisting_pso_iii',
            // 'eksisting_pso_iv',
            // 'eksisting_pso_v',
            // 'pso_baru_iii',
            // 'pso_baru_iv',
            // 'pso_baru_v',
            // 'pso_akhir_iii',
            // 'pso_akhir_iv',
            // 'pso_akhir_v',
            // 'flag1_analisa_usulan',
            [
        'attribute' => 'flag1_analisa_usulan',
        'label' => 'status analisa',
        'value' => function($model){
                    return $model->getFlag1AnalisaUsulanName();//$model->instansi->instansior $model->instansi->instansi
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\PsoAnalisa::find()->asArray()->all(), 'id','analisa'),
                'filterWidgetOptions' => [
                 'pluginOptions' => ['allowClear' => true],
             ],
             'filterInputOptions' => ['placeholder' => ' status analisa', 'id' => 'grid--link_tema1']
         ],
            // 'ket_analisa',
            // 'id_analis',
            // 'src_filename',
            // 'web_filename',
            // 'dok_filename',
            // 'created_at',
            // 'created_by',
            // 'updated_at',
            // 'updated_by',
            

         ['class' => 'kartik\grid\ActionColumn',   'template' => Mimin::filterActionColumn([
              'update','delete','view'],$this->context->route),    ],    ]; echo ExportMenu::widget(['dataProvider' => $dataProvider,'columns' => $gridColumns]);

/* @var $this yii\web\View */
/* @var $searchModel app\models\PsoMasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Penyerderhanaan Struktur Organisasi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pso-master-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p> <?php if ((Mimin::checkRoute($this->context->id."/create"))){ ?>        <?=  Html::a('Klik Tambah PSO', ['create'], ['class' => 'btn btn-success']) ?>
    <?php } ?>    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumns,        'responsive'=>true,
        'hover'=>true,
         'resizableColumns'=>true,    
         'panel' => [
            'type' => GridView::TYPE_INFO,
             'heading' => '<i class="glyphicon glyphicon-tasks"></i>  <strong> '.Yii::t('app', 'PSO'). '</strong>',
      ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
