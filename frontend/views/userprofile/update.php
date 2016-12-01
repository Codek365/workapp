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
.btn-block {border-radius:0;}
.finput {display: none;}
</style>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="row">
    <div class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="cv_template">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Choose Template</h4>
            </div>
            <div class="modal-body">

                <div class="row">
                  
                  <?php foreach ($cvforms as $key => $cvform): ?>
                      <div class="col-xs-6 col-md-3 col-lg-3">
                        <a href="<?= Url::current(['template' => $cvform['name']])  ?>" class="thumbnail">
                          <img src="..." alt="..." >
                        </a>
                  </div>
                  <?php endforeach ?>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
        <div id="wrap" style="margin-bottom: 60px ">
            <?php
            if (isset($_GET['template'])) {
            require(__DIR__ . '/profile_pages/'.$_GET['template'].'.html');
            } else {
            require(__DIR__ . '/profile_pages/pp_01.html');
            }
            ?>
        </div>
        
        <?php $form = ActiveForm::begin([
        'id' => 'form-cv',
        'enableAjaxValidation' => true,
        ]);?>
        <?= $form->field($model, 'user_id')->textInput(['type' => 'hidden'])->label(false)?>
        <?= $form->field($model, 'name')->textInput(['class' => 'finput'])->label(false) ?>
        <?= $form->field($model, 'email')->textInput(['class' => 'finput'])->label(false) ?>
        <?= $form->field($model, 'phone')->textInput(['class' => 'finput'])->label(false) ?>
        <?= $form->field($model, 'birthday')->textInput(['class' => 'finput'])->label(false) ?>
        <?= $form->field($model, 'career_goal')->textInput(['class' => 'finput'])->label(false) ?>
        <?= $form->field($model, 'address')->textInput(['class' => 'finput'])->label(false) ?>
        <div class="form-group" style="position: fixed;bottom: -15px;width:800px">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-primary btn-lg btn-block','id' => 'btnsubmit']) ?>
            
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>

<script type="text/javascript">
    var form_attr = 'userprofile-';

    

    var validator = ['name','birthday','email','phone','career_goal','address']
    var new_validator = [];
    $.each(validator, function(index, val) {
        $("#"+val).html($("#"+ form_attr + val).val());
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
selector: '.edit,'+new_validator,
menubar: false,
toolbar: false,
inline: true,
// toolbar: 'undo redo  bold italic | alignleft aligncenter alignright | link image'
});
</script>