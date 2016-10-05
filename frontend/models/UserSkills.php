<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%user_skills}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $skill
 * @property integer $level
 */
class UserSkills extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_skills}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'level'], 'integer'],
            [['skill'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'skill' => Yii::t('app', 'Skill'),
            'level' => Yii::t('app', 'Level'),
        ];
    }

    /**
     * @inheritdoc
     * @return UserSkillsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UserSkillsQuery(get_called_class());
    }
}
