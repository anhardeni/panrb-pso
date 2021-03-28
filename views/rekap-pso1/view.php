<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use hscstudio\mimin\components\Mimin;

/* @var $this yii\web\View */
/* @var $model app\models\RekapPso1 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Daftar Rekap Pso1', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekap-pso1-view">

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
            'asn',
            'jenis_lembaga',
            'instansi',
            'daerah',
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
            'persentase_pso_iii',
            'persentase_pso_iv',
            'persentase_pso_v',
            'analisa',
        ],
    ]) ?>

</div>
