<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%user_profile}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $birthday
 * @property integer $phone
 * @property string $address
 * @property string $email
 * @property string $career_goal
 */
class UserProfile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_profile}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'email'], 'required'],
            [['user_id', 'phone'], 'integer'],
            [['birthday'], 'safe'],
            [['career_goal'], 'string'],
            [['name'], 'string', 'max' => 50],
            [['address'], 'string', 'max' => 100],
            [['email'], 'string', 'max' => 255],
            [['user_id'], 'unique'],
            [['email'], 'unique'],
           
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
            'name' => Yii::t('app', 'Name'),
            'birthday' => Yii::t('app', 'Birthday'),
            'phone' => Yii::t('app', 'Phone'),
            'address' => Yii::t('app', 'Address'),
            'email' => Yii::t('app', 'Email'),
            'career_goal' => Yii::t('app', 'Career Goal'),
            'exp_time' => Yii::t('app', 'Time period'),
            'company' => Yii::t('app', 'Company'),
            'job_title' => Yii::t('app', 'Job Title'),
            'describe' => Yii::t('app', 'Describe'),
            'edu_time' => Yii::t('app', 'Time'),
            'course' => Yii::t('app', 'Course'),
            'achievements' => Yii::t('app', 'Achievements'),
            'skill' => Yii::t('app', 'Skill'),
            'level' => Yii::t('app', 'Level'),
        ];
    }



    /**
     * @inheritdoc
     * @return UserProfileQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UserProfileQuery(get_called_class());
    }
}
