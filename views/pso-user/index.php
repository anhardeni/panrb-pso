<?php


use hscstudio\mimin\components\Mimin;
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax; use kartik\export\ExportMenu;
$gridColumns=[['class' => 'yii\grid\SerialColumn'], 
        //    'jns_srt_usulan',
           // 'id_instansi',
             [
        'attribute' => 'id_instansi',
        'label' => 'Instansi',

        'value' => function($model){
                    return $model->instansi->instansi;//getPenyajiData1Name()
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => 
             //   \yii\helpers\ArrayHelper::map(\app\models\User::find()->asArray()->all(), 'id','instansi'),
                \yii\helpers\ArrayHelper::map(\app\models\User::find()->where(['status' => 10])->andWhere(['id' => Yii::$app->user->id])->andWhere(['not', ['instansi' => null]])->orderBy('id')->asArray()->all(), 'id','instansi'),//->andWhere(['id' => Yii::$app->user->id])
                'filterWidgetOptions' => [
                 'pluginOptions' => ['allowClear' => true],
                 
             ],
             'filterInputOptions' => ['placeholder' => ' Nama Instansi', 'id' => 'grid--link_tema',  'disabled'=> true]
         ],
            'no_srt_usulan',
            'tgl_srt_usulan',
             'eksisting_pso_iii',
             'eksisting_pso_iv',
             'eksisting_pso_v',
             'pso_baru_iii',
             'pso_baru_iv',
             'pso_baru_v',
             'pso_akhir_iii',
             'pso_akhir_iv',
            'pso_akhir_v',
            // 'flag1_analisa_usulan',
            // 'ket_analisa',
            // 'id_analis',
            // 'src_filename',
            // 'web_filename',
            // 'dok_filename',
            // 'created_at',
            // 'created_by',
            // 'updated_at',
            // 'updated_by',

         ['class' => 'yii\grid\ActionColumn',   'template' => Mimin::filterActionColumn([
             'update','delete','view'],$this->context->route),    ],    ]; echo ExportMenu::widget(['dataProvider' => $dataProvider,'columns' => $gridColumns]);

/* @var $this yii\web\View */
/* @var $searchModel app\models\PsoUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Pso Master';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pso-master-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p> <?php if ((Mimin::checkRoute($this->context->id."/create"))){ ?>        <?=  Html::a('Tambah Data Pso ', ['create'], ['class' => 'btn btn-success']) ?>
    <?php } ?>    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumns,        'responsive'=>true,
        'hover'=>true,
         'resizableColumns'=>true,    
    ]); ?>
    <?php Pjax::end(); ?>
</div>
