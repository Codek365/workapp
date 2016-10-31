<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%user_experiences}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $time
 * @property string $company
 * @property string $job_title
 * @property string $describe
 */
class UserExperiences extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_experiences}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['exp_time'], 'safe'],
            [['company'], 'string', 'max' => 100],
            [['job_title'], 'string', 'max' => 50],
            [['describe'], 'string', 'max' => 500],
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
            'exp_time' => Yii::t('app', 'Time'),
            'company' => Yii::t('app', 'Company'),
            'job_title' => Yii::t('app', 'Job Title'),
            'describe' => Yii::t('app', 'Describe'),
        ];
    }

    /**
     * @inheritdoc
     * @return UserExperiencesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UserExperiencesQuery(get_called_class());
    }
}
