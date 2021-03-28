<?php

namespace app\models;

use Yii;

use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;


/**
 * This is the model class for table "pso_detail".
 *
 * @property int $id
 * @property int $id_pso_master
 * @property string $catatan_verifikasi
 * @property int $created_at
 * @property int $created_by
 * @property int $updated_at
 * @property int $updated_by
 */
class PsoDetail extends \yii\db\ActiveRecord
{
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
        return 'pso_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pso_master', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['catatan_verifikasi'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_pso_master' => 'Id Pso Master',
            'catatan_verifikasi' => 'Catatan Verifikasi',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * @inheritdoc
     * @return PsoDetailQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PsoDetailQuery(get_called_class());
    }
}
