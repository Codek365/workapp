<?php

/* @var $this yii\web\View */

use yii\bootstrap\Modal;

$this->title = 'My Yii Application';
?>
<div class="site-index">
<center>
    <div class="jumbotron">
        <?php Modal::begin([
            'size' => 'modal-sm',
            'closeButton' => false,
            'toggleButton' => ['label' => 'Tạo CV Ngay!','class' => 'btn btn-lg btn-success'],
        ])?>
        <p>Đăng nhập hoặc đăng ký </p>
        <center><?= yii\authclient\widgets\AuthChoice::widget(['baseAuthUrl' => ['site/auth']]); ?></center>
        <?php Modal::end(); ?>
    </div>
</center>
        
</div>
