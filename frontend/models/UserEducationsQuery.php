<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[UserEducations]].
 *
 * @see UserEducations
 */
class UserEducationsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return UserEducations[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return UserEducations|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
