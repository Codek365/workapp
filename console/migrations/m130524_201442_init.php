<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password' => $this->string(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions); 
        $this->createTable('{{%user_profile}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull()->unique(),
            'name' => $this->string(50)->notNull(),
            'birthday' => $this->date(),
            'phone' => $this->integer(),
            'address' => $this->string(100),
            'email' => $this->string()->notNull()->unique(),
            'career_goal' => $this->text(),
           
        ], $tableOptions); 
        $this->createTable('{{%user_experiences}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),  
            'experiences' => $this->text(),
           
        ], $tableOptions); 
        $this->createTable('{{%user_skills}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'skills' => $this->text(),
           
        ], $tableOptions); 
        $this->createTable('{{%user_educations}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'educations' => 'text',
           
        ], $tableOptions);
        $this->createTable('{{%cv_form}}', [
            'id' => $this->primaryKey(),
            'name' => $this->text(),
           
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
        $this->dropTable('{{%user_profile}}');
        $this->dropTable('{{%user_experiences}}');
        $this->dropTable('{{%user_skills}}');
        $this->dropTable('{{%user_educations}}');
        $this->dropTable('{{%cv_form}}');
    }
}
