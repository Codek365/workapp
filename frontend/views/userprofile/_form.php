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
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput(['type' => 'hidden','value' => Yii::$app->user->identity->id])->label(false) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true,'value' => Yii::$app->user->identity->username]) ?>
    <label><?= $model->getAttributeLabel('birthday') ?> </label>
    <?= yii\jui\DatePicker::widget(['id' => 'birthday','name' => 'UserProfile[birthday]','value' => $model->birthday,'dateFormat' => 'yyyy-MM-dd','options' => ['class' => 'form-control']
]) ?>

    <?= $form->field($model, 'email')->textInput(['value' => Yii::$app->user->identity->email]) ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'career_goal')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>