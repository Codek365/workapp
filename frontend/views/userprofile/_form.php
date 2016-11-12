<?php
use kartik\widgets\ActiveForm;
use kartik\widgets\DatePicker;
use \kartik\rating\StarRating;
use yii\helpers\Html;
use kartik\editable\Editable;

/* @var $this yii\web\View */
/* @var $model frontend\models\Userprofile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row">
    <div class="col-md-10">
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
                ->textInput(['id' => 'name','value' => Yii::$app->user->identity->username,'maxlength' => true, 'placeholder' => $model->getAttributeLabel('name')]) ?>

                <div class="form-group">
                    <?= DatePicker::widget([
                    'name' => 'UserProfile[birthday]',
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
       <div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success btn-lg btn-block' : 'btn btn-primary btn-lg btn-block']) ?>
</div>
    </div>
    
</div>

<?php ActiveForm::end(); ?>
               