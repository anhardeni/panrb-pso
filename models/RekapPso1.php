<?php

namespace app\models;

use Yii;

use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
 

/**
 * This is the model class for table "rekap_pso1".
 *
 * @property int $id
 * @property string $asn
 * @property string $jenis_lembaga
 * @property string $instansi
 * @property string $daerah
 * @property string $no_srt_usulan
 * @property string $tgl_srt_usulan
 * @property int $eksisting_pso_iii
 * @property int $eksisting_pso_iv
 * @property int $eksisting_pso_v
 * @property string $jumlah_eksisting
 * @property int $pso_baru_iii
 * @property int $pso_baru_iv
 * @property int $pso_baru_v
 * @property int $jumlah_pso_baru
 * @property int $pso_akhir_iii
 * @property int $pso_akhir_iv
 * @property int $pso_akhir_v
 * @property string $persentase_pso_iii
 * @property string $persentase_pso_iv
 * @property string $persentase_pso_v
 * @property string $analisa
 */
class RekapPso1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function primaryKey() 
           { 
               return ['id']; 
           }

    public static function tableName()
    {
        return 'rekap_pso1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id','eksisting_pso_iii', 'eksisting_pso_iv', 'eksisting_pso_v', 'jumlah_eksisting', 'pso_baru_iii', 'pso_baru_iv', 'pso_baru_v', 'jumlah_pso_baru', 'pso_akhir_iii', 'pso_akhir_iv', 'pso_akhir_v', 'jumlah_pso_akhir'], 'integer'],
            [['asn'], 'string'],
            [['tgl_srt_usulan'], 'safe'],
            [['persentase_pso_iii', 'persentase_pso_iv', 'persentase_pso_v'], 'number'],
            [['jenis_lembaga', 'instansi', 'daerah', 'no_srt_usulan'], 'string', 'max' => 100],
            [['analisa'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
                      'asn' => 'Asn',
            'jenis_lembaga' => 'Jenis Lembaga',
            'instansi' => 'Instansi',
            'daerah' => 'Daerah',
            'no_srt_usulan' => 'No Srt Usulan',
            'tgl_srt_usulan' => 'Tgl Srt Usulan',
            'eksisting_pso_iii' => 'Eksisting Pso Iii',
            'eksisting_pso_iv' => 'Eksisting Pso Iv',
            'eksisting_pso_v' => 'Eksisting Pso V',
            'jumlah_eksisting' => 'Jumlah Eksisting',
            'pso_baru_iii' => 'Pso Baru Iii',
            'pso_baru_iv' => 'Pso Baru Iv',
            'pso_baru_v' => 'Pso Baru V',
            'jumlah_pso_baru' => 'Jumlah Pso Baru',
            'pso_akhir_iii' => 'Pso Akhir Iii',
            'pso_akhir_iv' => 'Pso Akhir Iv',
            'pso_akhir_v' => 'Pso Akhir V',
            'persentase_pso_iii' => 'Persentase Pso Iii',
            'persentase_pso_iv' => 'Persentase Pso Iv',
            'persentase_pso_v' => 'Persentase Pso V',
            'analisa' => 'Analisa',
        ];
    }

    public function getJenisLembaga()
    {
        return $this->hasOne(ListJenislembaga::className(), ['jenis_lembaga' => 'jenis_lembaga']);
    }
}
