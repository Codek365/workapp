<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

?>
<div class="userprofile-view">


    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
       
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'birthday',
            'phone',
            'address',
            'email',
            'career_goal:ntext',
        ],
    ]) ?>

</div>
