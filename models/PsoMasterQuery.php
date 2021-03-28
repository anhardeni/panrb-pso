<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[PsoMaster]].
 *
 * @see PsoMaster
 */
class PsoMasterQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return PsoMaster[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return PsoMaster|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
