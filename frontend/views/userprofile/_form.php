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
<link rel="stylesheet" type="text/css" href="/css/profile_pages/pp_01.css" media="all" /> 
<link rel="stylesheet" type="text/css" href="/css/profile_pages/resume.css" media="all" />
<!-- <div class="row">
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
        <div class="panel panel-default">
            <div class="panel-body">
            <label>Information</label>
                <?= $form->field($user_edu, 'user_id')
                ->textInput(['value' => Yii::$app->user->identity->id , 'type' => 'hidden'])
                ?>
                <div class="form-group">
                    <?= DatePicker::widget([
                    'name' => 'UserEducations[edu_time]',
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
                    'name' => 'UserExperiences[exp_time]',
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
<?php ActiveForm::end(); ?> -->
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
 <?php  $form = ActiveForm::begin([
                'id' => 'login-form-horizontal',
                'formConfig' => ['showLabels' => false,'showHints' => true,'deviceSize' => ActiveForm::SIZE_SMALL]
                ]);  ?>

<div id="doc2" class="yui-t7 " >
    <div id="inner">
    
        <div id="hd">
            <div class="yui-gcc editable">
                <div class="yui-u first ">
                    <h1> <?= $form->field($model, 'name')
                ->textInput(['id' => 'name','value' => Yii::$app->user->identity->username,'maxlength' => true, 'placeholder' => $model->getAttributeLabel('name')]) ?></h1>
                    <h2>Web Designer, Director</h2>
                </div>

                <div class="yui-u">
                    <div class="contact-info">
                        <h3><a href="mailto:name@yourdomain.com">name@yourdomain.com</a></h3>
                        <h3>(313) - 867-5309</h3>
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
                                    <p>Assertively exploit wireless initiatives rather than synergistic core competencies.  </p>
                                </div>

                                <div class="talent">
                                    <h2>Interface Design</h2>
                                    <p>Credibly streamline mission-critical value with multifunctional functionalities.  </p>
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

                        <div class="yui-u">

                            <div class="job">
                                <h2>Facebook</h2>
                                <h3>Senior Interface Designer</h3>
                                <h4>2005-2007</h4>
                                <p>Intrinsicly enable optimal core competencies through corporate relationships. Phosfluorescently implement worldwide vortals and client-focused imperatives. Conveniently initiate virtual paradigms and top-line convergence. </p>
                            </div>

                            <div class="job">
                                <h2>Apple Inc.</h2>
                                <h3>Senior Interface Designer</h3>
                                <h4>2005-2007</h4>
                                <p>Progressively reconceptualize multifunctional "outside the box" thinking through inexpensive methods of empowerment. Compellingly morph extensive niche markets with mission-critical ideas. Phosfluorescently deliver bricks-and-clicks strategic theme areas rather than scalable benefits. </p>
                            </div>

                            <div class="job">
                                <h2>Microsoft</h2>
                                <h3>Principal and Creative Lead</h3>
                                <h4>2004-2005</h4>
                                <p>Intrinsicly transform flexible manufactured products without excellent intellectual capital. Energistically evisculate orthogonal architectures through covalent action items. Assertively incentivize sticky platforms without synergistic materials. </p>
                            </div>


                            <div class="job last">
                                <h2>International Business Machines (IBM)</h2>
                                <h3>Lead Web Designer</h3>
                                <h4>2001-2004</h4>
                                <p>Globally re-engineer cross-media schemas through viral methods of empowerment. Proactively grow long-term high-impact human capital and highly efficient innovation. Intrinsicly iterate excellent e-tailers with timely e-markets.</p>
                            </div>

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
<?php ActiveForm::end(); ?> 
<script type="text/javascript">
   

tinymce.init({
    selector: 'div.editable',
    menubar: false,

  inline: true,
  // plugins: [
  //   'advlist autolink lists link image charmap print preview anchor',
  //   'searchreplace visualblocks code fullscreen',
  //   'insertdatetime media table contextmenu paste'
  // ],
  toolbar: 'undo redo | styleselect  bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image'
});
</script>