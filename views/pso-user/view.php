<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use hscstudio\mimin\components\Mimin;

/* @var $this yii\web\View */
/* @var $model app\models\PsoMaster */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Daftar Pso Master', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pso-master-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
             <?php if ((Mimin::checkRoute($this->context->id."/update"))){ ?>        <?= Html::a('Ubah', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php } if ((Mimin::checkRoute($this->context->id."/delete"))){ ?>        <?= Html::a('Hapus', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apakah Anda yakin ingin menghapus item ini??',
                'method' => 'post',
            ],
        ]) ?>
        <?php } ?>    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'jns_srt_usulan',
            'id_instansi',
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
            'flag1_analisa_usulan',
            'ket_analisa',
            'id_analis',
            'src_filename',
            'web_filename',
            'dok_filename',
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
        ],
    ]) ?>

</div>
