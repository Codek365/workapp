<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%user_educations}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $time
 * @property string $course
 * @property string $achievements
 */
class UserEducations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_educations}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['edu_time','course','achievements'], 'required'],
            [['user_id'], 'integer'],
            [['edu_time'], 'safe'],
            [['course'], 'string', 'max' => 50],
            [['achievements'], 'string', 'max' => 100],
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
            'edu_time' => Yii::t('app', 'Time'),
            'course' => Yii::t('app', 'Course'),
            'achievements' => Yii::t('app', 'Achievements'),
        ];
    }

    /**
     * @inheritdoc
     * @return UserEducationsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UserEducationsQuery(get_called_class());
    }
}
