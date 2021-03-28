<?php

namespace app\models;

use Yii;

use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;


/**
 * This is the model class for table "pso_analisa".
 *
 * @property int $id
 * @property string $analisa
 *
 * @property PsoMaster[] $psoMasters
 */
class PsoAnalisa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */


    // public function behaviors()
    // {
    //     return [
    //         [
    //             'class' => TimestampBehavior::className(),
    //             'attributes' => [
    //                 ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
    //                 ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
    //             ],
    //             // if you're using datetime instead of UNIX timestamp:
    //              'value' => new Expression('NOW()'),
    //         ],
    //     ];
    // }
    public static function tableName()
    {
        return 'pso_analisa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
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
            'analisa' => 'Analisa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPsoMasters()
    {
        return $this->hasMany(PsoMaster::className(), ['flag1_analisa_usulan' => 'id']);
    }

    /**
     * @inheritdoc
     * @return PsoAnalisaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PsoAnalisaQuery(get_called_class());
    }
}
