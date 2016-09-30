<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[UserExperiences]].
 *
 * @see UserExperiences
 */
class UserExperiencesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return UserExperiences[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return UserExperiences|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
