<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[PsoAnalisa]].
 *
 * @see PsoAnalisa
 */
class PsoAnalisaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return PsoAnalisa[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return PsoAnalisa|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
