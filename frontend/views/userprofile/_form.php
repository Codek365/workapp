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

<?php $form = ActiveForm::begin([
    'id' => 'form-cv',
    'enableAjaxValidation' => true,
]);?>
<?= $form->field($model, 'user_id')->textInput(['type' => 'hidden'])->label(false)?>
<?= $form->field($model, 'name')->textInput(['type' => 'hidden'])->label(false) ?>
<?= $form->field($model, 'email')->textInput(['type' => 'hidden'])->label(false) ?>
<?= $form->field($model, 'phone')->textInput(['type' => 'hidden'])->label(false) ?>
<?= $form->field($model, 'birthday')->textInput(['type' => 'hidden'])->label(false) ?>
<?= $form->field($model, 'career_goal')->textInput(['type' => 'hidden'])->label(false) ?>
<?= $form->field($model, 'address')->textInput(['type' => 'hidden'])->label(false) ?>
<div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary btn-lg btn-block','id' => 'btnsubmit']) ?>
        </div>
<?php ActiveForm::end(); ?>
<script type="text/javascript">
var validator = ['name','email','phone','career_goal','address']
var new_validator = [];
$.each(validator, function(index, val) {
         $("#userprofile-"+val).attr('value', $("#"+val).text());
         new_validator.push("#"+val)
    });
$("#btnsubmit").on('click', function() {
    
    
    $.each(validator, function(index, val) {
         $("#userprofile-"+val).attr('value', $("#"+val).text());
         new_validator.push("#"+val)
    });
    $("#userprofile-birthday").attr('value', $("#birthday").val());

});
tinymce.init({
    selector: '.yui-u,'+new_validator,
    menubar: false,

  inline: true,
  toolbar: 'undo redo | styleselect  bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image'
});
</script>