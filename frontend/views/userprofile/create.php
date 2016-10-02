<?php
use yii\helpers\Html;
?>
<div class="userprofile-create">
	<?= $this->render('_form', [
		'model' => $model,
		'user_exp' => $user_exp,
		'user_edu' => $user_edu,
		'user_skill' => $user_skill,
	]) ?>
</div>