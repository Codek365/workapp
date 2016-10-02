<?php
use yii\helpers\Html;
?>
<div class="userprofile-update">
	<h1><?= Html::encode($this->title) ?></h1>
	<?= $this->render('_form', [
	'model' => $model,
	'user_exp' => $user_exp,
	'user_edu' => $user_edu,
	'user_skill' => $user_skill,
	]) ?>
</div>