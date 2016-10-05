<?php
use kartik\widgets\ActiveForm;
use kartik\widgets\DatePicker;
use \kartik\rating\StarRating;
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model frontend\models\Userprofile */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
    <div class="col-md-6">

        <div class="panel panel-default">
            <div class="panel-body">
            <label>Information</label>
                <?php  $form = ActiveForm::begin([
                'id' => 'login-form-horizontal',
                'formConfig' => ['showLabels' => false,'showHints' => true,'deviceSize' => ActiveForm::SIZE_SMALL]
                ]);  ?>
                <?= $form->field($model, 'user_id')
                ->textInput(['value' => Yii::$app->user->identity->id , 'type' => 'hidden'])
                ->label(false)
                ?>
                <?= $form->field($model, 'name')
                ->textInput(['value' => Yii::$app->user->identity->username,'maxlength' => true, 'placeholder' => $model->getAttributeLabel('name')]) ?>
                <div class="form-group">
                    <?= DatePicker::widget([
                    'name' => 'birthday',
                    'class' => 'form-control',
                    'type' => DatePicker::TYPE_INPUT,
                    'options' => ['placeholder' => $model->getAttributeLabel('birthday')],
                    'pluginOptions' => [
                    'autoclose'=>true,
                    'format' => 'dd-mm-yyyy',
                    'placeholder' => $model->getAttributeLabel('birthday')
                    ]
                    ]);
                    ?>
                </div>
                <?= $form->field($model, 'phone')->textInput(['placeholder' => $model->getAttributeLabel('phone')]) ?>
                <?= $form->field($model, 'address')->textInput(['maxlength' => true, 'placeholder' => $model->getAttributeLabel('address')]) ?>
                <?= $form->field($model, 'email')->textInput(['value' => Yii::$app->user->identity->email, 'maxlength' => true, 'placeholder' => $model->getAttributeLabel('address')]) ?>
                <?= $form->field($model, 'career_goal')->textarea(['rows' => 6, 'placeholder' => $model->getAttributeLabel('career_goal')]) ?>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
            <label>Information</label>
                <?= $form->field($user_edu, 'user_id')
                ->textInput(['value' => Yii::$app->user->identity->id , 'type' => 'hidden'])
                ?>
                <div class="form-group">
                    <?= DatePicker::widget([
                    'name' => 'edu_time',
                    'class' => 'form-control',
                    'type' => DatePicker::TYPE_INPUT,
                    'options' => ['value' => $user_edu->edu_time, 'placeholder' => $model->getAttributeLabel('edu_time')],
                    'pluginOptions' => [
                    'autoclose'=>true,
                    'format' => 'dd-mm-yyyy',
                    ]
                    ]);
                    ?>
                </div>
                <?= $form->field($user_edu, 'course')
                ->textInput(['placeholder' => $model->getAttributeLabel('course')])
                ->label(false)
                ?>
                <?= $form->field($user_edu, 'achievements')
                ->textarea(['placeholder' => $model->getAttributeLabel('achievements')])
                ->label(false)
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-body">
            <label>Information</label>
                <?= $form->field($user_exp, 'user_id')
                ->textInput(['value' => Yii::$app->user->identity->id , 'type' => 'hidden'])
                ?>
                <div class="form-group">
                    <?= DatePicker::widget([
                    'name' => 'exp_time',
                    'class' => 'form-control',
                    'type' => DatePicker::TYPE_INPUT,
                    'options' => ['value' => $user_exp->exp_time, 'placeholder' => $model->getAttributeLabel('exp_time')],
                    'pluginOptions' => [
                    'autoclose'=>true,
                    'format' => 'dd-mm-yyyy',
                    ]
                    ]);
                    ?>
                </div>
                <?= $form->field($user_exp, 'company')
                ->textInput(['placeholder' => $model->getAttributeLabel('company')])
                ->label(false)
                ?>
                <?= $form->field($user_exp, 'job_title')
                ->textInput(['placeholder' => $model->getAttributeLabel('job_title')])
                ->label(false)
                ?>
                <?= $form->field($user_exp, 'describe')
                ->textarea(['placeholder' => $model->getAttributeLabel('describe')])
                ->label(false)
                ?>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
            <label>Information</label>
                <?= $form->field($user_skill, 'user_id')
                ->textInput(['value' => Yii::$app->user->identity->id , 'type' => 'hidden'])
                ?>
                <?= $form->field($user_skill, 'skill')
                ->textInput(['placeholder' => $model->getAttributeLabel('skill')])
                ->label(false)
                ?>
                <?= $form->field($user_skill, 'level')->widget(StarRating::classname(), [
                        'pluginOptions' => [
                            'step' => 1, 
                            'size'=>'sm',
                            'showCaption' => false, 
                            'showClear' =>false,
                            'theme' => 'krajee-uni',
                            'filledStar' => '&#x2605;',
                            'emptyStar' => '&#x2606;'
                        ]
                    ]);
                ?>
            </div>
        </div>
    </div>
</div>
<div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success btn-lg btn-block' : 'btn btn-primary btn-lg btn-block']) ?>
</div>
<?php ActiveForm::end(); ?>