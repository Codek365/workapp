<?php 
use yii\helpers\Url;
use yii\helpers\HTml;
use yii\widgets\ActiveForm;

?>
<link rel="stylesheet" type="text/css" href="/css/profile_pages/reset-fonts-grids.css" media="all" /> 
<link rel="stylesheet" type="text/css" href="/css/profile_pages/pp_01.css" media="all" /> 
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div id="doc2" class="yui-t7">
	<div id="inner">
	
		<div id="hd">
			<div class="yui-gc">
				<div class=" first">
					<h1 id="name"><?= $model->name?></h1>
					<h2>Web Designer, Director</h2>
				</div>

				<div >
					<div class="contact-info">
						<h3 >Birthday: <span href="mailto:name@yourdomain.com"><?= yii\jui\DatePicker::widget(['id' => 'birthday','name' => 'UserProfile[birthday]','value' => $model->birthday,'dateFormat' => 'yyyy-MM-dd']) ?></span></h3>
						<h3>Email: <span id="email"><?= $model->email?></span></h3>
						<h3>Phone: <span id="phone">084<?= $model->phone?></span></h3>
					</div><!--// .contact-info -->
				</div>
			</div><!--// .yui-gc -->
		</div><!--// hd -->

		<div id="bd">
			<div id="yui-main">
				<div class="yui-b">

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Profile</h2>
						</div>
						<div class="yui-u">
							<p class="enlarge">
								Progressively evolve cross-platform ideas before impactful infomediaries. Energistically visualize tactical initiatives before cross-media catalysts for change. 
							</p>
						</div>
					</div><!--// .yui-gf -->

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Skills</h2>
						</div>
						<div class="yui-u">

								<div class="talent">
									<h2>Web Design</h2>
									<p>Assertively exploit wireless initiatives rather than synergistic core competencies.	</p>
								</div>

								<div class="talent">
									<h2>Interface Design</h2>
									<p>Credibly streamline mission-critical value with multifunctional functionalities.	 </p>
								</div>

								<div class="talent">
									<h2>Project Direction</h2>
									<p>Proven ability to lead and manage a wide variety of design and development projects in team and independent situations.</p>
								</div>
						</div>
					</div><!--// .yui-gf -->

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Technical</h2>
						</div>
						<div class="yui-u">
							<ul class="talent">
								<li>XHTML</li>
								<li>CSS</li>
								<li class="last">Javascript</li>
							</ul>

							<ul class="talent">
								<li>Jquery</li>
								<li>PHP</li>
								<li class="last">CVS / Subversion</li>
							</ul>

							<ul class="talent">
								<li>OS X</li>
								<li>Windows XP/Vista</li>
								<li class="last">Linux</li>
							</ul>
						</div>
					</div><!--// .yui-gf-->

					<div class="yui-gf">
	
						<div class="yui-u first">
							<h2>Experience</h2>
						</div><!--// .yui-u -->

						<div class="yui-u" id="exp">
						</div><!--// .yui-u -->
					</div><!--// .yui-gf -->


					<div class="yui-gf last">
						<div class="yui-u first">
							<h2>Education</h2>
						</div>
						<div class="yui-u">
							<h2>Indiana University - Bloomington, Indiana</h2>
							<h3>Dual Major, Economics and English &mdash; <strong>4.0 GPA</strong> </h3>
						</div>
					</div><!--// .yui-gf -->


				</div><!--// .yui-b -->
			</div><!--// yui-main -->
		</div><!--// bd -->

		<div id="ft">
			<p>Jonathan Doe &mdash; <a href="mailto:name@yourdomain.com">name@yourdomain.com</a> &mdash; (313) - 867-5309</p>
		</div><!--// footer -->

	</div><!-- // inner -->


</div><!--// doc -->
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

<script type="text/javascript">
	$.ajax({
		url: '<?php echo Url::to(Yii::getAlias('@web') . '/userprofile/ajaxgetexp', true);?>',
		type: 'POST',
		data: {act: 'get'},
	})
	.done(function(data) {
		var html
        $.each(JSON.parse(data), function(index, val) {
			html += '<div class="job">'
			html +=	'<h2>'+val.company+'</h2>'
			html +=	'<h3>'+val.job_title+'</h3>'
			html +=	'<h4>'+val.exp_time+'</h4>'
			html +=	'<p>'+val.describe+'</p>'
			html +=	'</div>';
		});
		$("#exp").html(html);
	});
</script>