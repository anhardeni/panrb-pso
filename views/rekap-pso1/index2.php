<?php


use hscstudio\mimin\components\Mimin;
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax; use kartik\export\ExportMenu;
$gridColumns=[['class' => 'kartik\grid\SerialColumn'], 
            //'asn',
[
  'attribute' => 'asn',
  'filter' => ['Pusat' => 'Pusat', 'Daerah' => 'Daerah'],
  'format' => 'raw',
  'options' => [
    'width' => '100px',
  ],
  'value' => function ($data) {
    if ($data->asn == 'Pusat')
      return "<span class='label label-primary'>" . 'Pusat' . "</span>";
    else
      return "<span class='label label-danger'>" . 'Daerah' . "</span>";
  }
],
//'daerah',
//'jenis_lembaga',
[
  'attribute' => 'jenis_lembaga',
  'label' => 'Jenis Lembaga',
  'width' => '250px',
  'value' => function ($model, $key, $index, $widget){
                    //return $model->Jenislembaga->jenis_lembaga;//getPenyajiData1Name()
    return $model->jenis_lembaga;
  },
  'filterType' => GridView::FILTER_SELECT2,
  'filter' => 
               // \yii\helpers\ArrayHelper::map(\app\models\ListJenislembaga::find()->where(['jenis_lembaga' => $searchModel->jenis_lembaga])->orderBy('jenis_lembaga')->asArray()->all(), 'jenis_lembaga',''),
                //$this->jenis_lembaga,
  \yii\helpers\ArrayHelper::map(\app\models\User::find()->where(['status' => 10])->andWhere(['not', ['instansi' => null]])->orderBy('id')->asArray()->all(), 'jenis_lembaga','jenis_lembaga'),

  'filterWidgetOptions' => [
   'pluginOptions' => ['allowClear' => true],
 ],
 'filterInputOptions' => ['placeholder' => ' jenis lembaga',  'multiple' => true],
 'format' => 'raw',
            'group' => true,  // enable grouping,
            'groupedRow' => true,                    // move grouped column to a single grouped row
            'groupOddCssClass' => 'kv-grouped-row',  // configure odd group cell css class
            'groupEvenCssClass' => 'kv-grouped-row', // configure even group cell css 
            'groupFooter' => function ($model, $key, $index, $widget) { // Closure method
              return [
                    'mergeColumns' => [[1,5]], // columns to merge in summary
                    'content' => [             // content to show in each summary cell
                    4 => 'Keseluruhan (' . $model->jenis_lembaga . ')',
                    6=> GridView::F_SUM,
                    7 => GridView::F_SUM,
                    8 => GridView::F_SUM,
                    9=> GridView::F_SUM,
                    10 => GridView::F_SUM,
                    11 => GridView::F_SUM,
                    12=> GridView::F_SUM,
                    13 => GridView::F_SUM,
                    14 => GridView::F_SUM,
                    15=> GridView::F_SUM,
                    16 => GridView::F_SUM,
                    17 => GridView::F_SUM,
                  ],
                    'contentFormats' => [      // content reformatting for each summary cell
                    6 => ['format' => 'number', 'decimals' => 0],
                    7 => ['format' => 'number', 'decimals' => 0],
                    8 => ['format' => 'number', 'decimals' => 0],
                    9 => ['format' => 'number', 'decimals' => 0],
                    10 => ['format' => 'number', 'decimals' => 0],
                    11 => ['format' => 'number', 'decimals' => 0],
                    12 => ['format' => 'number', 'decimals' => 0],
                    13 => ['format' => 'number', 'decimals' => 0],
                    14 => ['format' => 'number', 'decimals' => 0],
                    15 => ['format' => 'number', 'decimals' => 0],
                    16 => ['format' => 'number', 'decimals' => 0],
                    17 => ['format' => 'number', 'decimals' => 0],
                  ],
                    'contentOptions' => [      // content html attributes for each summary cell
                    1 => ['style' => 'font-variant:medium-caps',],
                    1 => ['style' => 'text-align:right',],
                    6 => ['style' => 'text-align:right'],
                    7 => ['style' => 'text-align:right'],
                    8 => ['style' => 'text-align:right'],
                    9 => ['style' => 'text-align:right'],
                    10 => ['style' => 'text-align:right'],
                    11 => ['style' => 'text-align:right'],
                    12 => ['style' => 'text-align:right'],
                    13 => ['style' => 'text-align:right'],
                    14 => ['style' => 'text-align:right'],
                    15=> ['style' => 'text-align:right'],
                    16 => ['style' => 'text-align:right'],
                    17 => ['style' => 'text-align:right'],

                  ],
                    // html attributes for group summary row
                  'options' => ['class' => 'info table-info','style' => 'font-weight:bold;']
                ];
              }
            ],

         // [
         //        'attribute' => 'jenis_lembaga',
         //        'filter' => ['Pusat' => 'Pusat', 'Daerah' => 'Daerah'],
         //        'format' => 'raw',
         //        'options' => [
         //            'width' => '100px',
         //        ],
         //        'value' => function ($data) {
         //            if ($data->asn == 'Pusat')
         //                return "<span class='label label-primary'>" . 'Pusat' . "</span>";
         //            else
         //                return "<span class='label label-danger'>" . 'Daerah' . "</span>";
         //        }
         //    ],
            'instansi',
            'no_srt_usulan',
            'tgl_srt_usulan',

//'eksisting_pso_iii',
            [
             'attribute' => 'eksisting_pso_iii', 
             'vAlign' => 'middle',
             'hAlign' => 'right', 
             'width' => '7%',
             'format' => ['decimal', 0],
             'pageSummary' => true
           ],
//'eksisting_pso_iv',
           [
             'attribute' => 'eksisting_pso_iv', 
             'vAlign' => 'middle',
             'hAlign' => 'right', 
             'width' => '7%',
             'format' => ['decimal', 0],
             'pageSummary' => true
           ],
//'eksisting_pso_v',
           [
             'attribute' => 'eksisting_pso_v', 
             'vAlign' => 'middle',
             'hAlign' => 'right', 
             'width' => '7%',
             'format' => ['decimal', 0],
             'pageSummary' => true
           ],
//'jumlah_eksisting',
           [
             'attribute' => 'jumlah_eksisting', 
             'vAlign' => 'middle',
             'hAlign' => 'right', 
             'width' => '7%',
             'format' => ['decimal', 0],
             'pageSummary' => true
           ],
//'pso_baru_iii',
           [
             'attribute' => 'pso_baru_iii', 
             'vAlign' => 'middle',
             'hAlign' => 'right', 
             'width' => '7%',
             'format' => ['decimal', 0],
             'pageSummary' => true
           ],
//'pso_baru_iv',
           [
             'attribute' => 'pso_baru_iv', 
             'vAlign' => 'middle',
             'hAlign' => 'right', 
             'width' => '7%',
             'format' => ['decimal', 0],
             'pageSummary' => true
           ],
//'pso_baru_v',
           [
             'attribute' => 'pso_baru_v', 
             'vAlign' => 'middle',
             'hAlign' => 'right', 
             'width' => '7%',
             'format' => ['decimal', 0],
             'pageSummary' => true
           ],
//'jumlah_pso_baru',
           [
             'attribute' => 'jumlah_pso_baru', 
             'vAlign' => 'middle',
             'hAlign' => 'right', 
             'width' => '7%',
             'format' => ['decimal', 0],
             'pageSummary' => true
           ],
//'pso_akhir_iii',
           [
             'attribute' => 'pso_akhir_iii', 
             'vAlign' => 'middle',
             'hAlign' => 'right', 
             'width' => '7%',
             'format' => ['decimal', 0],
             'pageSummary' => true
           ],
//'pso_akhir_iv',
           [
             'attribute' => 'pso_akhir_iv', 
             'vAlign' => 'middle',
             'hAlign' => 'right', 
             'width' => '7%',
             'format' => ['decimal', 0],
             'pageSummary' => true
           ],
//'pso_akhir_v',
           [
             'attribute' => 'pso_akhir_v', 
             'vAlign' => 'middle',
             'hAlign' => 'right', 
             'width' => '7%',
             'format' => ['decimal', 0],
             'pageSummary' => true
           ],
//'jumlah_pso_akhir',
           [
             'attribute' => 'jumlah_pso_akhir', 
             'vAlign' => 'middle',
             'hAlign' => 'right', 
             'width' => '7%',
             'format' => ['decimal', 0],
             'pageSummary' => true
           ],
            //'persentase_pso_iii:percent',
           [
            'attribute'=>'persentase_pso_iii',
            //'width'=>'50px',
            //'hAlign'=>'right',
            'format'=> ['percent',],
            'pageSummary' => true,
            'pageSummaryFunc' => GridView::F_AVG,
          ],
            //'persentase_pso_iv',
          [
            'attribute'=>'persentase_pso_iv',
            //'width'=>'50px',
            //'hAlign'=>'right',
            'format'=> ['percent',],
            'pageSummary' => true,
            'pageSummaryFunc' => GridView::F_AVG,
          ],
            //'persentase_pso_v',
          [
            'attribute'=>'persentase_pso_v',
            //'width'=>'50px',
            //'hAlign'=>'right',
            'format'=> ['percent',],
            'pageSummary' => true,
            'pageSummaryFunc' => GridView::F_AVG,
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
              'columns' => $gridColumns,
              'showPageSummary' => true,
              'pjax' => true,
              'striped' => true,
              'hover'=>true,
              'resizableColumns'=>true, 

              'panel' => ['type' => 'info', 'heading' => 'REKAPITULASI DATA'],
              'toggleDataContainer' => ['class' => 'btn-group mr-2'],
              'responsive'=>true,

            ]); ?>
            <?php Pjax::end(); ?>
          </div>
