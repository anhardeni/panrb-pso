<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[PsoDetail]].
 *
 * @see PsoDetail
 */
class PsoDetailQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return PsoDetail[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return PsoDetail|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
