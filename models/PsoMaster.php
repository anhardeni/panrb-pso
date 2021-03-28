<?php

namespace app\models;

use Yii;

use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use yii\db\Expression;


/**
 * This is the model class for table "pso_master".
 *
 * @property int $id
 * @property string $jns_srt_usulan
 * @property int $id_instansi
 * @property string $no_srt_usulan
 * @property string $tgl_srt_usulan
 * @property int $eksisting_pso_iii
 * @property int $eksisting_pso_iv
 * @property int $eksisting_pso_v
 * @property int $pso_baru_iii
 * @property int $pso_baru_iv
 * @property int $pso_baru_v
 * @property int $pso_akhir_iii
 * @property int $pso_akhir_iv
 * @property int $pso_akhir_v
 * @property int $flag1_analisa_usulan
 * @property string $ket_analisa
 * @property int $id_analis
 * @property string $src_filename
 * @property string $web_filename
 * @property string $dok_filename
 * @property int $created_at
 * @property int $created_by
 * @property int $updated_at
 * @property int $updated_by
 *
 * @property User $instansi
 * @property PsoAnalisa $flag1AnalisaUsulan
 */
class PsoMaster extends \yii\db\ActiveRecord
{
  public $image1b;

    //   public function init()

    // {

    //     parent::init();



    //     $this->jns_srt_usulan = 'baru';
    //     $this->eksisting_pso_iii = 0;
    //      $this->eksisting_pso_iv = 0;
    //       $this->eksisting_pso_v = 0;
    //        $this->pso_baru_iii = 0;
    //         $this->pso_baru_iv = 0;
    //          $this->pso_baru_v = 0;




    // }
    /**
     * @inheritdoc
     */


    public function behaviors()
    {
        return [
            BlameableBehavior::className(),
            // 'class' => BlameableBehavior::className(),
            //            'updatedByAttribute' => false,
            
            TimestampBehavior::className(),
           // 'value' => new Expression('NOW()'),
        ];
    }
    public static function tableName()
    {
        return 'pso_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jns_srt_usulan'], 'string'],
           // [['jns_srt_usulan'], 'default', 'value' => 'baru'],
            [['id_instansi'], 'required'],
            [['id_instansi', 'eksisting_pso_iii', 'eksisting_pso_iv', 'eksisting_pso_v', 'pso_baru_iii', 'pso_baru_iv', 'pso_baru_v', 'pso_akhir_iii', 'pso_akhir_iv', 'pso_akhir_v', 'flag1_analisa_usulan', 'id_analis', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [[ 'eksisting_pso_iii', 'eksisting_pso_iv', 'eksisting_pso_v', 'pso_baru_iii', 'pso_baru_iv', 'pso_baru_v'], 'default', 'value'=> 0],
            [['tgl_srt_usulan'], 'safe'],
            [['image1b'], 'safe'],
           // [['image1b'], 'file', 'extensions'=>'pdf'],
            [['image1b'], 'file', 'extensions'=>'pdf', 'maxSize'=>'70520'],//68Kb
            [['no_srt_usulan', 'src_filename', 'web_filename', 'dok_filename'], 'string', 'max' => 100],
            [['ket_analisa'], 'string', 'max' => 255],
            [['id_instansi'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_instansi' => 'id']],
            [['flag1_analisa_usulan'], 'exist', 'skipOnError' => true, 'targetClass' => PsoAnalisa::className(), 'targetAttribute' => ['flag1_analisa_usulan' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jns_srt_usulan' => 'Jns Srt Usulan',
            'id_instansi' => 'Id Instansi',
            'no_srt_usulan' => 'No Srt Usulan',
            'tgl_srt_usulan' => 'Tgl Srt Usulan',
            'eksisting_pso_iii' => 'Eksisting Pso Iii',
            'eksisting_pso_iv' => 'Eksisting Pso Iv',
            'eksisting_pso_v' => 'Eksisting Pso V',
            'pso_baru_iii' => 'Pso Baru Iii',
            'pso_baru_iv' => 'Pso Baru Iv',
            'pso_baru_v' => 'Pso Baru V',
            'pso_akhir_iii' => 'Pso Akhir Iii',
            'pso_akhir_iv' => 'Pso Akhir Iv',
            'pso_akhir_v' => 'Pso Akhir V',
            'flag1_analisa_usulan' => 'Flag1 Analisa Usulan',
            'ket_analisa' => 'Ket Analisa',
            'id_analis' => 'Id Analis',
            'src_filename' => 'Src Filename',
            'web_filename' => 'Web Filename',
            'dok_filename' => 'Dok Filename',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInstansi()
    {
        return $this->hasOne(User::className(), ['id' => 'id_instansi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFlag1AnalisaUsulan()
    {
        return $this->hasOne(PsoAnalisa::className(), ['id' => 'flag1_analisa_usulan']);
    }

    public function getFlag1AnalisaUsulanName(){
        $model=$this->flag1AnalisaUsulan;
        return $model?$model->analisa:'';
    }

    /**
     * @inheritdoc
     * @return PsoMasterQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PsoMasterQuery(get_called_class());
    }

    public function beforeSave($insert) 
    {

       $this->pso_akhir_iii = $this->eksisting_pso_iii - $this->pso_baru_iii;
       $this->pso_akhir_iv = $this->eksisting_pso_iv - $this->pso_baru_iv;
       $this->pso_akhir_v = $this->eksisting_pso_v - $this->pso_baru_v;


       return parent::beforeSave($insert);
   }
}
