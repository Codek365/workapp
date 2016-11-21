<?php 
use yii\helpers\Url;
use yii\helpers\HTml;
use yii\widgets\ActiveForm;

?>
<style type="text/css">
	html, body, .container-fluid {background: #181818;}
	#wrap {
	width: 800px; 
	background: #f3f3f3;
	margin-top:  10px; 
}
</style>

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	    <div id="wrap">
		    <?php 
		    if (isset($_GET['template'])) {
		    	require(__DIR__ . '/profile_pages/'.$_GET['template'].'.php'); 
		    } else {
		    	require(__DIR__ . '/profile_pages/pp_01.php'); 
		    }
		    ?>
	    </div>
   </div>
</div>
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
<center>
	<?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary btn-lg','id' => 'btnsubmit']) ?>
</center>
            
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
    selector: '.edit,.yui-u,'+new_validator,
    menubar: false,

  inline: true,
  toolbar: 'undo redo  bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | link image'
});
</script>