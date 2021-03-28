<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "list_jenislembaga".
 *
 * @property string|null $jenis_lembaga
 */
class ListJenislembaga extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'list_jenislembaga';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis_lembaga'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'jenis_lembaga' => 'Jenis Lembaga',
        ];
    }
}
